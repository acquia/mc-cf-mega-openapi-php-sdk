<?php

namespace MauticInc\MEGA\OpenAPI\Generated\Model;

class CustomersCustomerPatchResponse422 extends \ArrayObject
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
     * @var CustomersCustomerPatchResponse422Errors|null
     */
    protected $errors;
    /**
     * 
     *
     * @return CustomersCustomerPatchResponse422Errors|null
     */
    public function getErrors() : ?CustomersCustomerPatchResponse422Errors
    {
        return $this->errors;
    }
    /**
     * 
     *
     * @param CustomersCustomerPatchResponse422Errors|null $errors
     *
     * @return self
     */
    public function setErrors(?CustomersCustomerPatchResponse422Errors $errors) : self
    {
        $this->initialized['errors'] = true;
        $this->errors = $errors;
        return $this;
    }
}