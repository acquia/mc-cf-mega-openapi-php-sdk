<?php

namespace MauticInc\MEGA\OpenAPI\Generated\Model;

class FeaturesUuidPatchResponse422 extends \ArrayObject
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
     * @var FeaturesUuidPatchResponse422Errors|null
     */
    protected $errors;
    /**
     * 
     *
     * @return FeaturesUuidPatchResponse422Errors|null
     */
    public function getErrors() : ?FeaturesUuidPatchResponse422Errors
    {
        return $this->errors;
    }
    /**
     * 
     *
     * @param FeaturesUuidPatchResponse422Errors|null $errors
     *
     * @return self
     */
    public function setErrors(?FeaturesUuidPatchResponse422Errors $errors) : self
    {
        $this->initialized['errors'] = true;
        $this->errors = $errors;
        return $this;
    }
}