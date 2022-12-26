<?php

namespace MauticInc\MEGA\OpenAPI\Generated\Exception;

class InstanceReadTooManyRequestsException extends TooManyRequestsException
{
    /**
     * @var \MauticInc\MEGA\OpenAPI\Generated\Model\ResponseRateLimited
     */
    private $responseRateLimited;
    public function __construct(\MauticInc\MEGA\OpenAPI\Generated\Model\ResponseRateLimited $responseRateLimited)
    {
        parent::__construct('Operation rate limited.');
        $this->responseRateLimited = $responseRateLimited;
    }
    public function getResponseRateLimited() : \MauticInc\MEGA\OpenAPI\Generated\Model\ResponseRateLimited
    {
        return $this->responseRateLimited;
    }
}