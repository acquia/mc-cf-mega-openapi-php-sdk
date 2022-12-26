<?php

namespace MauticInc\MEGA\OpenAPI\Generated\Model;

class IpPoolsPostResponse422Errors extends \ArrayObject
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
    protected $alias;
    /**
     * 
     *
     * @var string[]|null
     */
    protected $;
    /**
     * 
     *
     * @var string[]|null
     */
    protected $region;
    /**
     * 
     *
     * @return string[]|null
     */
    public function getAlias() : ?array
    {
        return $this->alias;
    }
    /**
     * 
     *
     * @param string[]|null $alias
     *
     * @return self
     */
    public function setAlias(?array $alias) : self
    {
        $this->initialized['alias'] = true;
        $this->alias = $alias;
        return $this;
    }
    /**
     * 
     *
     * @return string[]|null
     */
    public function get() : ?array
    {
        return $this->;
    }
    /**
     * 
     *
     * @param string[]|null $
     *
     * @return self
     */
    public function set(?array $) : self
    {
        $this->initialized[''] = true;
        $this-> = $;
        return $this;
    }
    /**
     * 
     *
     * @return string[]|null
     */
    public function getRegion() : ?array
    {
        return $this->region;
    }
    /**
     * 
     *
     * @param string[]|null $region
     *
     * @return self
     */
    public function setRegion(?array $region) : self
    {
        $this->initialized['region'] = true;
        $this->region = $region;
        return $this;
    }
}