<?php

namespace MauticInc\MEGA\OpenAPI\Generated\Model;

class UsersUserRolesPatchResponse422 extends \ArrayObject
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
     * @var UsersUserRolesPatchResponse422Errors|null
     */
    protected $errors;
    /**
     * 
     *
     * @return UsersUserRolesPatchResponse422Errors|null
     */
    public function getErrors() : ?UsersUserRolesPatchResponse422Errors
    {
        return $this->errors;
    }
    /**
     * 
     *
     * @param UsersUserRolesPatchResponse422Errors|null $errors
     *
     * @return self
     */
    public function setErrors(?UsersUserRolesPatchResponse422Errors $errors) : self
    {
        $this->initialized['errors'] = true;
        $this->errors = $errors;
        return $this;
    }
}