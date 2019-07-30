
<?php 

namespace Limestone;

use Http\Client\Common\Plugin\AddHostPlugin;
use Http\Client\Common\Plugin\AddPathPlugin;
use Http\Client\Common\Plugin\ErrorPlugin;
use Http\Client\Common\Plugin\HeaderAppendPlugin;
use Http\Client\Common\PluginClient;
use Http\Client\HttpClient;
use Http\Discovery\HttpClientDiscovery;
use Http\Discovery\UriFactoryDiscovery;
use JoliCode\Slack\Api\Client;

class ClientFactory
{
    public static function create(string $token, HttpClient $httpClient = null): Client
    {
        if (null === $httpClient) {
            $httpClient = HttpClientDiscovery::find();
        }
        $uri = UriFactoryDiscovery::find()->createUri('API_URL');
        $pluginClient = new PluginClient($httpClient, [
            new ErrorPlugin(),
            new AddPathPlugin($uri),
            new AddHostPlugin($uri),
            new HeaderAppendPlugin([
                'Authorization' => 'Bearer '.$token,
            ]),
        ]);
        return Client::create($pluginClient);
    }
}