<?php

namespace MauticInc\MEGA\OpenAPI\Generated\Exception;

class GetAccountUsersUnprocessableEntityException extends UnprocessableEntityException
{
    /**
     * @var \MauticInc\MEGA\OpenAPI\Generated\Model\AccountsAccountUsersGetResponse422
     */
    private $accountsAccountUsersGetResponse422;
    public function __construct(\MauticInc\MEGA\OpenAPI\Generated\Model\AccountsAccountUsersGetResponse422 $accountsAccountUsersGetResponse422)
    {
        parent::__construct('Unprocessable Request');
        $this->accountsAccountUsersGetResponse422 = $accountsAccountUsersGetResponse422;
    }
    public function getAccountsAccountUsersGetResponse422() : \MauticInc\MEGA\OpenAPI\Generated\Model\AccountsAccountUsersGetResponse422
    {
        return $this->accountsAccountUsersGetResponse422;
    }
}