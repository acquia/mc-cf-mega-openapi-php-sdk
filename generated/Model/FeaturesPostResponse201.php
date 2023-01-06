<?php

namespace MauticInc\MEGA\OpenAPI\Generated\Model;

class FeaturesPostResponse201 extends \ArrayObject
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
     * @var FeatureFlag|null
     */
    protected $data;
    /**
     * 
     *
     * @return FeatureFlag|null
     */
    public function getData() : ?FeatureFlag
    {
        return $this->data;
    }
    /**
     * 
     *
     * @param FeatureFlag|null $data
     *
     * @return self
     */
    public function setData(?FeatureFlag $data) : self
    {
        $this->initialized['data'] = true;
        $this->data = $data;
        return $this;
    }
}