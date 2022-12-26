<?php

namespace MauticInc\MEGA\OpenAPI\Generated\Exception;

class RestoreAccountsUnprocessableEntityException extends UnprocessableEntityException
{
    /**
     * @var \MauticInc\MEGA\OpenAPI\Generated\Model\AccountsRestorePutResponse422
     */
    private $accountsRestorePutResponse422;
    public function __construct(\MauticInc\MEGA\OpenAPI\Generated\Model\AccountsRestorePutResponse422 $accountsRestorePutResponse422)
    {
        parent::__construct('Unprocessable Requested');
        $this->accountsRestorePutResponse422 = $accountsRestorePutResponse422;
    }
    public function getAccountsRestorePutResponse422() : \MauticInc\MEGA\OpenAPI\Generated\Model\AccountsRestorePutResponse422
    {
        return $this->accountsRestorePutResponse422;
    }
}