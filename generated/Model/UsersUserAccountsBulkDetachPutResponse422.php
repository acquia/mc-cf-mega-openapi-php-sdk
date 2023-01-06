<?php

namespace MauticInc\MEGA\OpenAPI\Generated\Model;

class UsersUserAccountsBulkDetachPutResponse422 extends \ArrayObject
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
     * @var UsersUserAccountsBulkDetachPutResponse422Errors|null
     */
    protected $errors;
    /**
     * 
     *
     * @return UsersUserAccountsBulkDetachPutResponse422Errors|null
     */
    public function getErrors() : ?UsersUserAccountsBulkDetachPutResponse422Errors
    {
        return $this->errors;
    }
    /**
     * 
     *
     * @param UsersUserAccountsBulkDetachPutResponse422Errors|null $errors
     *
     * @return self
     */
    public function setErrors(?UsersUserAccountsBulkDetachPutResponse422Errors $errors) : self
    {
        $this->initialized['errors'] = true;
        $this->errors = $errors;
        return $this;
    }
}