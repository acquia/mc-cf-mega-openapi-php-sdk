<?php

namespace MauticInc\MEGA\OpenAPI\Generated\Exception;

class AccountDeletePreconditionFailedException extends PreconditionFailedException
{
    /**
     * @var \MauticInc\MEGA\OpenAPI\Generated\Model\AccountsAccountDeleteResponse412
     */
    private $accountsAccountDeleteResponse412;
    public function __construct(\MauticInc\MEGA\OpenAPI\Generated\Model\AccountsAccountDeleteResponse412 $accountsAccountDeleteResponse412)
    {
        parent::__construct('Unprocessable Request');
        $this->accountsAccountDeleteResponse412 = $accountsAccountDeleteResponse412;
    }
    public function getAccountsAccountDeleteResponse412() : \MauticInc\MEGA\OpenAPI\Generated\Model\AccountsAccountDeleteResponse412
    {
        return $this->accountsAccountDeleteResponse412;
    }
}