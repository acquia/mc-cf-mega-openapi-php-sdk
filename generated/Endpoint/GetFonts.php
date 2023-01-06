<?php

namespace MauticInc\MEGA\OpenAPI\Generated\Endpoint;

class GetFonts extends \MauticInc\MEGA\OpenAPI\Generated\Runtime\Client\BaseEndpoint implements \MauticInc\MEGA\OpenAPI\Generated\Runtime\Client\Endpoint
{
    /**
     * List Fonts
     *
     * @param array $queryParameters {
     *     @var int $per_page Number of records per page
     *     @var int $page Page to be fetched
     *     @var string $search searchable string
     *     @var string $sort_column column name to sort data
     *     @var string $sort_direction direction to sort data
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
        return '/fonts';
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
        $optionsResolver->setDefined(array('per_page', 'page', 'search', 'sort_column', 'sort_direction'));
        $optionsResolver->setRequired(array());
        $optionsResolver->setDefaults(array());
        $optionsResolver->addAllowedTypes('per_page', array('int'));
        $optionsResolver->addAllowedTypes('page', array('int'));
        $optionsResolver->addAllowedTypes('search', array('string'));
        $optionsResolver->addAllowedTypes('sort_column', array('string'));
        $optionsResolver->addAllowedTypes('sort_direction', array('string'));
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\GetFontsUnauthorizedException
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\GetFontsForbiddenException
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\GetFontsNotFoundException
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\GetFontsUnprocessableEntityException
     *
     * @return null|\MauticInc\MEGA\OpenAPI\Generated\Model\FontsGetResponse200
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'MauticInc\\MEGA\\OpenAPI\\Generated\\Model\\FontsGetResponse200', 'json');
        }
        if (is_null($contentType) === false && (401 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \MauticInc\MEGA\OpenAPI\Generated\Exception\GetFontsUnauthorizedException($serializer->deserialize($body, 'MauticInc\\MEGA\\OpenAPI\\Generated\\Model\\ResponseUnauthenticated', 'json'));
        }
        if (is_null($contentType) === false && (403 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \MauticInc\MEGA\OpenAPI\Generated\Exception\GetFontsForbiddenException($serializer->deserialize($body, 'MauticInc\\MEGA\\OpenAPI\\Generated\\Model\\ResponseForbidden', 'json'));
        }
        if (is_null($contentType) === false && (404 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \MauticInc\MEGA\OpenAPI\Generated\Exception\GetFontsNotFoundException($serializer->deserialize($body, 'MauticInc\\MEGA\\OpenAPI\\Generated\\Model\\ResponseNotFound', 'json'));
        }
        if (is_null($contentType) === false && (422 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \MauticInc\MEGA\OpenAPI\Generated\Exception\GetFontsUnprocessableEntityException($serializer->deserialize($body, 'MauticInc\\MEGA\\OpenAPI\\Generated\\Model\\FontsGetResponse422', 'json'));
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array('OAuth2');
    }
}