<?php declare(strict_types=1);

namespace MauticInc\MEGA\OpenAPI\Endpoint;

use MauticInc\MEGA\OpenAPI\Generated\Endpoint\LocationInstanceBrowse as BaseEndpoint;

class LocationInstanceBrowse extends BaseEndpoint
{
    private $bearerToken;

    public function setBearerToken(string $token)
    {
        $this->bearerToken = $token;
    }

    public function getExtraHeaders(): array
    {
        return ['Accept' => ['application/json'], 'Authorization' => sprintf('Bearer %s', $this->bearerToken)];
    }
}
