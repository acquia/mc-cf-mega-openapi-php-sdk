<?php

namespace MauticInc\MEGA\OpenAPI\Generated\Exception;

class DetachMultipleCustomerFeaturesUnprocessableEntityException extends UnprocessableEntityException
{
    /**
     * @var \MauticInc\MEGA\OpenAPI\Generated\Model\CustomersCustomerUuidFeaturesDeleteMultiplePutResponse422
     */
    private $customersCustomerUuidFeaturesDeleteMultiplePutResponse422;
    public function __construct(\MauticInc\MEGA\OpenAPI\Generated\Model\CustomersCustomerUuidFeaturesDeleteMultiplePutResponse422 $customersCustomerUuidFeaturesDeleteMultiplePutResponse422)
    {
        parent::__construct('Unprocessable Request');
        $this->customersCustomerUuidFeaturesDeleteMultiplePutResponse422 = $customersCustomerUuidFeaturesDeleteMultiplePutResponse422;
    }
    public function getCustomersCustomerUuidFeaturesDeleteMultiplePutResponse422() : \MauticInc\MEGA\OpenAPI\Generated\Model\CustomersCustomerUuidFeaturesDeleteMultiplePutResponse422
    {
        return $this->customersCustomerUuidFeaturesDeleteMultiplePutResponse422;
    }
}