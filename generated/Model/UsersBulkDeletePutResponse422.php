<?php

namespace MauticInc\MEGA\OpenAPI\Generated\Model;

class UsersBulkDeletePutResponse422 extends \ArrayObject
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
     * @var UsersBulkDeletePutResponse422Errors|null
     */
    protected $errors;
    /**
     * 
     *
     * @return UsersBulkDeletePutResponse422Errors|null
     */
    public function getErrors() : ?UsersBulkDeletePutResponse422Errors
    {
        return $this->errors;
    }
    /**
     * 
     *
     * @param UsersBulkDeletePutResponse422Errors|null $errors
     *
     * @return self
     */
    public function setErrors(?UsersBulkDeletePutResponse422Errors $errors) : self
    {
        $this->initialized['errors'] = true;
        $this->errors = $errors;
        return $this;
    }
}