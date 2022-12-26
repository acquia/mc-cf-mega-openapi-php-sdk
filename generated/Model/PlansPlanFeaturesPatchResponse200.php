<?php

namespace MauticInc\MEGA\OpenAPI\Generated\Model;

class PlansPlanFeaturesPatchResponse200 extends \ArrayObject
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
     * @var PlansPlanFeaturesPatchResponse200Data|null
     */
    protected $data;
    /**
     * 
     *
     * @return PlansPlanFeaturesPatchResponse200Data|null
     */
    public function getData() : ?PlansPlanFeaturesPatchResponse200Data
    {
        return $this->data;
    }
    /**
     * 
     *
     * @param PlansPlanFeaturesPatchResponse200Data|null $data
     *
     * @return self
     */
    public function setData(?PlansPlanFeaturesPatchResponse200Data $data) : self
    {
        $this->initialized['data'] = true;
        $this->data = $data;
        return $this;
    }
}