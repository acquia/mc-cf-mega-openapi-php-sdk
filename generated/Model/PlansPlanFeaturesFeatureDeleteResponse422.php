<?php

namespace MauticInc\MEGA\OpenAPI\Generated\Model;

class PlansPlanFeaturesFeatureDeleteResponse422 extends \ArrayObject
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
     * @var PlansPlanFeaturesFeatureDeleteResponse422Errors|null
     */
    protected $errors;
    /**
     * 
     *
     * @return PlansPlanFeaturesFeatureDeleteResponse422Errors|null
     */
    public function getErrors() : ?PlansPlanFeaturesFeatureDeleteResponse422Errors
    {
        return $this->errors;
    }
    /**
     * 
     *
     * @param PlansPlanFeaturesFeatureDeleteResponse422Errors|null $errors
     *
     * @return self
     */
    public function setErrors(?PlansPlanFeaturesFeatureDeleteResponse422Errors $errors) : self
    {
        $this->initialized['errors'] = true;
        $this->errors = $errors;
        return $this;
    }
}