<?php

namespace MauticInc\MEGA\OpenAPI\Generated\Exception;

class AttachCustomerUserUnprocessableEntityException extends UnprocessableEntityException
{
    /**
     * @var \MauticInc\MEGA\OpenAPI\Generated\Model\CustomersCustomerUsersPatchResponse422
     */
    private $customersCustomerUsersPatchResponse422;
    public function __construct(\MauticInc\MEGA\OpenAPI\Generated\Model\CustomersCustomerUsersPatchResponse422 $customersCustomerUsersPatchResponse422)
    {
        parent::__construct('Unprocessable Request');
        $this->customersCustomerUsersPatchResponse422 = $customersCustomerUsersPatchResponse422;
    }
    public function getCustomersCustomerUsersPatchResponse422() : \MauticInc\MEGA\OpenAPI\Generated\Model\CustomersCustomerUsersPatchResponse422
    {
        return $this->customersCustomerUsersPatchResponse422;
    }
}