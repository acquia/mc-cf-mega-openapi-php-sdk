<?php

namespace MauticInc\MEGA\OpenAPI\Generated\Exception;

class RestoreAuditLogUnprocessableEntityException extends UnprocessableEntityException
{
    /**
     * @var \MauticInc\MEGA\OpenAPI\Generated\Model\AuditsUuidPostResponse422
     */
    private $auditsUuidPostResponse422;
    public function __construct(\MauticInc\MEGA\OpenAPI\Generated\Model\AuditsUuidPostResponse422 $auditsUuidPostResponse422)
    {
        parent::__construct('Unprocessable Request');
        $this->auditsUuidPostResponse422 = $auditsUuidPostResponse422;
    }
    public function getAuditsUuidPostResponse422() : \MauticInc\MEGA\OpenAPI\Generated\Model\AuditsUuidPostResponse422
    {
        return $this->auditsUuidPostResponse422;
    }
}