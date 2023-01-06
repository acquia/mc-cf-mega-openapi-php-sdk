<?php

namespace MauticInc\MEGA\OpenAPI\Generated\Endpoint;

class ForceDeleteAccounts extends \MauticInc\MEGA\OpenAPI\Generated\Runtime\Client\BaseEndpoint implements \MauticInc\MEGA\OpenAPI\Generated\Runtime\Client\Endpoint
{
    /**
     * 
     *
     * @param null|\MauticInc\MEGA\OpenAPI\Generated\Model\AccountsForceDeletePutBody $requestBody 
     */
    public function __construct(?\MauticInc\MEGA\OpenAPI\Generated\Model\AccountsForceDeletePutBody $requestBody = null)
    {
        $this->body = $requestBody;
    }
    use \MauticInc\MEGA\OpenAPI\Generated\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'PUT';
    }
    public function getUri() : string
    {
        return '/accounts/force-delete';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        if ($this->body instanceof \MauticInc\MEGA\OpenAPI\Generated\Model\AccountsForceDeletePutBody) {
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
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\ForceDeleteAccountsUnauthorizedException
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\ForceDeleteAccountsForbiddenException
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\ForceDeleteAccountsPreconditionFailedException
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\ForceDeleteAccountsUnprocessableEntityException
     *
     * @return null|\MauticInc\MEGA\OpenAPI\Generated\Model\ResponseDeleted
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'MauticInc\\MEGA\\OpenAPI\\Generated\\Model\\ResponseDeleted', 'json');
        }
        if (is_null($contentType) === false && (401 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \MauticInc\MEGA\OpenAPI\Generated\Exception\ForceDeleteAccountsUnauthorizedException($serializer->deserialize($body, 'MauticInc\\MEGA\\OpenAPI\\Generated\\Model\\ResponseUnauthenticated', 'json'));
        }
        if (is_null($contentType) === false && (403 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \MauticInc\MEGA\OpenAPI\Generated\Exception\ForceDeleteAccountsForbiddenException($serializer->deserialize($body, 'MauticInc\\MEGA\\OpenAPI\\Generated\\Model\\ResponseForbidden', 'json'));
        }
        if (is_null($contentType) === false && (412 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \MauticInc\MEGA\OpenAPI\Generated\Exception\ForceDeleteAccountsPreconditionFailedException($serializer->deserialize($body, 'MauticInc\\MEGA\\OpenAPI\\Generated\\Model\\AccountsForceDeletePutResponse412', 'json'));
        }
        if (is_null($contentType) === false && (422 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \MauticInc\MEGA\OpenAPI\Generated\Exception\ForceDeleteAccountsUnprocessableEntityException($serializer->deserialize($body, 'MauticInc\\MEGA\\OpenAPI\\Generated\\Model\\AccountsForceDeletePutResponse422', 'json'));
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array('OAuth2');
    }
}