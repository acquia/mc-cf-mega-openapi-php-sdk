<?php

namespace MauticInc\MEGA\OpenAPI\Generated\Model;

class FeaturesBulkDeletePutResponse422 extends \ArrayObject
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
     * @var FeaturesBulkDeletePutResponse422Errors|null
     */
    protected $errors;
    /**
     * 
     *
     * @return FeaturesBulkDeletePutResponse422Errors|null
     */
    public function getErrors() : ?FeaturesBulkDeletePutResponse422Errors
    {
        return $this->errors;
    }
    /**
     * 
     *
     * @param FeaturesBulkDeletePutResponse422Errors|null $errors
     *
     * @return self
     */
    public function setErrors(?FeaturesBulkDeletePutResponse422Errors $errors) : self
    {
        $this->initialized['errors'] = true;
        $this->errors = $errors;
        return $this;
    }
}