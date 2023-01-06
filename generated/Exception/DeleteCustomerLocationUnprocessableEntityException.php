<?php

namespace MauticInc\MEGA\OpenAPI\Generated\Exception;

class DeleteCustomerLocationUnprocessableEntityException extends UnprocessableEntityException
{
    /**
     * @var \MauticInc\MEGA\OpenAPI\Generated\Model\CustomersCustomerUuidLocationsLocationUuidDeleteResponse422
     */
    private $customersCustomerUuidLocationsLocationUuidDeleteResponse422;
    public function __construct(\MauticInc\MEGA\OpenAPI\Generated\Model\CustomersCustomerUuidLocationsLocationUuidDeleteResponse422 $customersCustomerUuidLocationsLocationUuidDeleteResponse422)
    {
        parent::__construct('Unprocessable Request');
        $this->customersCustomerUuidLocationsLocationUuidDeleteResponse422 = $customersCustomerUuidLocationsLocationUuidDeleteResponse422;
    }
    public function getCustomersCustomerUuidLocationsLocationUuidDeleteResponse422() : \MauticInc\MEGA\OpenAPI\Generated\Model\CustomersCustomerUuidLocationsLocationUuidDeleteResponse422
    {
        return $this->customersCustomerUuidLocationsLocationUuidDeleteResponse422;
    }
}