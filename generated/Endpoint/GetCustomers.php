<?php

namespace MauticInc\MEGA\OpenAPI\Generated\Endpoint;

class GetCustomers extends \MauticInc\MEGA\OpenAPI\Generated\Runtime\Client\BaseEndpoint implements \MauticInc\MEGA\OpenAPI\Generated\Runtime\Client\Endpoint
{
    /**
     * Fetch list of Customers
     *
     * @param array $queryParameters {
     *     @var int $per_page number of records to be fetched per page.
     *     @var int $page page to be fetched
     *     @var string $search searchable string
     *     @var string $sort_column column on which data can be sorted
     *     @var string $sort_direction sort direction
     *     @var string $ip_pool_uuid uuid of ip pool to filter customers 
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
        return '/customers';
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
        $optionsResolver->setDefined(array('per_page', 'page', 'search', 'sort_column', 'sort_direction', 'ip_pool_uuid'));
        $optionsResolver->setRequired(array());
        $optionsResolver->setDefaults(array('per_page' => '25', 'page' => 1));
        $optionsResolver->addAllowedTypes('per_page', array('int'));
        $optionsResolver->addAllowedTypes('page', array('int'));
        $optionsResolver->addAllowedTypes('search', array('string'));
        $optionsResolver->addAllowedTypes('sort_column', array('string'));
        $optionsResolver->addAllowedTypes('sort_direction', array('string'));
        $optionsResolver->addAllowedTypes('ip_pool_uuid', array('string'));
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\GetCustomersUnauthorizedException
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\GetCustomersForbiddenException
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\GetCustomersUnprocessableEntityException
     *
     * @return null|\MauticInc\MEGA\OpenAPI\Generated\Model\CustomersGetResponse200
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'MauticInc\\MEGA\\OpenAPI\\Generated\\Model\\CustomersGetResponse200', 'json');
        }
        if (is_null($contentType) === false && (401 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \MauticInc\MEGA\OpenAPI\Generated\Exception\GetCustomersUnauthorizedException($serializer->deserialize($body, 'MauticInc\\MEGA\\OpenAPI\\Generated\\Model\\ResponseUnauthenticated', 'json'));
        }
        if (is_null($contentType) === false && (403 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \MauticInc\MEGA\OpenAPI\Generated\Exception\GetCustomersForbiddenException($serializer->deserialize($body, 'MauticInc\\MEGA\\OpenAPI\\Generated\\Model\\ResponseForbidden', 'json'));
        }
        if (is_null($contentType) === false && (422 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \MauticInc\MEGA\OpenAPI\Generated\Exception\GetCustomersUnprocessableEntityException($serializer->deserialize($body, 'MauticInc\\MEGA\\OpenAPI\\Generated\\Model\\CustomersGetResponse422', 'json'));
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array('OAuth2');
    }
}