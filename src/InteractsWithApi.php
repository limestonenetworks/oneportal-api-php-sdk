<?php namespace Limestone;

trait InteractsWithApi
{

    public function getClient()
    {
        return ClientFactory::create($this->getToken());
    }

    public function getToken($profile = 'default'): string
    {
        $response = ClientFactory::auth();
        return json_decode($response->getBody()->getContents())->access_token;
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

    public function storeToken($token)
    {

    }
}
