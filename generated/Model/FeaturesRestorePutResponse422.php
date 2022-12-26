<?php

namespace MauticInc\MEGA\OpenAPI\Generated\Model;

class FeaturesRestorePutResponse422 extends \ArrayObject
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
     * @var FeaturesRestorePutResponse422Errors|null
     */
    protected $errors;
    /**
     * 
     *
     * @return FeaturesRestorePutResponse422Errors|null
     */
    public function getErrors() : ?FeaturesRestorePutResponse422Errors
    {
        return $this->errors;
    }
    /**
     * 
     *
     * @param FeaturesRestorePutResponse422Errors|null $errors
     *
     * @return self
     */
    public function setErrors(?FeaturesRestorePutResponse422Errors $errors) : self
    {
        $this->initialized['errors'] = true;
        $this->errors = $errors;
        return $this;
    }
}