<?php

namespace MauticInc\MEGA\OpenAPI\Generated\Model;

class PlansPlanFeaturesPutResponse200 extends \ArrayObject
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
     * @var PlansPlanFeaturesPutResponse200Data|null
     */
    protected $data;
    /**
     * 
     *
     * @return PlansPlanFeaturesPutResponse200Data|null
     */
    public function getData() : ?PlansPlanFeaturesPutResponse200Data
    {
        return $this->data;
    }
    /**
     * 
     *
     * @param PlansPlanFeaturesPutResponse200Data|null $data
     *
     * @return self
     */
    public function setData(?PlansPlanFeaturesPutResponse200Data $data) : self
    {
        $this->initialized['data'] = true;
        $this->data = $data;
        return $this;
    }
}