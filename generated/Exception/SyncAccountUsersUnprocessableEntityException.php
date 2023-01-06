<?php

namespace MauticInc\MEGA\OpenAPI\Generated\Exception;

class SyncAccountUsersUnprocessableEntityException extends UnprocessableEntityException
{
    /**
     * @var \MauticInc\MEGA\OpenAPI\Generated\Model\AccountsAccountUsersPutResponse422
     */
    private $accountsAccountUsersPutResponse422;
    public function __construct(\MauticInc\MEGA\OpenAPI\Generated\Model\AccountsAccountUsersPutResponse422 $accountsAccountUsersPutResponse422)
    {
        parent::__construct('Unprocessable Request');
        $this->accountsAccountUsersPutResponse422 = $accountsAccountUsersPutResponse422;
    }
    public function getAccountsAccountUsersPutResponse422() : \MauticInc\MEGA\OpenAPI\Generated\Model\AccountsAccountUsersPutResponse422
    {
        return $this->accountsAccountUsersPutResponse422;
    }
}