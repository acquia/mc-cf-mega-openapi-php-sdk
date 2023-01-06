<?php

namespace MauticInc\MEGA\OpenAPI\Generated\Model;

class PlansPlanFeaturesPatchResponse422 extends \ArrayObject
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
     * @var PlansPlanFeaturesPatchResponse422Errors|null
     */
    protected $errors;
    /**
     * 
     *
     * @return PlansPlanFeaturesPatchResponse422Errors|null
     */
    public function getErrors() : ?PlansPlanFeaturesPatchResponse422Errors
    {
        return $this->errors;
    }
    /**
     * 
     *
     * @param PlansPlanFeaturesPatchResponse422Errors|null $errors
     *
     * @return self
     */
    public function setErrors(?PlansPlanFeaturesPatchResponse422Errors $errors) : self
    {
        $this->initialized['errors'] = true;
        $this->errors = $errors;
        return $this;
    }
}