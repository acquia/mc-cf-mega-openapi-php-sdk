<?php

namespace MauticInc\MEGA\OpenAPI\Generated\Exception;

class ForceDeleteAccountsUnprocessableEntityException extends UnprocessableEntityException
{
    /**
     * @var \MauticInc\MEGA\OpenAPI\Generated\Model\AccountsForceDeletePutResponse422
     */
    private $accountsForceDeletePutResponse422;
    public function __construct(\MauticInc\MEGA\OpenAPI\Generated\Model\AccountsForceDeletePutResponse422 $accountsForceDeletePutResponse422)
    {
        parent::__construct('Unprocessable Request');
        $this->accountsForceDeletePutResponse422 = $accountsForceDeletePutResponse422;
    }
    public function getAccountsForceDeletePutResponse422() : \MauticInc\MEGA\OpenAPI\Generated\Model\AccountsForceDeletePutResponse422
    {
        return $this->accountsForceDeletePutResponse422;
    }
}