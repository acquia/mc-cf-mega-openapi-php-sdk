<?php

namespace MauticInc\MEGA\OpenAPI\Generated\Model;

class CustomersPostResponse422 extends \ArrayObject
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
     * @var CustomersPostResponse422Errors|null
     */
    protected $errors;
    /**
     * 
     *
     * @return CustomersPostResponse422Errors|null
     */
    public function getErrors() : ?CustomersPostResponse422Errors
    {
        return $this->errors;
    }
    /**
     * 
     *
     * @param CustomersPostResponse422Errors|null $errors
     *
     * @return self
     */
    public function setErrors(?CustomersPostResponse422Errors $errors) : self
    {
        $this->initialized['errors'] = true;
        $this->errors = $errors;
        return $this;
    }
}