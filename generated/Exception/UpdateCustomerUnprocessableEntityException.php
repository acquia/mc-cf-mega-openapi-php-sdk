<?php

namespace MauticInc\MEGA\OpenAPI\Generated\Exception;

class UpdateCustomerUnprocessableEntityException extends UnprocessableEntityException
{
    /**
     * @var \MauticInc\MEGA\OpenAPI\Generated\Model\CustomersCustomerPatchResponse422
     */
    private $customersCustomerPatchResponse422;
    public function __construct(\MauticInc\MEGA\OpenAPI\Generated\Model\CustomersCustomerPatchResponse422 $customersCustomerPatchResponse422)
    {
        parent::__construct('Unprocessable Request');
        $this->customersCustomerPatchResponse422 = $customersCustomerPatchResponse422;
    }
    public function getCustomersCustomerPatchResponse422() : \MauticInc\MEGA\OpenAPI\Generated\Model\CustomersCustomerPatchResponse422
    {
        return $this->customersCustomerPatchResponse422;
    }
}