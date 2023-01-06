<?php

namespace MauticInc\MEGA\OpenAPI\Generated\Exception;

class UpdateRateLimitUnprocessableEntityException extends UnprocessableEntityException
{
    /**
     * @var \MauticInc\MEGA\OpenAPI\Generated\Model\RateLimitsUuidPatchResponse422
     */
    private $rateLimitsUuidPatchResponse422;
    public function __construct(\MauticInc\MEGA\OpenAPI\Generated\Model\RateLimitsUuidPatchResponse422 $rateLimitsUuidPatchResponse422)
    {
        parent::__construct('Unprocessable Request');
        $this->rateLimitsUuidPatchResponse422 = $rateLimitsUuidPatchResponse422;
    }
    public function getRateLimitsUuidPatchResponse422() : \MauticInc\MEGA\OpenAPI\Generated\Model\RateLimitsUuidPatchResponse422
    {
        return $this->rateLimitsUuidPatchResponse422;
    }
}