<?php

namespace MauticInc\MEGA\OpenAPI\Generated\Model;

class CustomersCustomerUsersPutJsonResponse422 extends \ArrayObject
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
    protected $messgae;
    /**
     * 
     *
     * @var CustomersCustomerUsersPutJsonResponse422Errors|null
     */
    protected $errors;
    /**
     * 
     *
     * @return string|null
     */
    public function getMessgae() : ?string
    {
        return $this->messgae;
    }
    /**
     * 
     *
     * @param string|null $messgae
     *
     * @return self
     */
    public function setMessgae(?string $messgae) : self
    {
        $this->initialized['messgae'] = true;
        $this->messgae = $messgae;
        return $this;
    }
    /**
     * 
     *
     * @return CustomersCustomerUsersPutJsonResponse422Errors|null
     */
    public function getErrors() : ?CustomersCustomerUsersPutJsonResponse422Errors
    {
        return $this->errors;
    }
    /**
     * 
     *
     * @param CustomersCustomerUsersPutJsonResponse422Errors|null $errors
     *
     * @return self
     */
    public function setErrors(?CustomersCustomerUsersPutJsonResponse422Errors $errors) : self
    {
        $this->initialized['errors'] = true;
        $this->errors = $errors;
        return $this;
    }
}