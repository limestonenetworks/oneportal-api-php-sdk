<?php

namespace Limestone;

use Http\Client\Common\Plugin\AddHostPlugin;
use Http\Client\Common\Plugin\AddPathPlugin;
use Http\Client\Common\Plugin\ErrorPlugin;
use Http\Client\Common\Plugin\HeaderAppendPlugin;
use Http\Client\Common\PluginClient;
use Http\Client\HttpClient;
use Http\Discovery\HttpClientDiscovery;
use Http\Discovery\Psr17FactoryDiscovery;
use Limestone\SDK\Client;
use Psr\Http\Message\ResponseInterface;

class ClientFactory
{
    public static function create(string $token, HttpClient $httpClient = null): Client
    {
        if (null === $httpClient) {
            $httpClient = HttpClientDiscovery::find();
        }
        $url = rtrim(getenv('API_URL'),"/") . "/";

        $uri = Psr17FactoryDiscovery::findUrlFactory()->createUri($url);
        $pluginClient = new PluginClient($httpClient, [
            new AddPathPlugin($uri),
            new AddHostPlugin($uri),
            new HeaderAppendPlugin([
                'Authorization' => 'Bearer '.$token,
            ]),
        ]);
        return Client::create($pluginClient);
    }

    /**
     * @param HttpClient|null $httpClient
     *
     * @return ResponseInterface
     * @throws \Psr\Http\Client\ClientExceptionInterface
     */
    public static function auth(HttpClient $httpClient = null): ResponseInterface
    {
        if (null === $httpClient) {
            $httpClient = HttpClientDiscovery::find();
        }
        $url = rtrim(getenv('API_URL'),"/") . "/";
        $uri = Psr17FactoryDiscovery::findUrlFactory()->createUri($url ."oauth/token");
        $pluginClient = new PluginClient($httpClient, [
            new AddPathPlugin($uri),
            new AddHostPlugin($uri)
        ]);
        $data = [
            'username'      => getenv('API_USERNAME'),
            'password'      => getenv('API_PASSWORD'),
            'scope'         => '*',
            'client_id'     => getenv('API_CLIENT_ID'),
            'client_secret' => getenv('API_CLIENT_SECRET'),
            'grant_type'    => 'password'
        ];
        $stream = Psr17FactoryDiscovery::findStreamFactory()->createStream(http_build_query($data));
        $request = Psr17FactoryDiscovery::findRequestFactory()->createRequest('POST', $uri);
        $request = $request->withBody($stream);
        $request = $request->withHeader('Content-Type', 'application/x-www-form-urlencoded');
        return $pluginClient->sendRequest($request);
    }
}