<?php

namespace MauticInc\MEGA\OpenAPI\Generated\Model;

class InstancesPatchBody extends \ArrayObject
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
    protected $instanceUuids;
    /**
     * 
     *
     * @return string[]|null
     */
    public function getInstanceUuids() : ?array
    {
        return $this->instanceUuids;
    }
    /**
     * 
     *
     * @param string[]|null $instanceUuids
     *
     * @return self
     */
    public function setInstanceUuids(?array $instanceUuids) : self
    {
        $this->initialized['instanceUuids'] = true;
        $this->instanceUuids = $instanceUuids;
        return $this;
    }
}