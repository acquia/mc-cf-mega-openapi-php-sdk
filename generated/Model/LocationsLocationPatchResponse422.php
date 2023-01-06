<?php

namespace MauticInc\MEGA\OpenAPI\Generated\Model;

class LocationsLocationPatchResponse422 extends \ArrayObject
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
     * @var LocationsLocationPatchResponse422Errors|null
     */
    protected $errors;
    /**
     * 
     *
     * @return LocationsLocationPatchResponse422Errors|null
     */
    public function getErrors() : ?LocationsLocationPatchResponse422Errors
    {
        return $this->errors;
    }
    /**
     * 
     *
     * @param LocationsLocationPatchResponse422Errors|null $errors
     *
     * @return self
     */
    public function setErrors(?LocationsLocationPatchResponse422Errors $errors) : self
    {
        $this->initialized['errors'] = true;
        $this->errors = $errors;
        return $this;
    }
}