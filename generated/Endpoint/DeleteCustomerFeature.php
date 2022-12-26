<?php

namespace MauticInc\MEGA\OpenAPI\Generated\Endpoint;

class DeleteCustomerFeature extends \MauticInc\MEGA\OpenAPI\Generated\Runtime\Client\BaseEndpoint implements \MauticInc\MEGA\OpenAPI\Generated\Runtime\Client\Endpoint
{
    protected $customer_uuid;
    protected $feature_uuid;
    /**
     * 
     *
     * @param string $customerUuid 
     * @param string $featureUuid 
     */
    public function __construct(string $customerUuid, string $featureUuid)
    {
        $this->customer_uuid = $customerUuid;
        $this->feature_uuid = $featureUuid;
    }
    use \MauticInc\MEGA\OpenAPI\Generated\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'DELETE';
    }
    public function getUri() : string
    {
        return str_replace(array('{customer_uuid}', '{feature_uuid}'), array($this->customer_uuid, $this->feature_uuid), '/customers/{customer_uuid}/features/{feature_uuid}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        return array(array(), null);
    }
    public function getExtraHeaders() : array
    {
        return array('Accept' => array('application/json'));
    }
    /**
     * {@inheritdoc}
     *
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\DeleteCustomerFeatureUnauthorizedException
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\DeleteCustomerFeatureForbiddenException
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\DeleteCustomerFeatureNotFoundException
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\DeleteCustomerFeatureUnprocessableEntityException
     *
     * @return null|\MauticInc\MEGA\OpenAPI\Generated\Model\CustomersCustomerUuidFeaturesFeatureUuidDeleteResponse200
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'MauticInc\\MEGA\\OpenAPI\\Generated\\Model\\CustomersCustomerUuidFeaturesFeatureUuidDeleteResponse200', 'json');
        }
        if (is_null($contentType) === false && (401 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \MauticInc\MEGA\OpenAPI\Generated\Exception\DeleteCustomerFeatureUnauthorizedException($serializer->deserialize($body, 'MauticInc\\MEGA\\OpenAPI\\Generated\\Model\\ResponseUnauthenticated', 'json'));
        }
        if (is_null($contentType) === false && (403 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \MauticInc\MEGA\OpenAPI\Generated\Exception\DeleteCustomerFeatureForbiddenException($serializer->deserialize($body, 'MauticInc\\MEGA\\OpenAPI\\Generated\\Model\\ResponseForbidden', 'json'));
        }
        if (is_null($contentType) === false && (404 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \MauticInc\MEGA\OpenAPI\Generated\Exception\DeleteCustomerFeatureNotFoundException($serializer->deserialize($body, 'MauticInc\\MEGA\\OpenAPI\\Generated\\Model\\ResponseNotFound', 'json'));
        }
        if (is_null($contentType) === false && (422 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \MauticInc\MEGA\OpenAPI\Generated\Exception\DeleteCustomerFeatureUnprocessableEntityException($serializer->deserialize($body, 'MauticInc\\MEGA\\OpenAPI\\Generated\\Model\\CustomersCustomerUuidFeaturesFeatureUuidDeleteResponse422', 'json'));
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array('OAuth2');
    }
}