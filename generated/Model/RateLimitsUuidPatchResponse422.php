<?php

namespace MauticInc\MEGA\OpenAPI\Generated\Model;

class RateLimitsUuidPatchResponse422 extends \ArrayObject
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
     * @var RateLimitsUuidPatchResponse422Errors|null
     */
    protected $errors;
    /**
     * 
     *
     * @return RateLimitsUuidPatchResponse422Errors|null
     */
    public function getErrors() : ?RateLimitsUuidPatchResponse422Errors
    {
        return $this->errors;
    }
    /**
     * 
     *
     * @param RateLimitsUuidPatchResponse422Errors|null $errors
     *
     * @return self
     */
    public function setErrors(?RateLimitsUuidPatchResponse422Errors $errors) : self
    {
        $this->initialized['errors'] = true;
        $this->errors = $errors;
        return $this;
    }
}