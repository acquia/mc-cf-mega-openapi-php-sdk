<?php

namespace MauticInc\MEGA\OpenAPI\Generated\Model;

class RateLimitsPostResponse422 extends \ArrayObject
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
     * @var RateLimitsPostResponse422Errors|null
     */
    protected $errors;
    /**
     * 
     *
     * @return RateLimitsPostResponse422Errors|null
     */
    public function getErrors() : ?RateLimitsPostResponse422Errors
    {
        return $this->errors;
    }
    /**
     * 
     *
     * @param RateLimitsPostResponse422Errors|null $errors
     *
     * @return self
     */
    public function setErrors(?RateLimitsPostResponse422Errors $errors) : self
    {
        $this->initialized['errors'] = true;
        $this->errors = $errors;
        return $this;
    }
}