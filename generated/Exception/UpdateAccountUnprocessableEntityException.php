<?php

namespace MauticInc\MEGA\OpenAPI\Generated\Exception;

class UpdateAccountUnprocessableEntityException extends UnprocessableEntityException
{
    /**
     * @var \MauticInc\MEGA\OpenAPI\Generated\Model\AccountsAccountPatchResponse422
     */
    private $accountsAccountPatchResponse422;
    public function __construct(\MauticInc\MEGA\OpenAPI\Generated\Model\AccountsAccountPatchResponse422 $accountsAccountPatchResponse422)
    {
        parent::__construct('Unprocessable Request');
        $this->accountsAccountPatchResponse422 = $accountsAccountPatchResponse422;
    }
    public function getAccountsAccountPatchResponse422() : \MauticInc\MEGA\OpenAPI\Generated\Model\AccountsAccountPatchResponse422
    {
        return $this->accountsAccountPatchResponse422;
    }
}