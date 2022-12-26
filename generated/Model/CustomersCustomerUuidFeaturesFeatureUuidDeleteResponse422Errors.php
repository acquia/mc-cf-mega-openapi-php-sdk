<?php

namespace MauticInc\MEGA\OpenAPI\Generated\Model;

class CustomersCustomerUuidFeaturesFeatureUuidDeleteResponse422Errors extends \ArrayObject
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
    protected $featureUuid;
    /**
     * 
     *
     * @return string[]|null
     */
    public function getFeatureUuid() : ?array
    {
        return $this->featureUuid;
    }
    /**
     * 
     *
     * @param string[]|null $featureUuid
     *
     * @return self
     */
    public function setFeatureUuid(?array $featureUuid) : self
    {
        $this->initialized['featureUuid'] = true;
        $this->featureUuid = $featureUuid;
        return $this;
    }
}