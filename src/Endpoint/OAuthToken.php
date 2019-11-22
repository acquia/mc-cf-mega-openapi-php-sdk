<?php declare(strict_types=1);

namespace MauticInc\MEGA\OpenAPI\Endpoint;

use Jane\OpenApiRuntime\Client\BaseEndpoint;
use Jane\OpenApiRuntime\Client\Psr7Endpoint;
use Jane\OpenApiRuntime\Client\Psr7EndpointTrait;
use MauticInc\MEGA\OpenAPI\Model\ResponseOAuthClientCredentials;
use Symfony\Component\Serializer\SerializerInterface;

class OAuthToken extends BaseEndpoint implements Psr7Endpoint
{
    use Psr7EndpointTrait;

    private $clientId;

    private $clientSecret;

    /**
     * OAuthToken constructor.
     *
     * @param string $clientId
     * @param string $clientSecret
     */
    public function __construct(string $clientId, string $clientSecret)
    {
        $this->clientId = $clientId;
        $this->clientSecret = $clientSecret;
    }

    public function getMethod(): string
    {
        return 'POST';
    }

    public function getUri(): string
    {
        return '/oauth/token';
    }

    public function getBody(SerializerInterface $serializer, $streamFactory = null): array
    {
        return [['Content-Type' => ['application/json']], json_encode([
            'grant_type' => 'client_credentials',
            'client_id' => $this->clientId,
            'client_secret' => $this->clientSecret,
            'scope' => '*'
        ])];
    }

    public function getExtraHeaders(): array
    {
        return ['Accept' => ['application/json']];
    }

    /**
     * {@inheritdoc}
     *
     * @return ResponseOAuthClientCredentials|null
     */
    protected function transformResponseBody(string $body, int $status, SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status && mb_strpos($contentType, 'application/json') !== false) {
            return $serializer->deserialize($body, ResponseOAuthClientCredentials::class, 'json');
        }
    }
}