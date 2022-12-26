<?php

namespace MauticInc\MEGA\OpenAPI\Generated\Model;

class SenderDomainsSenderDomainInstancesDeletePutBody extends \ArrayObject
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
    protected $instancesUuids;
    /**
     * 
     *
     * @return string[]|null
     */
    public function getInstancesUuids() : ?array
    {
        return $this->instancesUuids;
    }
    /**
     * 
     *
     * @param string[]|null $instancesUuids
     *
     * @return self
     */
    public function setInstancesUuids(?array $instancesUuids) : self
    {
        $this->initialized['instancesUuids'] = true;
        $this->instancesUuids = $instancesUuids;
        return $this;
    }
}