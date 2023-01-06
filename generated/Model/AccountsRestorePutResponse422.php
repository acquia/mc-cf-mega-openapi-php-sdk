<?php

namespace MauticInc\MEGA\OpenAPI\Generated\Model;

class AccountsRestorePutResponse422 extends \ArrayObject
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
     * @var AccountsRestorePutResponse422Errors|null
     */
    protected $errors;
    /**
     * 
     *
     * @return AccountsRestorePutResponse422Errors|null
     */
    public function getErrors() : ?AccountsRestorePutResponse422Errors
    {
        return $this->errors;
    }
    /**
     * 
     *
     * @param AccountsRestorePutResponse422Errors|null $errors
     *
     * @return self
     */
    public function setErrors(?AccountsRestorePutResponse422Errors $errors) : self
    {
        $this->initialized['errors'] = true;
        $this->errors = $errors;
        return $this;
    }
}