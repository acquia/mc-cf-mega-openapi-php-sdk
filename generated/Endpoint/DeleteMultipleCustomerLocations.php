<?php

namespace MauticInc\MEGA\OpenAPI\Generated\Endpoint;

class DeleteMultipleCustomerLocations extends \MauticInc\MEGA\OpenAPI\Generated\Runtime\Client\BaseEndpoint implements \MauticInc\MEGA\OpenAPI\Generated\Runtime\Client\Endpoint
{
    protected $customer_uuid;
    /**
     * 
     *
     * @param string $customerUuid 
     * @param null|\MauticInc\MEGA\OpenAPI\Generated\Model\CustomersCustomerUuidLocationsDeleteMultiplePutBody $requestBody 
     */
    public function __construct(string $customerUuid, ?\MauticInc\MEGA\OpenAPI\Generated\Model\CustomersCustomerUuidLocationsDeleteMultiplePutBody $requestBody = null)
    {
        $this->customer_uuid = $customerUuid;
        $this->body = $requestBody;
    }
    use \MauticInc\MEGA\OpenAPI\Generated\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'PUT';
    }
    public function getUri() : string
    {
        return str_replace(array('{customer_uuid}'), array($this->customer_uuid), '/customers/{customer_uuid}/locations/delete-multiple');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        if ($this->body instanceof \MauticInc\MEGA\OpenAPI\Generated\Model\CustomersCustomerUuidLocationsDeleteMultiplePutBody) {
            return array(array('Content-Type' => array('application/json')), $serializer->serialize($this->body, 'json'));
        }
        return array(array(), null);
    }
    public function getExtraHeaders() : array
    {
        return array('Accept' => array('application/json'));
    }
    /**
     * {@inheritdoc}
     *
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\DeleteMultipleCustomerLocationsUnauthorizedException
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\DeleteMultipleCustomerLocationsForbiddenException
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\DeleteMultipleCustomerLocationsNotFoundException
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\DeleteMultipleCustomerLocationsUnprocessableEntityException
     *
     * @return null|\MauticInc\MEGA\OpenAPI\Generated\Model\CustomersCustomerUuidLocationsDeleteMultiplePutResponse200
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'MauticInc\\MEGA\\OpenAPI\\Generated\\Model\\CustomersCustomerUuidLocationsDeleteMultiplePutResponse200', 'json');
        }
        if (is_null($contentType) === false && (401 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \MauticInc\MEGA\OpenAPI\Generated\Exception\DeleteMultipleCustomerLocationsUnauthorizedException($serializer->deserialize($body, 'MauticInc\\MEGA\\OpenAPI\\Generated\\Model\\ResponseUnauthenticated', 'json'));
        }
        if (is_null($contentType) === false && (403 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \MauticInc\MEGA\OpenAPI\Generated\Exception\DeleteMultipleCustomerLocationsForbiddenException($serializer->deserialize($body, 'MauticInc\\MEGA\\OpenAPI\\Generated\\Model\\ResponseForbidden', 'json'));
        }
        if (is_null($contentType) === false && (404 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \MauticInc\MEGA\OpenAPI\Generated\Exception\DeleteMultipleCustomerLocationsNotFoundException($serializer->deserialize($body, 'MauticInc\\MEGA\\OpenAPI\\Generated\\Model\\ResponseNotFound', 'json'));
        }
        if (is_null($contentType) === false && (422 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \MauticInc\MEGA\OpenAPI\Generated\Exception\DeleteMultipleCustomerLocationsUnprocessableEntityException($serializer->deserialize($body, 'MauticInc\\MEGA\\OpenAPI\\Generated\\Model\\CustomersCustomerUuidLocationsDeleteMultiplePutResponse422', 'json'));
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array('OAuth2');
    }
}