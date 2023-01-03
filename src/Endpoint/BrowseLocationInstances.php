<?php declare(strict_types=1);

namespace MauticInc\MEGA\OpenAPI\Endpoint;

use MauticInc\MEGA\OpenAPI\Generated\Endpoint\BrowseLocationInstances as BaseEndpoint;

class BrowseLocationInstances extends BaseEndpoint
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
