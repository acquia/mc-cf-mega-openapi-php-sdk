<?php

namespace MauticInc\MEGA\OpenAPI\Generated\Model;

class PlansPostResponse422 extends \ArrayObject
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
     * @var PlansPostResponse422Errors|null
     */
    protected $errors;
    /**
     * 
     *
     * @return PlansPostResponse422Errors|null
     */
    public function getErrors() : ?PlansPostResponse422Errors
    {
        return $this->errors;
    }
    /**
     * 
     *
     * @param PlansPostResponse422Errors|null $errors
     *
     * @return self
     */
    public function setErrors(?PlansPostResponse422Errors $errors) : self
    {
        $this->initialized['errors'] = true;
        $this->errors = $errors;
        return $this;
    }
}