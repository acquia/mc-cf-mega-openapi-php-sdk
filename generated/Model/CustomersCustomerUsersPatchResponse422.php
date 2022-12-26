<?php

namespace MauticInc\MEGA\OpenAPI\Generated\Model;

class CustomersCustomerUsersPatchResponse422 extends \ArrayObject
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
     * @var string|null
     */
    protected $message;
    /**
     * 
     *
     * @var CustomersCustomerUsersPatchResponse422Errors|null
     */
    protected $errors;
    /**
     * 
     *
     * @return string|null
     */
    public function getMessage() : ?string
    {
        return $this->message;
    }
    /**
     * 
     *
     * @param string|null $message
     *
     * @return self
     */
    public function setMessage(?string $message) : self
    {
        $this->initialized['message'] = true;
        $this->message = $message;
        return $this;
    }
    /**
     * 
     *
     * @return CustomersCustomerUsersPatchResponse422Errors|null
     */
    public function getErrors() : ?CustomersCustomerUsersPatchResponse422Errors
    {
        return $this->errors;
    }
    /**
     * 
     *
     * @param CustomersCustomerUsersPatchResponse422Errors|null $errors
     *
     * @return self
     */
    public function setErrors(?CustomersCustomerUsersPatchResponse422Errors $errors) : self
    {
        $this->initialized['errors'] = true;
        $this->errors = $errors;
        return $this;
    }
}