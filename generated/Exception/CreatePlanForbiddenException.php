<?php

namespace MauticInc\MEGA\OpenAPI\Generated\Exception;

class CreatePlanForbiddenException extends ForbiddenException
{
    /**
     * @var \MauticInc\MEGA\OpenAPI\Generated\Model\ResponseForbidden
     */
    private $responseForbidden;
    public function __construct(\MauticInc\MEGA\OpenAPI\Generated\Model\ResponseForbidden $responseForbidden)
    {
        parent::__construct('Operation forbidden');
        $this->responseForbidden = $responseForbidden;
    }
    public function getResponseForbidden() : \MauticInc\MEGA\OpenAPI\Generated\Model\ResponseForbidden
    {
        return $this->responseForbidden;
    }
}