<?php

namespace MauticInc\MEGA\OpenAPI\Generated\Model;

class CustomersGetResponse422Errors extends \ArrayObject
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
    protected $ipPoolUuid;
    /**
     * 
     *
     * @var string[]|null
     */
    protected $perPage;
    /**
     * 
     *
     * @return string[]|null
     */
    public function getIpPoolUuid() : ?array
    {
        return $this->ipPoolUuid;
    }
    /**
     * 
     *
     * @param string[]|null $ipPoolUuid
     *
     * @return self
     */
    public function setIpPoolUuid(?array $ipPoolUuid) : self
    {
        $this->initialized['ipPoolUuid'] = true;
        $this->ipPoolUuid = $ipPoolUuid;
        return $this;
    }
    /**
     * 
     *
     * @return string[]|null
     */
    public function getPerPage() : ?array
    {
        return $this->perPage;
    }
    /**
     * 
     *
     * @param string[]|null $perPage
     *
     * @return self
     */
    public function setPerPage(?array $perPage) : self
    {
        $this->initialized['perPage'] = true;
        $this->perPage = $perPage;
        return $this;
    }
}