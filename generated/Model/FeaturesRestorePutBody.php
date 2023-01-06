<?php

namespace MauticInc\MEGA\OpenAPI\Generated\Model;

class FeaturesRestorePutBody extends \ArrayObject
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
     * @var string[]|null
     */
    protected $featureUuids;
    /**
     * 
     *
     * @return string[]|null
     */
    public function getFeatureUuids() : ?array
    {
        return $this->featureUuids;
    }
    /**
     * 
     *
     * @param string[]|null $featureUuids
     *
     * @return self
     */
    public function setFeatureUuids(?array $featureUuids) : self
    {
        $this->initialized['featureUuids'] = true;
        $this->featureUuids = $featureUuids;
        return $this;
    }
}