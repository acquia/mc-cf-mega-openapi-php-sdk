<?php

namespace MauticInc\MEGA\OpenAPI\Generated\Model;

class PlansPlanFeaturesBulkDeletePutResponse200 extends \ArrayObject
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
     * @var PlansPlanFeaturesBulkDeletePutResponse200Data|null
     */
    protected $data;
    /**
     * 
     *
     * @return PlansPlanFeaturesBulkDeletePutResponse200Data|null
     */
    public function getData() : ?PlansPlanFeaturesBulkDeletePutResponse200Data
    {
        return $this->data;
    }
    /**
     * 
     *
     * @param PlansPlanFeaturesBulkDeletePutResponse200Data|null $data
     *
     * @return self
     */
    public function setData(?PlansPlanFeaturesBulkDeletePutResponse200Data $data) : self
    {
        $this->initialized['data'] = true;
        $this->data = $data;
        return $this;
    }
}