<?php

namespace MauticInc\MEGA\OpenAPI\Generated\Model;

class RateLimitsUuidDeleteResponse422 extends \ArrayObject
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
     * @var RateLimitsUuidDeleteResponse422Errors|null
     */
    protected $errors;
    /**
     * 
     *
     * @return RateLimitsUuidDeleteResponse422Errors|null
     */
    public function getErrors() : ?RateLimitsUuidDeleteResponse422Errors
    {
        return $this->errors;
    }
    /**
     * 
     *
     * @param RateLimitsUuidDeleteResponse422Errors|null $errors
     *
     * @return self
     */
    public function setErrors(?RateLimitsUuidDeleteResponse422Errors $errors) : self
    {
        $this->initialized['errors'] = true;
        $this->errors = $errors;
        return $this;
    }
}