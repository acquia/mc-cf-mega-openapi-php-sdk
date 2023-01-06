<?php

namespace MauticInc\MEGA\OpenAPI\Generated\Model;

class CustomersCustomerUuidFeaturesPutResponse422 extends \ArrayObject
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
     * @var CustomersCustomerUuidFeaturesPutResponse422Errors|null
     */
    protected $errors;
    /**
     * 
     *
     * @return CustomersCustomerUuidFeaturesPutResponse422Errors|null
     */
    public function getErrors() : ?CustomersCustomerUuidFeaturesPutResponse422Errors
    {
        return $this->errors;
    }
    /**
     * 
     *
     * @param CustomersCustomerUuidFeaturesPutResponse422Errors|null $errors
     *
     * @return self
     */
    public function setErrors(?CustomersCustomerUuidFeaturesPutResponse422Errors $errors) : self
    {
        $this->initialized['errors'] = true;
        $this->errors = $errors;
        return $this;
    }
}