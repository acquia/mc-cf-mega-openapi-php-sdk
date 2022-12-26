<?php

namespace MauticInc\MEGA\OpenAPI\Generated\Model;

class UsersUserRolesRoleDeleteResponse422 extends \ArrayObject
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
     * @var UsersUserRolesRoleDeleteResponse422Errors|null
     */
    protected $errors;
    /**
     * 
     *
     * @return UsersUserRolesRoleDeleteResponse422Errors|null
     */
    public function getErrors() : ?UsersUserRolesRoleDeleteResponse422Errors
    {
        return $this->errors;
    }
    /**
     * 
     *
     * @param UsersUserRolesRoleDeleteResponse422Errors|null $errors
     *
     * @return self
     */
    public function setErrors(?UsersUserRolesRoleDeleteResponse422Errors $errors) : self
    {
        $this->initialized['errors'] = true;
        $this->errors = $errors;
        return $this;
    }
}