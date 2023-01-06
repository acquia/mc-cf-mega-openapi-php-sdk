<?php

namespace MauticInc\MEGA\OpenAPI\Generated\Endpoint;

class AttachCustomerUser extends \MauticInc\MEGA\OpenAPI\Generated\Runtime\Client\BaseEndpoint implements \MauticInc\MEGA\OpenAPI\Generated\Runtime\Client\Endpoint
{
    protected $customer;
    /**
     * 
     *
     * @param string $customer 
     * @param null|\MauticInc\MEGA\OpenAPI\Generated\Model\CustomersCustomerUsersPatchBody $requestBody 
     */
    public function __construct(string $customer, ?\MauticInc\MEGA\OpenAPI\Generated\Model\CustomersCustomerUsersPatchBody $requestBody = null)
    {
        $this->customer = $customer;
        $this->body = $requestBody;
    }
    use \MauticInc\MEGA\OpenAPI\Generated\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'PATCH';
    }
    public function getUri() : string
    {
        return str_replace(array('{customer}'), array($this->customer), '/customers/{customer}/users');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        if ($this->body instanceof \MauticInc\MEGA\OpenAPI\Generated\Model\CustomersCustomerUsersPatchBody) {
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
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\AttachCustomerUserUnauthorizedException
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\AttachCustomerUserForbiddenException
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\AttachCustomerUserNotFoundException
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\AttachCustomerUserUnprocessableEntityException
     *
     * @return null|\MauticInc\MEGA\OpenAPI\Generated\Model\CustomersCustomerUsersPatchResponse200
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'MauticInc\\MEGA\\OpenAPI\\Generated\\Model\\CustomersCustomerUsersPatchResponse200', 'json');
        }
        if (is_null($contentType) === false && (401 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \MauticInc\MEGA\OpenAPI\Generated\Exception\AttachCustomerUserUnauthorizedException($serializer->deserialize($body, 'MauticInc\\MEGA\\OpenAPI\\Generated\\Model\\ResponseUnauthenticated', 'json'));
        }
        if (is_null($contentType) === false && (403 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \MauticInc\MEGA\OpenAPI\Generated\Exception\AttachCustomerUserForbiddenException($serializer->deserialize($body, 'MauticInc\\MEGA\\OpenAPI\\Generated\\Model\\ResponseForbidden', 'json'));
        }
        if (is_null($contentType) === false && (404 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \MauticInc\MEGA\OpenAPI\Generated\Exception\AttachCustomerUserNotFoundException($serializer->deserialize($body, 'MauticInc\\MEGA\\OpenAPI\\Generated\\Model\\ResponseNotFound', 'json'));
        }
        if (is_null($contentType) === false && (422 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \MauticInc\MEGA\OpenAPI\Generated\Exception\AttachCustomerUserUnprocessableEntityException($serializer->deserialize($body, 'MauticInc\\MEGA\\OpenAPI\\Generated\\Model\\CustomersCustomerUsersPatchResponse422', 'json'));
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array('OAuth2');
    }
}