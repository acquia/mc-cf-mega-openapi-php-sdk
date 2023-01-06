<?php

namespace MauticInc\MEGA\OpenAPI\Generated\Exception;

class CreateSenderDomainUnprocessableEntityException extends UnprocessableEntityException
{
    /**
     * @var \MauticInc\MEGA\OpenAPI\Generated\Model\SenderDomainsPostResponse422
     */
    private $senderDomainsPostResponse422;
    public function __construct(\MauticInc\MEGA\OpenAPI\Generated\Model\SenderDomainsPostResponse422 $senderDomainsPostResponse422)
    {
        parent::__construct('Unprocessable Request');
        $this->senderDomainsPostResponse422 = $senderDomainsPostResponse422;
    }
    public function getSenderDomainsPostResponse422() : \MauticInc\MEGA\OpenAPI\Generated\Model\SenderDomainsPostResponse422
    {
        return $this->senderDomainsPostResponse422;
    }
}