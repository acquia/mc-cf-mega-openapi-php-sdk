<?php

namespace MauticInc\MEGA\OpenAPI\Generated\Exception;

class UpdateSenderDomainUnprocessableEntityException extends UnprocessableEntityException
{
    /**
     * @var \MauticInc\MEGA\OpenAPI\Generated\Model\SenderDomainsSenderDomainPatchResponse422
     */
    private $senderDomainsSenderDomainPatchResponse422;
    public function __construct(\MauticInc\MEGA\OpenAPI\Generated\Model\SenderDomainsSenderDomainPatchResponse422 $senderDomainsSenderDomainPatchResponse422)
    {
        parent::__construct('Unprocessable Request');
        $this->senderDomainsSenderDomainPatchResponse422 = $senderDomainsSenderDomainPatchResponse422;
    }
    public function getSenderDomainsSenderDomainPatchResponse422() : \MauticInc\MEGA\OpenAPI\Generated\Model\SenderDomainsSenderDomainPatchResponse422
    {
        return $this->senderDomainsSenderDomainPatchResponse422;
    }
}