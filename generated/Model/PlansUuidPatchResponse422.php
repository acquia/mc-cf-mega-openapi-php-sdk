<?php

namespace MauticInc\MEGA\OpenAPI\Generated\Model;

class PlansUuidPatchResponse422 extends \ArrayObject
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
     * @var PlansUuidPatchResponse422Errors|null
     */
    protected $errors;
    /**
     * 
     *
     * @return PlansUuidPatchResponse422Errors|null
     */
    public function getErrors() : ?PlansUuidPatchResponse422Errors
    {
        return $this->errors;
    }
    /**
     * 
     *
     * @param PlansUuidPatchResponse422Errors|null $errors
     *
     * @return self
     */
    public function setErrors(?PlansUuidPatchResponse422Errors $errors) : self
    {
        $this->initialized['errors'] = true;
        $this->errors = $errors;
        return $this;
    }
}