<?php

namespace MauticInc\MEGA\OpenAPI\Generated\Exception;

class UpdateMailTemplateUnprocessableEntityException extends UnprocessableEntityException
{
    /**
     * @var \MauticInc\MEGA\OpenAPI\Generated\Model\MailTemplatesUuidPatchResponse422
     */
    private $mailTemplatesUuidPatchResponse422;
    public function __construct(\MauticInc\MEGA\OpenAPI\Generated\Model\MailTemplatesUuidPatchResponse422 $mailTemplatesUuidPatchResponse422)
    {
        parent::__construct('Unprocessable Request');
        $this->mailTemplatesUuidPatchResponse422 = $mailTemplatesUuidPatchResponse422;
    }
    public function getMailTemplatesUuidPatchResponse422() : \MauticInc\MEGA\OpenAPI\Generated\Model\MailTemplatesUuidPatchResponse422
    {
        return $this->mailTemplatesUuidPatchResponse422;
    }
}