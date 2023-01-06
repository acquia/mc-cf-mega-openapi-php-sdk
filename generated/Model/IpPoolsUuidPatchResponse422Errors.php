<?php

namespace MauticInc\MEGA\OpenAPI\Generated\Model;

class IpPoolsUuidPatchResponse422Errors extends \ArrayObject
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
    protected $alias;
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
}