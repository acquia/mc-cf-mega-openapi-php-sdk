<?php

namespace MauticInc\MEGA\OpenAPI\Generated\Model;

class CustomersCustomerUuidLocationsPatchResponse422 extends \ArrayObject
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
     * @var CustomersCustomerUuidLocationsPatchResponse422Errors|null
     */
    protected $errors;
    /**
     * 
     *
     * @return CustomersCustomerUuidLocationsPatchResponse422Errors|null
     */
    public function getErrors() : ?CustomersCustomerUuidLocationsPatchResponse422Errors
    {
        return $this->errors;
    }
    /**
     * 
     *
     * @param CustomersCustomerUuidLocationsPatchResponse422Errors|null $errors
     *
     * @return self
     */
    public function setErrors(?CustomersCustomerUuidLocationsPatchResponse422Errors $errors) : self
    {
        $this->initialized['errors'] = true;
        $this->errors = $errors;
        return $this;
    }
}