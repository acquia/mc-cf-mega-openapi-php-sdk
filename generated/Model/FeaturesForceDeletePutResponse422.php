<?php

namespace MauticInc\MEGA\OpenAPI\Generated\Model;

class FeaturesForceDeletePutResponse422 extends \ArrayObject
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
     * @var FeaturesForceDeletePutResponse422Errors|null
     */
    protected $errors;
    /**
     * 
     *
     * @return FeaturesForceDeletePutResponse422Errors|null
     */
    public function getErrors() : ?FeaturesForceDeletePutResponse422Errors
    {
        return $this->errors;
    }
    /**
     * 
     *
     * @param FeaturesForceDeletePutResponse422Errors|null $errors
     *
     * @return self
     */
    public function setErrors(?FeaturesForceDeletePutResponse422Errors $errors) : self
    {
        $this->initialized['errors'] = true;
        $this->errors = $errors;
        return $this;
    }
}