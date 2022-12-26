<?php

namespace MauticInc\MEGA\OpenAPI\Generated\Model;

class AccountsBulkDeletePutResponse422 extends \ArrayObject
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
     * @var AccountsBulkDeletePutResponse422Errors|null
     */
    protected $errors;
    /**
     * 
     *
     * @return AccountsBulkDeletePutResponse422Errors|null
     */
    public function getErrors() : ?AccountsBulkDeletePutResponse422Errors
    {
        return $this->errors;
    }
    /**
     * 
     *
     * @param AccountsBulkDeletePutResponse422Errors|null $errors
     *
     * @return self
     */
    public function setErrors(?AccountsBulkDeletePutResponse422Errors $errors) : self
    {
        $this->initialized['errors'] = true;
        $this->errors = $errors;
        return $this;
    }
}