<?php

namespace MauticInc\MEGA\OpenAPI\Generated\Exception;

class DetachAccountUserUnprocessableEntityException extends UnprocessableEntityException
{
    /**
     * @var \MauticInc\MEGA\OpenAPI\Generated\Model\AccountsAccountUsersUserDeleteResponse422
     */
    private $accountsAccountUsersUserDeleteResponse422;
    public function __construct(\MauticInc\MEGA\OpenAPI\Generated\Model\AccountsAccountUsersUserDeleteResponse422 $accountsAccountUsersUserDeleteResponse422)
    {
        parent::__construct('Unprocessable Request');
        $this->accountsAccountUsersUserDeleteResponse422 = $accountsAccountUsersUserDeleteResponse422;
    }
    public function getAccountsAccountUsersUserDeleteResponse422() : \MauticInc\MEGA\OpenAPI\Generated\Model\AccountsAccountUsersUserDeleteResponse422
    {
        return $this->accountsAccountUsersUserDeleteResponse422;
    }
}