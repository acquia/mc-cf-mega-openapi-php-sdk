<?php

namespace MauticInc\MEGA\OpenAPI\Generated\Model;

class CustomersCustomerUuidLocationsPutBody extends \ArrayObject
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
    protected $locationUuids;
    /**
     * 
     *
     * @return string[]|null
     */
    public function getLocationUuids() : ?array
    {
        return $this->locationUuids;
    }
    /**
     * 
     *
     * @param string[]|null $locationUuids
     *
     * @return self
     */
    public function setLocationUuids(?array $locationUuids) : self
    {
        $this->initialized['locationUuids'] = true;
        $this->locationUuids = $locationUuids;
        return $this;
    }
}