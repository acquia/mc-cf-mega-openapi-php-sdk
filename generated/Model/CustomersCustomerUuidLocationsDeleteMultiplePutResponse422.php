<?php

namespace MauticInc\MEGA\OpenAPI\Generated\Model;

class CustomersCustomerUuidLocationsDeleteMultiplePutResponse422 extends \ArrayObject
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
     * @var CustomersCustomerUuidLocationsDeleteMultiplePutResponse422Errors|null
     */
    protected $errors;
    /**
     * 
     *
     * @return CustomersCustomerUuidLocationsDeleteMultiplePutResponse422Errors|null
     */
    public function getErrors() : ?CustomersCustomerUuidLocationsDeleteMultiplePutResponse422Errors
    {
        return $this->errors;
    }
    /**
     * 
     *
     * @param CustomersCustomerUuidLocationsDeleteMultiplePutResponse422Errors|null $errors
     *
     * @return self
     */
    public function setErrors(?CustomersCustomerUuidLocationsDeleteMultiplePutResponse422Errors $errors) : self
    {
        $this->initialized['errors'] = true;
        $this->errors = $errors;
        return $this;
    }
}