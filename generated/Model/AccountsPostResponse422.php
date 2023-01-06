<?php

namespace MauticInc\MEGA\OpenAPI\Generated\Model;

class AccountsPostResponse422 extends \ArrayObject
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
     * @var AccountsPostResponse422Errors|null
     */
    protected $errors;
    /**
     * 
     *
     * @return AccountsPostResponse422Errors|null
     */
    public function getErrors() : ?AccountsPostResponse422Errors
    {
        return $this->errors;
    }
    /**
     * 
     *
     * @param AccountsPostResponse422Errors|null $errors
     *
     * @return self
     */
    public function setErrors(?AccountsPostResponse422Errors $errors) : self
    {
        $this->initialized['errors'] = true;
        $this->errors = $errors;
        return $this;
    }
}