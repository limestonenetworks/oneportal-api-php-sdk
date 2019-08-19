<?php namespace Limestone;

trait InteractsWithApi
{
    public $loaded_profiles = [];

    public function getProfile(string $profile = 'default'): array
    {
        if(isset($this->loaded_profiles[$profile])){
            return $this->loaded_profiles[$profile];
        }
        $path = dirname('..') . DIRECTORY_SEPARATOR . '.profiles';
        if(is_file($path)){
            $profiles = include $path;
            if(isset($profiles[$profile])){
                return $profiles[$profile];
            }
            throw new \Exception('Profile not found');
        }
        throw new \Exception('Profile file not found');
    }

    public function getApiClient(string $profile = 'default')
    {
        $credentials = $this->getProfile($profile);
        return ClientFactory::create($credentials['endpoint'],$this->getToken($credentials,$profile));
    }

    public function getProject(string $profile = 'default'): ?string
    {
        return $this->getProfile($profile)['project_id'] ?? null;
    }

    public function getToken(array $credentials, string $profile = 'default'): string
    {
        $token = $this->loadToken($profile);
        if(null !== $token){
            $valid = $this->checkToken($token,$credentials['endpoint']);
            if($valid){
                return $token;
            }
        }
        $response = ClientFactory::auth($credentials);
        $token = json_decode($response->getBody()->getContents())->access_token;
        $this->storeToken($profile,$token);
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
        $array = array_map(function ($item) use($_this) {
            if (is_object($item)) {
                return $_this->serializeModel($item);
            }
            return $item;
        }, $array);
        return $array;
    }

    public function loadToken(string $profile): ?string
    {
        $path = dirname('..') . DIRECTORY_SEPARATOR . $profile . '_token';
        if(is_file($path)){
            return file_get_contents($path);
        }
        return null;
    }

    public function storeToken(string $profile, string $token)
    {
        $path = dirname('..') . DIRECTORY_SEPARATOR . $profile . '_token';
        file_put_contents($path,$token);
    }

    public function checkToken(string $token, string $endpoint): bool
    {
        return ClientFactory::check($token,$endpoint);
    }
}
