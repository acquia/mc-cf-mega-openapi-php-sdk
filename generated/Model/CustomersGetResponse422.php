<?php

namespace MauticInc\MEGA\OpenAPI\Generated\Model;

class CustomersGetResponse422 extends \ArrayObject
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
     * @var CustomersGetResponse422Errors|null
     */
    protected $errors;
    /**
     * 
     *
     * @return CustomersGetResponse422Errors|null
     */
    public function getErrors() : ?CustomersGetResponse422Errors
    {
        return $this->errors;
    }
    /**
     * 
     *
     * @param CustomersGetResponse422Errors|null $errors
     *
     * @return self
     */
    public function setErrors(?CustomersGetResponse422Errors $errors) : self
    {
        $this->initialized['errors'] = true;
        $this->errors = $errors;
        return $this;
    }
}