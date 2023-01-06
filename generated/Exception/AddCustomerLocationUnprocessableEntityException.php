<?php

namespace MauticInc\MEGA\OpenAPI\Generated\Exception;

class AddCustomerLocationUnprocessableEntityException extends UnprocessableEntityException
{
    /**
     * @var \MauticInc\MEGA\OpenAPI\Generated\Model\CustomersCustomerUuidLocationsPatchResponse422
     */
    private $customersCustomerUuidLocationsPatchResponse422;
    public function __construct(\MauticInc\MEGA\OpenAPI\Generated\Model\CustomersCustomerUuidLocationsPatchResponse422 $customersCustomerUuidLocationsPatchResponse422)
    {
        parent::__construct('Unprocessable Request');
        $this->customersCustomerUuidLocationsPatchResponse422 = $customersCustomerUuidLocationsPatchResponse422;
    }
    public function getCustomersCustomerUuidLocationsPatchResponse422() : \MauticInc\MEGA\OpenAPI\Generated\Model\CustomersCustomerUuidLocationsPatchResponse422
    {
        return $this->customersCustomerUuidLocationsPatchResponse422;
    }
}