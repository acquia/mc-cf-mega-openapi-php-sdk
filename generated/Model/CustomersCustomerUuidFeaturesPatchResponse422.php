<?php

namespace MauticInc\MEGA\OpenAPI\Generated\Model;

class CustomersCustomerUuidFeaturesPatchResponse422 extends \ArrayObject
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
     * @var CustomersCustomerUuidFeaturesPatchResponse422Errors|null
     */
    protected $errors;
    /**
     * 
     *
     * @return CustomersCustomerUuidFeaturesPatchResponse422Errors|null
     */
    public function getErrors() : ?CustomersCustomerUuidFeaturesPatchResponse422Errors
    {
        return $this->errors;
    }
    /**
     * 
     *
     * @param CustomersCustomerUuidFeaturesPatchResponse422Errors|null $errors
     *
     * @return self
     */
    public function setErrors(?CustomersCustomerUuidFeaturesPatchResponse422Errors $errors) : self
    {
        $this->initialized['errors'] = true;
        $this->errors = $errors;
        return $this;
    }
}