<?php

namespace MauticInc\MEGA\OpenAPI\Generated\Model;

class PlansPutResponse422 extends \ArrayObject
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
     * @var PlansPutResponse422Errors|null
     */
    protected $errors;
    /**
     * 
     *
     * @return PlansPutResponse422Errors|null
     */
    public function getErrors() : ?PlansPutResponse422Errors
    {
        return $this->errors;
    }
    /**
     * 
     *
     * @param PlansPutResponse422Errors|null $errors
     *
     * @return self
     */
    public function setErrors(?PlansPutResponse422Errors $errors) : self
    {
        $this->initialized['errors'] = true;
        $this->errors = $errors;
        return $this;
    }
}