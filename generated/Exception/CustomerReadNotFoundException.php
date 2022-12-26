<?php

namespace MauticInc\MEGA\OpenAPI\Generated\Exception;

class CustomerReadNotFoundException extends NotFoundException
{
    /**
     * @var \MauticInc\MEGA\OpenAPI\Generated\Model\ResponseNotFound
     */
    private $responseNotFound;
    public function __construct(\MauticInc\MEGA\OpenAPI\Generated\Model\ResponseNotFound $responseNotFound)
    {
        parent::__construct('Entity not found.');
        $this->responseNotFound = $responseNotFound;
    }
    public function getResponseNotFound() : \MauticInc\MEGA\OpenAPI\Generated\Model\ResponseNotFound
    {
        return $this->responseNotFound;
    }
}