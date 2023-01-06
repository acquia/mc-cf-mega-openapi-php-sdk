<?php

namespace MauticInc\MEGA\OpenAPI\Generated\Model;

class CustomersCustomerUuidFeaturesFeatureUuidDeleteResponse422 extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = array();
    public function isInitialized($property) : bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * 
     *
     * @var CustomersCustomerUuidFeaturesFeatureUuidDeleteResponse422Errors|null
     */
    protected $errors;
    /**
     * 
     *
     * @return CustomersCustomerUuidFeaturesFeatureUuidDeleteResponse422Errors|null
     */
    public function getErrors() : ?CustomersCustomerUuidFeaturesFeatureUuidDeleteResponse422Errors
    {
        return $this->errors;
    }
    /**
     * 
     *
     * @param CustomersCustomerUuidFeaturesFeatureUuidDeleteResponse422Errors|null $errors
     *
     * @return self
     */
    public function setErrors(?CustomersCustomerUuidFeaturesFeatureUuidDeleteResponse422Errors $errors) : self
    {
        $this->initialized['errors'] = true;
        $this->errors = $errors;
        return $this;
    }
}