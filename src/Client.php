<?php declare(strict_types=1);

namespace MauticInc\MEGA\OpenAPI;

use Http\Client\Common\Plugin\AddHostPlugin;
use Http\Client\Common\Plugin\AddPathPlugin;
use Http\Client\Common\PluginClient;
use Http\Discovery\HttpClientDiscovery;
use Http\Discovery\MessageFactoryDiscovery;
use Http\Discovery\StreamFactoryDiscovery;
use Http\Discovery\UriFactoryDiscovery;
use MauticInc\MEGA\OpenAPI\Endpoint\InstanceRead;
use MauticInc\MEGA\OpenAPI\Endpoint\LocationInstanceBrowse;
use MauticInc\MEGA\OpenAPI\Endpoint\LocationRead;
use MauticInc\MEGA\OpenAPI\Endpoint\OAuthToken;
use MauticInc\MEGA\OpenAPI\Generated\Client as BaseClient;
use MauticInc\MEGA\OpenAPI\Generated\Model\ResponseArrayOfInstances;
use MauticInc\MEGA\OpenAPI\Generated\Model\ResponseInstance;
use MauticInc\MEGA\OpenAPI\Generated\Normalizer\NormalizerFactory;
use MauticInc\MEGA\OpenAPI\Model\ResponseOAuthClientCredentials;
use MauticInc\MEGA\OpenAPI\Normalizer\ResponseOAuthClientCredentialsNormalizer;
use Symfony\Component\Serializer\Encoder\JsonDecode;
use Symfony\Component\Serializer\Encoder\JsonEncode;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Serializer;

class Client extends BaseClient
{
    private $bearerToken = '';

    public function authorize(string $clientId, string $clientSecret): void
    {
        /** @var ResponseOAuthClientCredentials $response */
        $response = $this->executePsr7Endpoint(new OAuthToken($clientId, $clientSecret));

        $this->bearerToken = $response->getAccessToken();
    }

    /**
     * {@inheritDoc}
     */
    public function locationRead(string $location, string $fetch = self::FETCH_OBJECT): ResponseInstance
    {
        $endpoint = new LocationRead($location);
        $endpoint->setBearerToken($this->bearerToken);

        return $this->executePsr7Endpoint($endpoint, $fetch);
    }

    /**
     * {@inheritDoc}
     */
    public function locationInstanceBrowse(string $location, array $queryParameters = [], string $fetch = self::FETCH_OBJECT): ResponseArrayOfInstances
    {
        $endpoint = new LocationInstanceBrowse($location, $queryParameters);
        $endpoint->setBearerToken($this->bearerToken);

        return $this->executePsr7Endpoint($endpoint, $fetch);
    }

    /**
     * {@inheritDoc}
     */
    public function instanceRead(string $instance, string $fetch = self::FETCH_OBJECT)
    {
        $endpoint = new InstanceRead($instance);
        $endpoint->setBearerToken($this->bearerToken);

        return $this->executePsr7Endpoint($endpoint, $fetch);
    }

    /**
     * @param null $httpClient
     * @param string $baseUri
     * @return BaseClient|static
     */
    public static function create($httpClient = null, string $baseUri = null)
    {
        if (null === $httpClient) {
            $httpClient = HttpClientDiscovery::find();
            $plugins = [];
            $uri = UriFactoryDiscovery::find()->createUri($baseUri ?? 'https://mega-beta.mautic.com');
            $plugins[] = new AddHostPlugin($uri);
            $plugins[] = new AddPathPlugin($uri);
            $httpClient = new PluginClient($httpClient, $plugins);
        }

        $messageFactory = MessageFactoryDiscovery::find();
        $streamFactory = StreamFactoryDiscovery::find();
        $serializers = NormalizerFactory::create();
        $serializers[] = new ResponseOAuthClientCredentialsNormalizer();

        $serializer = new Serializer($serializers, [new JsonEncoder(new JsonEncode(), new JsonDecode())]);

        return new static($httpClient, $messageFactory, $serializer, $streamFactory);
    }
}