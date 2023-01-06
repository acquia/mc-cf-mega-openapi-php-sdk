<?php

namespace MauticInc\MEGA\OpenAPI\Generated\Exception;

class InstanceEditUnauthorizedException extends UnauthorizedException
{
    /**
     * @var \MauticInc\MEGA\OpenAPI\Generated\Model\ResponseUnauthorized
     */
    private $responseUnauthorized;
    public function __construct(\MauticInc\MEGA\OpenAPI\Generated\Model\ResponseUnauthorized $responseUnauthorized)
    {
        parent::__construct('Operation unauthorized.');
        $this->responseUnauthorized = $responseUnauthorized;
    }
    public function getResponseUnauthorized() : \MauticInc\MEGA\OpenAPI\Generated\Model\ResponseUnauthorized
    {
        return $this->responseUnauthorized;
    }
}