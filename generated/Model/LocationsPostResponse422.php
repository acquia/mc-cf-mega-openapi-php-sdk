<?php

namespace MauticInc\MEGA\OpenAPI\Generated\Model;

class LocationsPostResponse422 extends \ArrayObject
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
     * @var LocationsPostResponse422Errors|null
     */
    protected $errors;
    /**
     * 
     *
     * @return LocationsPostResponse422Errors|null
     */
    public function getErrors() : ?LocationsPostResponse422Errors
    {
        return $this->errors;
    }
    /**
     * 
     *
     * @param LocationsPostResponse422Errors|null $errors
     *
     * @return self
     */
    public function setErrors(?LocationsPostResponse422Errors $errors) : self
    {
        $this->initialized['errors'] = true;
        $this->errors = $errors;
        return $this;
    }
}