<?php

namespace MauticInc\MEGA\OpenAPI\Generated\Exception;

class BulkDetachCustomerUsersUnprocessableEntityException extends UnprocessableEntityException
{
    /**
     * @var \MauticInc\MEGA\OpenAPI\Generated\Model\CustomersCustomerUsersBulkDetachPutResponse422
     */
    private $customersCustomerUsersBulkDetachPutResponse422;
    public function __construct(\MauticInc\MEGA\OpenAPI\Generated\Model\CustomersCustomerUsersBulkDetachPutResponse422 $customersCustomerUsersBulkDetachPutResponse422)
    {
        parent::__construct('Unprocessable Request');
        $this->customersCustomerUsersBulkDetachPutResponse422 = $customersCustomerUsersBulkDetachPutResponse422;
    }
    public function getCustomersCustomerUsersBulkDetachPutResponse422() : \MauticInc\MEGA\OpenAPI\Generated\Model\CustomersCustomerUsersBulkDetachPutResponse422
    {
        return $this->customersCustomerUsersBulkDetachPutResponse422;
    }
}