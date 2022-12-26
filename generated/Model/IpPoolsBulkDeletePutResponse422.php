<?php

namespace MauticInc\MEGA\OpenAPI\Generated\Model;

class IpPoolsBulkDeletePutResponse422 extends \ArrayObject
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
     * @var IpPoolsBulkDeletePutResponse422Errors|null
     */
    protected $errors;
    /**
     * 
     *
     * @return IpPoolsBulkDeletePutResponse422Errors|null
     */
    public function getErrors() : ?IpPoolsBulkDeletePutResponse422Errors
    {
        return $this->errors;
    }
    /**
     * 
     *
     * @param IpPoolsBulkDeletePutResponse422Errors|null $errors
     *
     * @return self
     */
    public function setErrors(?IpPoolsBulkDeletePutResponse422Errors $errors) : self
    {
        $this->initialized['errors'] = true;
        $this->errors = $errors;
        return $this;
    }
}