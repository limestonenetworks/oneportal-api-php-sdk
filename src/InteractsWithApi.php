<?php namespace Limestone;

trait InteractsWithApi
{
    public $profile = 'DEFAULT';
    protected $_profiles;

    public function loadProfiles(): void
    {
        $profiles_file = getenv('LSN_PROFILES_FILE') !== false ?
                         getenv('LSN_PROFILES_FILE') : dirname('..') . DIRECTORY_SEPARATOR . 'profiles.ini';
        $this->_profiles = @parse_ini_file($profiles_file, true);
        if ($this->_profiles === false) throw new \Exception('Failed to load profile file');
    }

    public function setProfile(string $profile): void
    {
        $this->profile = $profile;
    }

    public function getProfileOption(string $option): ?string
    {
        if (is_null($this->_profiles)) $this->loadProfiles();
        if (isset($this->_profiles[$this->profile][$option])) {
            // Return the option from the user profile
            return $this->_profiles[$this->profile][$option];
        }
        if (isset($this->_profiles['DEFAULT'][$option])) {
            // Return the option from the 'DEFAULT' profile
            return $this->_profiles['DEFAULT'][$option];
        }

        return null;
    }

    public function getCredentials() {
        return [
            'endpoint' => $this->getProfileOption('endpoint'),
            'username' => $this->getProfileOption('username'),
            'password' => $this->getProfileOption('password'),
            'client_id' => $this->getProfileOption('client_id'),
            'client_secret' => $this->getProfileOption('client_secret')
        ];
    }

    public function getApiClient(?string $profile)
    {
        if (!is_null($profile)) $this->setProfile($profile);
        return ClientFactory::create($this->getProfileOption('endpoint'),
                                     $this->getToken());
    }

    public function getProject(): ?string
    {
        if (getenv('LSN_API_PROJECT') !== false)
            return getenv('LSN_API_PROJECT');

        if (!is_null($this->getProfileOption('project')))
            return $this->getProfileOption('project');

        return null;
    }

    public function getToken(): string
    {
        $credentials = $this->getCredentials();
        $token_key = md5(serialize($credentials));
        $token = $this->loadToken($token_key);
        if(null !== $token){
            $valid = $this->checkToken($token, $credentials['endpoint']);
            if($valid){
                return $token;
            }
        }
        $response = ClientFactory::auth($credentials);
        $token = json_decode($response->getBody()->getContents())->access_token;
        $this->storeToken($token_key, $token);
        return $token;
    }

    public function serializeModel($model)
    {
        $reflection = new \ReflectionClass($model);
        $properties = $reflection->getProperties();
        $vars = [];
        foreach ($properties as $property) {
            $property->setAccessible(true);
            $value = $property->getValue($model);
            if (is_object($value)) {
                $value = $this->serializeModel($value);
            } else if (is_array($value)) {
                $value = $this->toArray($value);
            }
            $vars[$property->getName()] = $value;
        }
        return $vars;
    }

    public function toJson($model)
    {
        return json_encode($this->serializeModel($model));
    }

    public function toArray($array)
    {
        $_this = $this;
        $array = array_map(function ($item) use ($_this) {
            return $_this->serializeModel($item);
        }, $array);
        return $array;
    }

    public function loadToken(string $token_key): ?string
    {
        $path = dirname('..') . DIRECTORY_SEPARATOR . '.token_' . $token_key;
        if(is_file($path)){
            return file_get_contents($path);
        }
        return null;
    }

    public function storeToken(string $token_key, string $token)
    {
        $path = dirname('..') . DIRECTORY_SEPARATOR . '.token_' . $token_key;
        file_put_contents($path,$token);
    }

    public function checkToken(string $token, string $endpoint): bool
    {
        return ClientFactory::check($token,$endpoint);
    }
}
