<?php

namespace MauticInc\MEGA\OpenAPI\Generated\Model;

class DbServersUuidDeleteResponse422Errors extends \ArrayObject
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
    protected $open;
    /**
     * 
     *
     * @return string[]|null
     */
    public function getOpen() : ?array
    {
        return $this->open;
    }
    /**
     * 
     *
     * @param string[]|null $open
     *
     * @return self
     */
    public function setOpen(?array $open) : self
    {
        $this->initialized['open'] = true;
        $this->open = $open;
        return $this;
    }
}