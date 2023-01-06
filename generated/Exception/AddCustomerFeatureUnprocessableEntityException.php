<?php

namespace MauticInc\MEGA\OpenAPI\Generated\Exception;

class AddCustomerFeatureUnprocessableEntityException extends UnprocessableEntityException
{
    /**
     * @var \MauticInc\MEGA\OpenAPI\Generated\Model\CustomersCustomerUuidFeaturesPatchResponse422
     */
    private $customersCustomerUuidFeaturesPatchResponse422;
    public function __construct(\MauticInc\MEGA\OpenAPI\Generated\Model\CustomersCustomerUuidFeaturesPatchResponse422 $customersCustomerUuidFeaturesPatchResponse422)
    {
        parent::__construct('Unprocessable Request');
        $this->customersCustomerUuidFeaturesPatchResponse422 = $customersCustomerUuidFeaturesPatchResponse422;
    }
    public function getCustomersCustomerUuidFeaturesPatchResponse422() : \MauticInc\MEGA\OpenAPI\Generated\Model\CustomersCustomerUuidFeaturesPatchResponse422
    {
        return $this->customersCustomerUuidFeaturesPatchResponse422;
    }
}