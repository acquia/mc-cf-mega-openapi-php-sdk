<?php declare(strict_types=1);

namespace MauticInc\MEGA\OpenAPI\Endpoint;

use MauticInc\MEGA\OpenAPI\Generated\Endpoint\BrowseLocationInstances as BaseEndpoint;
use MauticInc\MEGA\OpenAPI\Generated\Model\ResponseArrayOfInstances;

class BrowseLocationInstances extends BaseEndpoint
{
    private $bearerToken;

    public function setBearerToken(string $token)
    {
        $this->bearerToken = $token;
    }

    public function getUri(): string
    {
        return str_replace(['{uuid}'], [$this->uuid], '/openapi/locations/{uuid}/instances');
    }

    public function getExtraHeaders(): array
    {
        return ['Accept' => ['application/json'], 'Authorization' => sprintf('Bearer %s', $this->bearerToken)];
    }

    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, ResponseArrayOfInstances::class, 'json');
        }
        if (is_null($contentType) === false && (401 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \MauticInc\MEGA\OpenAPI\Generated\Exception\BrowseLocationInstancesUnauthorizedException($serializer->deserialize($body, 'MauticInc\\MEGA\\OpenAPI\\Generated\\Model\\ResponseUnauthenticated', 'json'));
        }
        if (is_null($contentType) === false && (403 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \MauticInc\MEGA\OpenAPI\Generated\Exception\BrowseLocationInstancesForbiddenException($serializer->deserialize($body, 'MauticInc\\MEGA\\OpenAPI\\Generated\\Model\\ResponseForbidden', 'json'));
        }
        if (is_null($contentType) === false && (404 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \MauticInc\MEGA\OpenAPI\Generated\Exception\BrowseLocationInstancesNotFoundException($serializer->deserialize($body, 'MauticInc\\MEGA\\OpenAPI\\Generated\\Model\\ResponseNotFound', 'json'));
        }
    }
}
