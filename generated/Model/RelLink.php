<?php

namespace MauticInc\MEGA\OpenAPI\Generated\Model;

class RelLink extends \ArrayObject
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
    protected $rel;
    /**
     * 
     *
     * @var string|null
     */
    protected $href;
    /**
     * 
     *
     * @return string|null
     */
    public function getRel() : ?string
    {
        return $this->rel;
    }
    /**
     * 
     *
     * @param string|null $rel
     *
     * @return self
     */
    public function setRel(?string $rel) : self
    {
        $this->initialized['rel'] = true;
        $this->rel = $rel;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getHref() : ?string
    {
        return $this->href;
    }
    /**
     * 
     *
     * @param string|null $href
     *
     * @return self
     */
    public function setHref(?string $href) : self
    {
        $this->initialized['href'] = true;
        $this->href = $href;
        return $this;
    }
}