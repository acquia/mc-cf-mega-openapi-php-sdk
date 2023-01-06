<?php

namespace MauticInc\MEGA\OpenAPI\Generated\Model;

class IpPoolsBulkDeletePutResponse422Errors extends \ArrayObject
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
     * @var string|null
     */
    protected $ipPoolUuids;
    /**
     * 
     *
     * @return string|null
     */
    public function getIpPoolUuids() : ?string
    {
        return $this->ipPoolUuids;
    }
    /**
     * 
     *
     * @param string|null $ipPoolUuids
     *
     * @return self
     */
    public function setIpPoolUuids(?string $ipPoolUuids) : self
    {
        $this->initialized['ipPoolUuids'] = true;
        $this->ipPoolUuids = $ipPoolUuids;
        return $this;
    }
}