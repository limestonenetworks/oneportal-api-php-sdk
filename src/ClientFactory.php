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
    public static function create(string $url, string $token, HttpClient $httpClient = null): Client
    {
        if (null === $httpClient) {
            $httpClient = HttpClientDiscovery::find();
        }
        $url = rtrim($url,"/") . "/";

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
     * @param array           $credentials
     * @param HttpClient|null $httpClient
     *
     * @return ResponseInterface
     * @throws \Psr\Http\Client\ClientExceptionInterface
     */
    public static function auth(array $credentials, HttpClient $httpClient = null): ResponseInterface
    {
        if (null === $httpClient) {
            $httpClient = HttpClientDiscovery::find();
        }
        $url = rtrim($credentials['endpoint'],"/") . "/";
        $uri = Psr17FactoryDiscovery::findUrlFactory()->createUri($url ."oauth/token");
        $pluginClient = new PluginClient($httpClient, [
            new AddPathPlugin($uri),
            new AddHostPlugin($uri)
        ]);
        $data = [
            'username'      => $credentials['username'],
            'password'      => $credentials['password'],
            'scope'         => '*',
            'client_id'     => $credentials['client_id'],
            'client_secret' => $credentials['client_secret'],
            'grant_type'    => 'password'
        ];
        $stream = Psr17FactoryDiscovery::findStreamFactory()->createStream(http_build_query($data));
        $request = Psr17FactoryDiscovery::findRequestFactory()->createRequest('POST', $uri);
        $request = $request->withBody($stream);
        $request = $request->withHeader('Content-Type', 'application/x-www-form-urlencoded');
        return $pluginClient->sendRequest($request);
    }

    /**
     * @param string          $token
     * @param string          $endpoint
     * @param HttpClient|null $httpClient
     *
     * @return bool
     * @throws \Psr\Http\Client\ClientExceptionInterface
     */
    public static function check(string $token, string $endpoint, HttpClient $httpClient = null): bool
    {
        if (null === $httpClient) {
            $httpClient = HttpClientDiscovery::find();
        }
        $url = rtrim($endpoint,"/") . "/";
        $uri = Psr17FactoryDiscovery::findUrlFactory()->createUri($url ."v2/login/token-scopes");
        $pluginClient = new PluginClient($httpClient, [
            new AddPathPlugin($uri),
            new AddHostPlugin($uri),
            new HeaderAppendPlugin([
                'Authorization' => 'Bearer '.$token,
            ]),
        ]);
        $request = Psr17FactoryDiscovery::findRequestFactory()->createRequest('GET', $uri);
        $response = $pluginClient->sendRequest($request);
        $data = json_decode($response->getBody()->getContents());
        return isset($data->scopes);
    }
}