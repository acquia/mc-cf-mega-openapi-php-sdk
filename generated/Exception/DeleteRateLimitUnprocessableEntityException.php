<?php

namespace MauticInc\MEGA\OpenAPI\Generated\Exception;

class DeleteRateLimitUnprocessableEntityException extends UnprocessableEntityException
{
    /**
     * @var \MauticInc\MEGA\OpenAPI\Generated\Model\RateLimitsUuidDeleteResponse422
     */
    private $rateLimitsUuidDeleteResponse422;
    public function __construct(\MauticInc\MEGA\OpenAPI\Generated\Model\RateLimitsUuidDeleteResponse422 $rateLimitsUuidDeleteResponse422)
    {
        parent::__construct('Unprocessable Request');
        $this->rateLimitsUuidDeleteResponse422 = $rateLimitsUuidDeleteResponse422;
    }
    public function getRateLimitsUuidDeleteResponse422() : \MauticInc\MEGA\OpenAPI\Generated\Model\RateLimitsUuidDeleteResponse422
    {
        return $this->rateLimitsUuidDeleteResponse422;
    }
}