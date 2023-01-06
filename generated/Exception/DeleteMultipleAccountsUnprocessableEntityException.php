<?php

namespace MauticInc\MEGA\OpenAPI\Generated\Exception;

class DeleteMultipleAccountsUnprocessableEntityException extends UnprocessableEntityException
{
    /**
     * @var \MauticInc\MEGA\OpenAPI\Generated\Model\AccountsBulkDeletePutResponse422
     */
    private $accountsBulkDeletePutResponse422;
    public function __construct(\MauticInc\MEGA\OpenAPI\Generated\Model\AccountsBulkDeletePutResponse422 $accountsBulkDeletePutResponse422)
    {
        parent::__construct('Unprocessable Request');
        $this->accountsBulkDeletePutResponse422 = $accountsBulkDeletePutResponse422;
    }
    public function getAccountsBulkDeletePutResponse422() : \MauticInc\MEGA\OpenAPI\Generated\Model\AccountsBulkDeletePutResponse422
    {
        return $this->accountsBulkDeletePutResponse422;
    }
}