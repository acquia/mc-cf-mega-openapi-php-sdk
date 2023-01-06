<?php

namespace MauticInc\MEGA\OpenAPI\Generated\Endpoint;

class ReattemptValidationForSenderDomain extends \MauticInc\MEGA\OpenAPI\Generated\Runtime\Client\BaseEndpoint implements \MauticInc\MEGA\OpenAPI\Generated\Runtime\Client\Endpoint
{
    protected $sender_domain;
    /**
     * 
     *
     * @param string $senderDomain 
     */
    public function __construct(string $senderDomain)
    {
        $this->sender_domain = $senderDomain;
    }
    use \MauticInc\MEGA\OpenAPI\Generated\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'POST';
    }
    public function getUri() : string
    {
        return str_replace(array('{sender_domain}'), array($this->sender_domain), '/sender-domains/{sender_domain}/reattempt-validation');
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
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\ReattemptValidationForSenderDomainUnauthorizedException
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\ReattemptValidationForSenderDomainForbiddenException
     *
     * @return null|\MauticInc\MEGA\OpenAPI\Generated\Model\SenderDomainsSenderDomainReattemptValidationPostResponse200
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'MauticInc\\MEGA\\OpenAPI\\Generated\\Model\\SenderDomainsSenderDomainReattemptValidationPostResponse200', 'json');
        }
        if (is_null($contentType) === false && (401 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \MauticInc\MEGA\OpenAPI\Generated\Exception\ReattemptValidationForSenderDomainUnauthorizedException($serializer->deserialize($body, 'MauticInc\\MEGA\\OpenAPI\\Generated\\Model\\ResponseUnauthenticated', 'json'));
        }
        if (is_null($contentType) === false && (403 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \MauticInc\MEGA\OpenAPI\Generated\Exception\ReattemptValidationForSenderDomainForbiddenException($serializer->deserialize($body, 'MauticInc\\MEGA\\OpenAPI\\Generated\\Model\\ResponseForbidden', 'json'));
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array('OAuth2');
    }
}