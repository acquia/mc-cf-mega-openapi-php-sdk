<?php

namespace MauticInc\MEGA\OpenAPI\Generated\Model;

class AccountsGetResponse422 extends \ArrayObject
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
     * @var AccountsGetResponse422Errors|null
     */
    protected $errors;
    /**
     * 
     *
     * @return AccountsGetResponse422Errors|null
     */
    public function getErrors() : ?AccountsGetResponse422Errors
    {
        return $this->errors;
    }
    /**
     * 
     *
     * @param AccountsGetResponse422Errors|null $errors
     *
     * @return self
     */
    public function setErrors(?AccountsGetResponse422Errors $errors) : self
    {
        $this->initialized['errors'] = true;
        $this->errors = $errors;
        return $this;
    }
}