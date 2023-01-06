<?php

namespace MauticInc\MEGA\OpenAPI\Generated\Exception;

class GetAccountsUnprocessableEntityException extends UnprocessableEntityException
{
    /**
     * @var \MauticInc\MEGA\OpenAPI\Generated\Model\AccountsGetResponse422
     */
    private $accountsGetResponse422;
    public function __construct(\MauticInc\MEGA\OpenAPI\Generated\Model\AccountsGetResponse422 $accountsGetResponse422)
    {
        parent::__construct('Unprocessable Request');
        $this->accountsGetResponse422 = $accountsGetResponse422;
    }
    public function getAccountsGetResponse422() : \MauticInc\MEGA\OpenAPI\Generated\Model\AccountsGetResponse422
    {
        return $this->accountsGetResponse422;
    }
}