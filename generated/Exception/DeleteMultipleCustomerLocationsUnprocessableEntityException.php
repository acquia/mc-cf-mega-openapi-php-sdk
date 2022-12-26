<?php

namespace MauticInc\MEGA\OpenAPI\Generated\Exception;

class DeleteMultipleCustomerLocationsUnprocessableEntityException extends UnprocessableEntityException
{
    /**
     * @var \MauticInc\MEGA\OpenAPI\Generated\Model\CustomersCustomerUuidLocationsDeleteMultiplePutResponse422
     */
    private $customersCustomerUuidLocationsDeleteMultiplePutResponse422;
    public function __construct(\MauticInc\MEGA\OpenAPI\Generated\Model\CustomersCustomerUuidLocationsDeleteMultiplePutResponse422 $customersCustomerUuidLocationsDeleteMultiplePutResponse422)
    {
        parent::__construct('Unprocessable Request');
        $this->customersCustomerUuidLocationsDeleteMultiplePutResponse422 = $customersCustomerUuidLocationsDeleteMultiplePutResponse422;
    }
    public function getCustomersCustomerUuidLocationsDeleteMultiplePutResponse422() : \MauticInc\MEGA\OpenAPI\Generated\Model\CustomersCustomerUuidLocationsDeleteMultiplePutResponse422
    {
        return $this->customersCustomerUuidLocationsDeleteMultiplePutResponse422;
    }
}