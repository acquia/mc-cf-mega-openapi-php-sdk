<?php

namespace MauticInc\MEGA\OpenAPI\Generated\Model;

class PlansPlanFeaturesBulkDeletePutResponse422 extends \ArrayObject
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
     * @var PlansPlanFeaturesBulkDeletePutResponse422Errors|null
     */
    protected $errors;
    /**
     * 
     *
     * @return PlansPlanFeaturesBulkDeletePutResponse422Errors|null
     */
    public function getErrors() : ?PlansPlanFeaturesBulkDeletePutResponse422Errors
    {
        return $this->errors;
    }
    /**
     * 
     *
     * @param PlansPlanFeaturesBulkDeletePutResponse422Errors|null $errors
     *
     * @return self
     */
    public function setErrors(?PlansPlanFeaturesBulkDeletePutResponse422Errors $errors) : self
    {
        $this->initialized['errors'] = true;
        $this->errors = $errors;
        return $this;
    }
}