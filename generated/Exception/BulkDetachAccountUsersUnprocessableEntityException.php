<?php

namespace MauticInc\MEGA\OpenAPI\Generated\Exception;

class BulkDetachAccountUsersUnprocessableEntityException extends UnprocessableEntityException
{
    /**
     * @var \MauticInc\MEGA\OpenAPI\Generated\Model\AccountsAccountUsersBulkDetachPutResponse422
     */
    private $accountsAccountUsersBulkDetachPutResponse422;
    public function __construct(\MauticInc\MEGA\OpenAPI\Generated\Model\AccountsAccountUsersBulkDetachPutResponse422 $accountsAccountUsersBulkDetachPutResponse422)
    {
        parent::__construct('Unprocessable Request');
        $this->accountsAccountUsersBulkDetachPutResponse422 = $accountsAccountUsersBulkDetachPutResponse422;
    }
    public function getAccountsAccountUsersBulkDetachPutResponse422() : \MauticInc\MEGA\OpenAPI\Generated\Model\AccountsAccountUsersBulkDetachPutResponse422
    {
        return $this->accountsAccountUsersBulkDetachPutResponse422;
    }
}