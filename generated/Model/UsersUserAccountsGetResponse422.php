<?php

namespace MauticInc\MEGA\OpenAPI\Generated\Model;

class UsersUserAccountsGetResponse422 extends \ArrayObject
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
     * @var UsersUserAccountsGetResponse422Errors|null
     */
    protected $errors;
    /**
     * 
     *
     * @return UsersUserAccountsGetResponse422Errors|null
     */
    public function getErrors() : ?UsersUserAccountsGetResponse422Errors
    {
        return $this->errors;
    }
    /**
     * 
     *
     * @param UsersUserAccountsGetResponse422Errors|null $errors
     *
     * @return self
     */
    public function setErrors(?UsersUserAccountsGetResponse422Errors $errors) : self
    {
        $this->initialized['errors'] = true;
        $this->errors = $errors;
        return $this;
    }
}