<?php

namespace MauticInc\MEGA\OpenAPI\Generated\Model;

class PlansPlanFeaturesFeatureDeleteResponse200 extends \ArrayObject
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
     * @var PlansPlanFeaturesFeatureDeleteResponse200Data|null
     */
    protected $data;
    /**
     * 
     *
     * @return PlansPlanFeaturesFeatureDeleteResponse200Data|null
     */
    public function getData() : ?PlansPlanFeaturesFeatureDeleteResponse200Data
    {
        return $this->data;
    }
    /**
     * 
     *
     * @param PlansPlanFeaturesFeatureDeleteResponse200Data|null $data
     *
     * @return self
     */
    public function setData(?PlansPlanFeaturesFeatureDeleteResponse200Data $data) : self
    {
        $this->initialized['data'] = true;
        $this->data = $data;
        return $this;
    }
}