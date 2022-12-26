<?php

namespace MauticInc\MEGA\OpenAPI\Generated\Model;

class FontsFontPatchBody extends \ArrayObject
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
    protected $name;
    /**
     * 
     *
     * @var string|null
     */
    protected $cssUrl;
    /**
     * 
     *
     * @var string|null
     */
    protected $stack;
    /**
     * 
     *
     * @return string|null
     */
    public function getName() : ?string
    {
        return $this->name;
    }
    /**
     * 
     *
     * @param string|null $name
     *
     * @return self
     */
    public function setName(?string $name) : self
    {
        $this->initialized['name'] = true;
        $this->name = $name;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getCssUrl() : ?string
    {
        return $this->cssUrl;
    }
    /**
     * 
     *
     * @param string|null $cssUrl
     *
     * @return self
     */
    public function setCssUrl(?string $cssUrl) : self
    {
        $this->initialized['cssUrl'] = true;
        $this->cssUrl = $cssUrl;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getStack() : ?string
    {
        return $this->stack;
    }
    /**
     * 
     *
     * @param string|null $stack
     *
     * @return self
     */
    public function setStack(?string $stack) : self
    {
        $this->initialized['stack'] = true;
        $this->stack = $stack;
        return $this;
    }
}