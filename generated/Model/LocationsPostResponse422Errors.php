<?php

namespace MauticInc\MEGA\OpenAPI\Generated\Model;

class LocationsPostResponse422Errors extends \ArrayObject
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
    protected $name;
    /**
     * 
     *
     * @var string[]|null
     */
    protected $ips;
    /**
     * 
     *
     * @var string[]|null
     */
    protected $cname;
    /**
     * 
     *
     * @return string[]|null
     */
    public function getName() : ?array
    {
        return $this->name;
    }
    /**
     * 
     *
     * @param string[]|null $name
     *
     * @return self
     */
    public function setName(?array $name) : self
    {
        $this->initialized['name'] = true;
        $this->name = $name;
        return $this;
    }
    /**
     * 
     *
     * @return string[]|null
     */
    public function getIps() : ?array
    {
        return $this->ips;
    }
    /**
     * 
     *
     * @param string[]|null $ips
     *
     * @return self
     */
    public function setIps(?array $ips) : self
    {
        $this->initialized['ips'] = true;
        $this->ips = $ips;
        return $this;
    }
    /**
     * 
     *
     * @return string[]|null
     */
    public function getCname() : ?array
    {
        return $this->cname;
    }
    /**
     * 
     *
     * @param string[]|null $cname
     *
     * @return self
     */
    public function setCname(?array $cname) : self
    {
        $this->initialized['cname'] = true;
        $this->cname = $cname;
        return $this;
    }
}