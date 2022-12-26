<?php

namespace MauticInc\MEGA\OpenAPI\Generated\Model;

class UsersUserRolesPutResponse422 extends \ArrayObject
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
     * @var UsersUserRolesPutResponse422Errors|null
     */
    protected $errors;
    /**
     * 
     *
     * @return UsersUserRolesPutResponse422Errors|null
     */
    public function getErrors() : ?UsersUserRolesPutResponse422Errors
    {
        return $this->errors;
    }
    /**
     * 
     *
     * @param UsersUserRolesPutResponse422Errors|null $errors
     *
     * @return self
     */
    public function setErrors(?UsersUserRolesPutResponse422Errors $errors) : self
    {
        $this->initialized['errors'] = true;
        $this->errors = $errors;
        return $this;
    }
}