<?php

namespace MauticInc\MEGA\OpenAPI\Generated\Model;

class IpPoolsUuidPatchResponse422 extends \ArrayObject
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
     * @var IpPoolsUuidPatchResponse422Errors|null
     */
    protected $errors;
    /**
     * 
     *
     * @return IpPoolsUuidPatchResponse422Errors|null
     */
    public function getErrors() : ?IpPoolsUuidPatchResponse422Errors
    {
        return $this->errors;
    }
    /**
     * 
     *
     * @param IpPoolsUuidPatchResponse422Errors|null $errors
     *
     * @return self
     */
    public function setErrors(?IpPoolsUuidPatchResponse422Errors $errors) : self
    {
        $this->initialized['errors'] = true;
        $this->errors = $errors;
        return $this;
    }
}