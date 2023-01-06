<?php

namespace MauticInc\MEGA\OpenAPI\Generated\Exception;

class DeleteDatabaseUnauthorizedException extends UnauthorizedException
{
    /**
     * @var \MauticInc\MEGA\OpenAPI\Generated\Model\ResponseUnauthenticated
     */
    private $responseUnauthenticated;
    public function __construct(\MauticInc\MEGA\OpenAPI\Generated\Model\ResponseUnauthenticated $responseUnauthenticated)
    {
        parent::__construct('Unauthenticated response.');
        $this->responseUnauthenticated = $responseUnauthenticated;
    }
    public function getResponseUnauthenticated() : \MauticInc\MEGA\OpenAPI\Generated\Model\ResponseUnauthenticated
    {
        return $this->responseUnauthenticated;
    }
}