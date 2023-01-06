<?php

namespace MauticInc\MEGA\OpenAPI\Generated\Exception;

class InstanceEditUnprocessableEntityException extends UnprocessableEntityException
{
    /**
     * @var \MauticInc\MEGA\OpenAPI\Generated\Model\ResponseUnprocessable
     */
    private $responseUnprocessable;
    public function __construct(\MauticInc\MEGA\OpenAPI\Generated\Model\ResponseUnprocessable $responseUnprocessable)
    {
        parent::__construct('Request unprocessable');
        $this->responseUnprocessable = $responseUnprocessable;
    }
    public function getResponseUnprocessable() : \MauticInc\MEGA\OpenAPI\Generated\Model\ResponseUnprocessable
    {
        return $this->responseUnprocessable;
    }
}