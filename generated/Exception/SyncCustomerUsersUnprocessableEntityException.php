<?php

namespace MauticInc\MEGA\OpenAPI\Generated\Exception;

class SyncCustomerUsersUnprocessableEntityException extends UnprocessableEntityException
{
    /**
     * @var \MauticInc\MEGA\OpenAPI\Generated\Model\CustomersCustomerUsersPutJsonResponse422
     */
    private $customersCustomerUsersPutJsonResponse422;
    public function __construct(\MauticInc\MEGA\OpenAPI\Generated\Model\CustomersCustomerUsersPutJsonResponse422 $customersCustomerUsersPutJsonResponse422)
    {
        parent::__construct('Unprocessable Request');
        $this->customersCustomerUsersPutJsonResponse422 = $customersCustomerUsersPutJsonResponse422;
    }
    public function getCustomersCustomerUsersPutJsonResponse422() : \MauticInc\MEGA\OpenAPI\Generated\Model\CustomersCustomerUsersPutJsonResponse422
    {
        return $this->customersCustomerUsersPutJsonResponse422;
    }
}