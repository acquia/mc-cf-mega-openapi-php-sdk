<?php

namespace MauticInc\MEGA\OpenAPI\Generated\Model;

class UsersUserAccountsPutResponse422 extends \ArrayObject
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
     * @var UsersUserAccountsPutResponse422Errors|null
     */
    protected $errors;
    /**
     * 
     *
     * @return UsersUserAccountsPutResponse422Errors|null
     */
    public function getErrors() : ?UsersUserAccountsPutResponse422Errors
    {
        return $this->errors;
    }
    /**
     * 
     *
     * @param UsersUserAccountsPutResponse422Errors|null $errors
     *
     * @return self
     */
    public function setErrors(?UsersUserAccountsPutResponse422Errors $errors) : self
    {
        $this->initialized['errors'] = true;
        $this->errors = $errors;
        return $this;
    }
}