<?php

namespace MauticInc\MEGA\OpenAPI\Generated\Endpoint;

class BrowseFeature extends \MauticInc\MEGA\OpenAPI\Generated\Runtime\Client\BaseEndpoint implements \MauticInc\MEGA\OpenAPI\Generated\Runtime\Client\Endpoint
{
    /**
     * Get feature flags list
     *
     * @param array $queryParameters {
     *     @var int $per_page Feature Flags to be fetched per page
     *     @var int $page page to be fetched
     *     @var string $search searchable string
     *     @var string $sort_column column to sort data on
     *     @var string $sort_direction direction to sort data on
     *     @var string $trashed loading trashed data
     * }
     */
    public function __construct(array $queryParameters = array())
    {
        $this->queryParameters = $queryParameters;
    }
    use \MauticInc\MEGA\OpenAPI\Generated\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'GET';
    }
    public function getUri() : string
    {
        return '/features';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        return array(array(), null);
    }
    public function getExtraHeaders() : array
    {
        return array('Accept' => array('application/json'));
    }
    protected function getQueryOptionsResolver() : \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getQueryOptionsResolver();
        $optionsResolver->setDefined(array('per_page', 'page', 'search', 'sort_column', 'sort_direction', 'trashed'));
        $optionsResolver->setRequired(array());
        $optionsResolver->setDefaults(array('per_page' => 25, 'page' => 1));
        $optionsResolver->addAllowedTypes('per_page', array('int'));
        $optionsResolver->addAllowedTypes('page', array('int'));
        $optionsResolver->addAllowedTypes('search', array('string'));
        $optionsResolver->addAllowedTypes('sort_column', array('string'));
        $optionsResolver->addAllowedTypes('sort_direction', array('string'));
        $optionsResolver->addAllowedTypes('trashed', array('string'));
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\BrowseFeatureUnauthorizedException
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\BrowseFeatureForbiddenException
     *
     * @return null|\MauticInc\MEGA\OpenAPI\Generated\Model\FeaturesGetResponse200
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'MauticInc\\MEGA\\OpenAPI\\Generated\\Model\\FeaturesGetResponse200', 'json');
        }
        if (is_null($contentType) === false && (401 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \MauticInc\MEGA\OpenAPI\Generated\Exception\BrowseFeatureUnauthorizedException($serializer->deserialize($body, 'MauticInc\\MEGA\\OpenAPI\\Generated\\Model\\ResponseUnauthorized', 'json'));
        }
        if (is_null($contentType) === false && (403 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \MauticInc\MEGA\OpenAPI\Generated\Exception\BrowseFeatureForbiddenException($serializer->deserialize($body, 'MauticInc\\MEGA\\OpenAPI\\Generated\\Model\\ResponseForbidden', 'json'));
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array('OAuth2');
    }
}