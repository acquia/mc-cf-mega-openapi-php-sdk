<?php

namespace MauticInc\MEGA\OpenAPI\Generated\Exception;

class SyncCustomerLocationsUnprocessableEntityException extends UnprocessableEntityException
{
    /**
     * @var \MauticInc\MEGA\OpenAPI\Generated\Model\CustomersCustomerUuidLocationsPutResponse422
     */
    private $customersCustomerUuidLocationsPutResponse422;
    public function __construct(\MauticInc\MEGA\OpenAPI\Generated\Model\CustomersCustomerUuidLocationsPutResponse422 $customersCustomerUuidLocationsPutResponse422)
    {
        parent::__construct('Unprocessable Request');
        $this->customersCustomerUuidLocationsPutResponse422 = $customersCustomerUuidLocationsPutResponse422;
    }
    public function getCustomersCustomerUuidLocationsPutResponse422() : \MauticInc\MEGA\OpenAPI\Generated\Model\CustomersCustomerUuidLocationsPutResponse422
    {
        return $this->customersCustomerUuidLocationsPutResponse422;
    }
}