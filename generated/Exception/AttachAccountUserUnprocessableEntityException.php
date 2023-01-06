<?php

namespace MauticInc\MEGA\OpenAPI\Generated\Exception;

class AttachAccountUserUnprocessableEntityException extends UnprocessableEntityException
{
    /**
     * @var \MauticInc\MEGA\OpenAPI\Generated\Model\AccountsAccountUsersPatchResponse422
     */
    private $accountsAccountUsersPatchResponse422;
    public function __construct(\MauticInc\MEGA\OpenAPI\Generated\Model\AccountsAccountUsersPatchResponse422 $accountsAccountUsersPatchResponse422)
    {
        parent::__construct('Unprocessable Request');
        $this->accountsAccountUsersPatchResponse422 = $accountsAccountUsersPatchResponse422;
    }
    public function getAccountsAccountUsersPatchResponse422() : \MauticInc\MEGA\OpenAPI\Generated\Model\AccountsAccountUsersPatchResponse422
    {
        return $this->accountsAccountUsersPatchResponse422;
    }
}