<?php

namespace MauticInc\MEGA\OpenAPI\Generated\Exception;

class DeleteCustomerFeatureUnprocessableEntityException extends UnprocessableEntityException
{
    /**
     * @var \MauticInc\MEGA\OpenAPI\Generated\Model\CustomersCustomerUuidFeaturesFeatureUuidDeleteResponse422
     */
    private $customersCustomerUuidFeaturesFeatureUuidDeleteResponse422;
    public function __construct(\MauticInc\MEGA\OpenAPI\Generated\Model\CustomersCustomerUuidFeaturesFeatureUuidDeleteResponse422 $customersCustomerUuidFeaturesFeatureUuidDeleteResponse422)
    {
        parent::__construct('Unprocessable Request');
        $this->customersCustomerUuidFeaturesFeatureUuidDeleteResponse422 = $customersCustomerUuidFeaturesFeatureUuidDeleteResponse422;
    }
    public function getCustomersCustomerUuidFeaturesFeatureUuidDeleteResponse422() : \MauticInc\MEGA\OpenAPI\Generated\Model\CustomersCustomerUuidFeaturesFeatureUuidDeleteResponse422
    {
        return $this->customersCustomerUuidFeaturesFeatureUuidDeleteResponse422;
    }
}