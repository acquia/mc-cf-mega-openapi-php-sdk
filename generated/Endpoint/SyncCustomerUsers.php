<?php

namespace MauticInc\MEGA\OpenAPI\Generated\Endpoint;

class SyncCustomerUsers extends \MauticInc\MEGA\OpenAPI\Generated\Runtime\Client\BaseEndpoint implements \MauticInc\MEGA\OpenAPI\Generated\Runtime\Client\Endpoint
{
    protected $customer;
    protected $accept;
    /**
     * attaches multiple users to requested customer. note: detaches users from requested customer which are not present in request.
     *
     * @param string $customer 
     * @param null|\MauticInc\MEGA\OpenAPI\Generated\Model\CustomersCustomerUsersPutBody $requestBody 
     * @param array $accept Accept content header application/json|application/xml
     */
    public function __construct(string $customer, ?\MauticInc\MEGA\OpenAPI\Generated\Model\CustomersCustomerUsersPutBody $requestBody = null, array $accept = array())
    {
        $this->customer = $customer;
        $this->body = $requestBody;
        $this->accept = $accept;
    }
    use \MauticInc\MEGA\OpenAPI\Generated\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'PUT';
    }
    public function getUri() : string
    {
        return str_replace(array('{customer}'), array($this->customer), '/customers/{customer}/users');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        if ($this->body instanceof \MauticInc\MEGA\OpenAPI\Generated\Model\CustomersCustomerUsersPutBody) {
            return array(array('Content-Type' => array('application/json')), $serializer->serialize($this->body, 'json'));
        }
        return array(array(), null);
    }
    public function getExtraHeaders() : array
    {
        if (empty($this->accept)) {
            return array('Accept' => array('application/json', 'application/xml'));
        }
        return $this->accept;
    }
    /**
     * {@inheritdoc}
     *
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\SyncCustomerUsersUnauthorizedException
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\SyncCustomerUsersForbiddenException
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\SyncCustomerUsersNotFoundException
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\SyncCustomerUsersUnprocessableEntityException
     *
     * @return null|\MauticInc\MEGA\OpenAPI\Generated\Model\CustomersCustomerUsersPutResponse200
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'MauticInc\\MEGA\\OpenAPI\\Generated\\Model\\CustomersCustomerUsersPutResponse200', 'json');
        }
        if (is_null($contentType) === false && (401 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \MauticInc\MEGA\OpenAPI\Generated\Exception\SyncCustomerUsersUnauthorizedException($serializer->deserialize($body, 'MauticInc\\MEGA\\OpenAPI\\Generated\\Model\\ResponseUnauthenticated', 'json'));
        }
        if (is_null($contentType) === false && (403 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \MauticInc\MEGA\OpenAPI\Generated\Exception\SyncCustomerUsersForbiddenException($serializer->deserialize($body, 'MauticInc\\MEGA\\OpenAPI\\Generated\\Model\\ResponseForbidden', 'json'));
        }
        if (is_null($contentType) === false && (404 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \MauticInc\MEGA\OpenAPI\Generated\Exception\SyncCustomerUsersNotFoundException($serializer->deserialize($body, 'MauticInc\\MEGA\\OpenAPI\\Generated\\Model\\ResponseNotFound', 'json'));
        }
        if (is_null($contentType) === false && (422 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \MauticInc\MEGA\OpenAPI\Generated\Exception\SyncCustomerUsersUnprocessableEntityException($serializer->deserialize($body, 'MauticInc\\MEGA\\OpenAPI\\Generated\\Model\\CustomersCustomerUsersPutJsonResponse422', 'json'));
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array('OAuth2');
    }
}