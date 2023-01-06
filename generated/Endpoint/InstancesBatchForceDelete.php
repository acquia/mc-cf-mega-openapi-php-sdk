<?php

namespace MauticInc\MEGA\OpenAPI\Generated\Endpoint;

class InstancesBatchForceDelete extends \MauticInc\MEGA\OpenAPI\Generated\Runtime\Client\BaseEndpoint implements \MauticInc\MEGA\OpenAPI\Generated\Runtime\Client\Endpoint
{
    /**
     * Force delete multiple instances
     *
     * @param null|\MauticInc\MEGA\OpenAPI\Generated\Model\InstancesForceDeletePatchBody $requestBody 
     */
    public function __construct(?\MauticInc\MEGA\OpenAPI\Generated\Model\InstancesForceDeletePatchBody $requestBody = null)
    {
        $this->body = $requestBody;
    }
    use \MauticInc\MEGA\OpenAPI\Generated\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'PATCH';
    }
    public function getUri() : string
    {
        return '/instances/force-delete';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        if ($this->body instanceof \MauticInc\MEGA\OpenAPI\Generated\Model\InstancesForceDeletePatchBody) {
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
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\InstancesBatchForceDeleteUnauthorizedException
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\InstancesBatchForceDeleteForbiddenException
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\InstancesBatchForceDeleteNotFoundException
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\InstancesBatchForceDeleteTooManyRequestsException
     *
     * @return null|\MauticInc\MEGA\OpenAPI\Generated\Model\ResponseDeleted
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (is_null($contentType) === false && (204 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'MauticInc\\MEGA\\OpenAPI\\Generated\\Model\\ResponseDeleted', 'json');
        }
        if (is_null($contentType) === false && (401 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \MauticInc\MEGA\OpenAPI\Generated\Exception\InstancesBatchForceDeleteUnauthorizedException($serializer->deserialize($body, 'MauticInc\\MEGA\\OpenAPI\\Generated\\Model\\ResponseUnauthorized', 'json'));
        }
        if (is_null($contentType) === false && (403 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \MauticInc\MEGA\OpenAPI\Generated\Exception\InstancesBatchForceDeleteForbiddenException($serializer->deserialize($body, 'MauticInc\\MEGA\\OpenAPI\\Generated\\Model\\ResponseForbidden', 'json'));
        }
        if (is_null($contentType) === false && (404 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \MauticInc\MEGA\OpenAPI\Generated\Exception\InstancesBatchForceDeleteNotFoundException($serializer->deserialize($body, 'MauticInc\\MEGA\\OpenAPI\\Generated\\Model\\ResponseNotFound', 'json'));
        }
        if (is_null($contentType) === false && (429 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \MauticInc\MEGA\OpenAPI\Generated\Exception\InstancesBatchForceDeleteTooManyRequestsException($serializer->deserialize($body, 'MauticInc\\MEGA\\OpenAPI\\Generated\\Model\\ResponseRateLimited', 'json'));
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array('OAuth2');
    }
}