<?php

namespace MauticInc\MEGA\OpenAPI\Generated\Model;

class FontsPostResponse422Errors extends \ArrayObject
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
    protected $cssUrl;
    /**
     * 
     *
     * @var string[]|null
     */
    protected $stack;
    /**
     * 
     *
     * @var string[]|null
     */
    protected $cutsomerUuid;
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
    public function getCssUrl() : ?array
    {
        return $this->cssUrl;
    }
    /**
     * 
     *
     * @param string[]|null $cssUrl
     *
     * @return self
     */
    public function setCssUrl(?array $cssUrl) : self
    {
        $this->initialized['cssUrl'] = true;
        $this->cssUrl = $cssUrl;
        return $this;
    }
    /**
     * 
     *
     * @return string[]|null
     */
    public function getStack() : ?array
    {
        return $this->stack;
    }
    /**
     * 
     *
     * @param string[]|null $stack
     *
     * @return self
     */
    public function setStack(?array $stack) : self
    {
        $this->initialized['stack'] = true;
        $this->stack = $stack;
        return $this;
    }
    /**
     * 
     *
     * @return string[]|null
     */
    public function getCutsomerUuid() : ?array
    {
        return $this->cutsomerUuid;
    }
    /**
     * 
     *
     * @param string[]|null $cutsomerUuid
     *
     * @return self
     */
    public function setCutsomerUuid(?array $cutsomerUuid) : self
    {
        $this->initialized['cutsomerUuid'] = true;
        $this->cutsomerUuid = $cutsomerUuid;
        return $this;
    }
}