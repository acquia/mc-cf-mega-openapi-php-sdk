<?php

namespace MauticInc\MEGA\OpenAPI\Generated\Exception;

class DeleteCustomerPreconditionFailedException extends PreconditionFailedException
{
    /**
     * @var \MauticInc\MEGA\OpenAPI\Generated\Model\CustomersCustomerDeleteResponse412
     */
    private $customersCustomerDeleteResponse412;
    public function __construct(\MauticInc\MEGA\OpenAPI\Generated\Model\CustomersCustomerDeleteResponse412 $customersCustomerDeleteResponse412)
    {
        parent::__construct('Unprocessable Request');
        $this->customersCustomerDeleteResponse412 = $customersCustomerDeleteResponse412;
    }
    public function getCustomersCustomerDeleteResponse412() : \MauticInc\MEGA\OpenAPI\Generated\Model\CustomersCustomerDeleteResponse412
    {
        return $this->customersCustomerDeleteResponse412;
    }
}