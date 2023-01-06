<?php

namespace MauticInc\MEGA\OpenAPI\Generated\Exception;

class CreateAccountUnprocessableEntityException extends UnprocessableEntityException
{
    /**
     * @var \MauticInc\MEGA\OpenAPI\Generated\Model\AccountsPostResponse422
     */
    private $accountsPostResponse422;
    public function __construct(\MauticInc\MEGA\OpenAPI\Generated\Model\AccountsPostResponse422 $accountsPostResponse422)
    {
        parent::__construct('Unprocessable Request');
        $this->accountsPostResponse422 = $accountsPostResponse422;
    }
    public function getAccountsPostResponse422() : \MauticInc\MEGA\OpenAPI\Generated\Model\AccountsPostResponse422
    {
        return $this->accountsPostResponse422;
    }
}