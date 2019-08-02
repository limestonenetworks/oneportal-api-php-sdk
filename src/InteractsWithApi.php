<?php namespace Limestone;

trait InteractsWithApi {

    public function getClient()
    {
        return ClientFactory::create($this->getToken());
    }

    public function getToken(): string
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
            $vars[$property->getName()] = $property->getValue($model);
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
            return $_this->serializeModel($item);
        }, $array);
        return $array;
    }
}
