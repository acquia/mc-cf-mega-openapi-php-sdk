<?php

namespace MauticInc\MEGA\OpenAPI\Generated\Model;

class AccountsAccountPatchResponse422 extends \ArrayObject
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
     * @var AccountsAccountPatchResponse422Errors|null
     */
    protected $errors;
    /**
     * 
     *
     * @return AccountsAccountPatchResponse422Errors|null
     */
    public function getErrors() : ?AccountsAccountPatchResponse422Errors
    {
        return $this->errors;
    }
    /**
     * 
     *
     * @param AccountsAccountPatchResponse422Errors|null $errors
     *
     * @return self
     */
    public function setErrors(?AccountsAccountPatchResponse422Errors $errors) : self
    {
        $this->initialized['errors'] = true;
        $this->errors = $errors;
        return $this;
    }
}