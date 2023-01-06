<?php

namespace MauticInc\MEGA\OpenAPI\Generated\Exception;

class UpdateCustomerPreconditionFailedException extends PreconditionFailedException
{
    /**
     * @var \MauticInc\MEGA\OpenAPI\Generated\Model\CustomersCustomerPatchResponse412
     */
    private $customersCustomerPatchResponse412;
    public function __construct(\MauticInc\MEGA\OpenAPI\Generated\Model\CustomersCustomerPatchResponse412 $customersCustomerPatchResponse412)
    {
        parent::__construct('Precondition Failed');
        $this->customersCustomerPatchResponse412 = $customersCustomerPatchResponse412;
    }
    public function getCustomersCustomerPatchResponse412() : \MauticInc\MEGA\OpenAPI\Generated\Model\CustomersCustomerPatchResponse412
    {
        return $this->customersCustomerPatchResponse412;
    }
}