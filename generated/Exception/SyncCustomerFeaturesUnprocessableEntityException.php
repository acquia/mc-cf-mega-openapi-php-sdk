<?php

namespace MauticInc\MEGA\OpenAPI\Generated\Exception;

class SyncCustomerFeaturesUnprocessableEntityException extends UnprocessableEntityException
{
    /**
     * @var \MauticInc\MEGA\OpenAPI\Generated\Model\CustomersCustomerUuidFeaturesPutResponse422
     */
    private $customersCustomerUuidFeaturesPutResponse422;
    public function __construct(\MauticInc\MEGA\OpenAPI\Generated\Model\CustomersCustomerUuidFeaturesPutResponse422 $customersCustomerUuidFeaturesPutResponse422)
    {
        parent::__construct('Unprocessable Request');
        $this->customersCustomerUuidFeaturesPutResponse422 = $customersCustomerUuidFeaturesPutResponse422;
    }
    public function getCustomersCustomerUuidFeaturesPutResponse422() : \MauticInc\MEGA\OpenAPI\Generated\Model\CustomersCustomerUuidFeaturesPutResponse422
    {
        return $this->customersCustomerUuidFeaturesPutResponse422;
    }
}