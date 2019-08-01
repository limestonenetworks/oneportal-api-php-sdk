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
        return json_encode($vars);
    }
}