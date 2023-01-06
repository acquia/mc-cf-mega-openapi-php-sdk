<?php

namespace MauticInc\MEGA\OpenAPI\Generated\Model;

class FeaturesPostResponse422 extends \ArrayObject
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
     * @var FeaturesPostResponse422Errors|null
     */
    protected $errors;
    /**
     * 
     *
     * @return FeaturesPostResponse422Errors|null
     */
    public function getErrors() : ?FeaturesPostResponse422Errors
    {
        return $this->errors;
    }
    /**
     * 
     *
     * @param FeaturesPostResponse422Errors|null $errors
     *
     * @return self
     */
    public function setErrors(?FeaturesPostResponse422Errors $errors) : self
    {
        $this->initialized['errors'] = true;
        $this->errors = $errors;
        return $this;
    }
}