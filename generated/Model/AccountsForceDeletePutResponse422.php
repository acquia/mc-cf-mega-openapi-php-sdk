<?php

namespace MauticInc\MEGA\OpenAPI\Generated\Model;

class AccountsForceDeletePutResponse422 extends \ArrayObject
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
     * @var AccountsForceDeletePutResponse422Errors|null
     */
    protected $errors;
    /**
     * 
     *
     * @return AccountsForceDeletePutResponse422Errors|null
     */
    public function getErrors() : ?AccountsForceDeletePutResponse422Errors
    {
        return $this->errors;
    }
    /**
     * 
     *
     * @param AccountsForceDeletePutResponse422Errors|null $errors
     *
     * @return self
     */
    public function setErrors(?AccountsForceDeletePutResponse422Errors $errors) : self
    {
        $this->initialized['errors'] = true;
        $this->errors = $errors;
        return $this;
    }
}