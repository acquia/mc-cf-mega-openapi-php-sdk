<?php

namespace MauticInc\MEGA\OpenAPI\Generated\Exception;

class PostRateLimitUnprocessableEntityException extends UnprocessableEntityException
{
    /**
     * @var \MauticInc\MEGA\OpenAPI\Generated\Model\RateLimitsPostResponse422
     */
    private $rateLimitsPostResponse422;
    public function __construct(\MauticInc\MEGA\OpenAPI\Generated\Model\RateLimitsPostResponse422 $rateLimitsPostResponse422)
    {
        parent::__construct('Unprocessable Request');
        $this->rateLimitsPostResponse422 = $rateLimitsPostResponse422;
    }
    public function getRateLimitsPostResponse422() : \MauticInc\MEGA\OpenAPI\Generated\Model\RateLimitsPostResponse422
    {
        return $this->rateLimitsPostResponse422;
    }
}