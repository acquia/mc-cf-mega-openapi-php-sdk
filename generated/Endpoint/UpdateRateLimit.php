<?php

namespace MauticInc\MEGA\OpenAPI\Generated\Endpoint;

class UpdateRateLimit extends \MauticInc\MEGA\OpenAPI\Generated\Runtime\Client\BaseEndpoint implements \MauticInc\MEGA\OpenAPI\Generated\Runtime\Client\Endpoint
{
    protected $uuid;
    /**
     * Update requested Rate Limit
     *
     * @param string $uuid 
     * @param null|\MauticInc\MEGA\OpenAPI\Generated\Model\RateLimit $requestBody 
     */
    public function __construct(string $uuid, ?\MauticInc\MEGA\OpenAPI\Generated\Model\RateLimit $requestBody = null)
    {
        $this->uuid = $uuid;
        $this->body = $requestBody;
    }
    use \MauticInc\MEGA\OpenAPI\Generated\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'PATCH';
    }
    public function getUri() : string
    {
        return str_replace(array('{uuid}'), array($this->uuid), '/rate-limits/{uuid}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        if ($this->body instanceof \MauticInc\MEGA\OpenAPI\Generated\Model\RateLimit) {
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
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\UpdateRateLimitUnauthorizedException
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\UpdateRateLimitForbiddenException
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\UpdateRateLimitNotFoundException
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\UpdateRateLimitUnprocessableEntityException
     *
     * @return null|\MauticInc\MEGA\OpenAPI\Generated\Model\RateLimitsUuidPatchResponse200
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'MauticInc\\MEGA\\OpenAPI\\Generated\\Model\\RateLimitsUuidPatchResponse200', 'json');
        }
        if (is_null($contentType) === false && (401 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \MauticInc\MEGA\OpenAPI\Generated\Exception\UpdateRateLimitUnauthorizedException($serializer->deserialize($body, 'MauticInc\\MEGA\\OpenAPI\\Generated\\Model\\ResponseUnauthenticated', 'json'));
        }
        if (is_null($contentType) === false && (403 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \MauticInc\MEGA\OpenAPI\Generated\Exception\UpdateRateLimitForbiddenException($serializer->deserialize($body, 'MauticInc\\MEGA\\OpenAPI\\Generated\\Model\\ResponseForbidden', 'json'));
        }
        if (is_null($contentType) === false && (404 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \MauticInc\MEGA\OpenAPI\Generated\Exception\UpdateRateLimitNotFoundException($serializer->deserialize($body, 'MauticInc\\MEGA\\OpenAPI\\Generated\\Model\\ResponseNotFound', 'json'));
        }
        if (is_null($contentType) === false && (422 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \MauticInc\MEGA\OpenAPI\Generated\Exception\UpdateRateLimitUnprocessableEntityException($serializer->deserialize($body, 'MauticInc\\MEGA\\OpenAPI\\Generated\\Model\\RateLimitsUuidPatchResponse422', 'json'));
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array('OAuth2');
    }
}