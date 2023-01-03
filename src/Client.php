<?php declare(strict_types=1);

namespace MauticInc\MEGA\OpenAPI;

use Http\Client\Common\Plugin\AddHostPlugin;
use Http\Client\Common\Plugin\AddPathPlugin;
use Http\Client\Common\PluginClient;
use Http\Discovery\HttpClientDiscovery;
use Http\Discovery\MessageFactoryDiscovery;
use Http\Discovery\StreamFactoryDiscovery;
use Http\Discovery\UriFactoryDiscovery;
use MauticInc\MEGA\OpenAPI\Endpoint\BrowseLocationInstances;
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
        $response = $this->executeEndpoint(new OAuthToken($clientId, $clientSecret));
        $this->bearerToken = $response->getAccessToken();
    }

    /**
     * {@inheritDoc}
     */
    public function locationRead(string $location, string $fetch = self::FETCH_OBJECT): ResponseInstance
    {
        $endpoint = new LocationRead($location);
        $endpoint->setBearerToken($this->bearerToken);

        return $this->executeEndpoint($endpoint, $fetch);
    }

    /**
     * {@inheritDoc}
     */
    public function locationInstanceBrowse(string $location, array $queryParameters = [], string $fetch = self::FETCH_OBJECT): ResponseArrayOfInstances
    {
        $endpoint = new BrowseLocationInstances($location, $queryParameters);
        $endpoint->setBearerToken($this->bearerToken);

        return $this->executeEndpoint($endpoint, $fetch);
    }

    /**
     * {@inheritDoc}
     */
    public function instanceRead(string $instance, string $fetch = self::FETCH_OBJECT)
    {
        $endpoint = new InstanceRead($instance);
        $endpoint->setBearerToken($this->bearerToken);

        return $this->executeEndpoint($endpoint, $fetch);
    }

    /**
     * @param null $httpClient
     * @param array $additionalPlugins
     * @param array $additionalNormalizers
     * @param string|null $baseUri
     * @return BaseClient|static
     */
    public static function create($httpClient = null, array $additionalPlugins = array(), array $additionalNormalizers = array(), string $baseUri = null)
    {
        if (null === $httpClient) {
            $httpClient = \Http\Discovery\Psr18ClientDiscovery::find();
            $plugins = [];
            $uri = \Http\Discovery\Psr17FactoryDiscovery::findUrlFactory()->createUri($baseUri ?? 'https://mega-beta.mautic.com');
            $plugins[] = new \Http\Client\Common\Plugin\AddHostPlugin($uri);
            $plugins[] = new \Http\Client\Common\Plugin\AddPathPlugin($uri);
            if (count($additionalPlugins) > 0) {
                $plugins = array_merge($plugins, $additionalPlugins);
            }
            $httpClient = new \Http\Client\Common\PluginClient($httpClient, $plugins);
        }
        $requestFactory = \Http\Discovery\Psr17FactoryDiscovery::findRequestFactory();
        $streamFactory = \Http\Discovery\Psr17FactoryDiscovery::findStreamFactory();
        $additionalNormalizers[] = new ResponseOAuthClientCredentialsNormalizer();
        $normalizers = array(new \Symfony\Component\Serializer\Normalizer\ArrayDenormalizer(), new \MauticInc\MEGA\OpenAPI\Generated\Normalizer\JaneObjectNormalizer());
        if (count($additionalNormalizers) > 0) {
            $normalizers = array_merge($normalizers, $additionalNormalizers);
        }

        $serializer = new \Symfony\Component\Serializer\Serializer($normalizers, array(
            new \Symfony\Component\Serializer\Encoder\JsonEncoder(
                new \Symfony\Component\Serializer\Encoder\JsonEncode(),
                new \Symfony\Component\Serializer\Encoder\JsonDecode(array('json_decode_associative' => false))
            )
        ));
        return new static($httpClient, $requestFactory, $serializer, $streamFactory);
    }
}