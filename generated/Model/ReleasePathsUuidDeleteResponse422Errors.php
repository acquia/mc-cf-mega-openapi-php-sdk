<?php

namespace MauticInc\MEGA\OpenAPI\Generated\Model;

class ReleasePathsUuidDeleteResponse422Errors extends \ArrayObject
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
    protected $default;
    /**
     * 
     *
     * @return string[]|null
     */
    public function getDefault() : ?array
    {
        return $this->default;
    }
    /**
     * 
     *
     * @param string[]|null $default
     *
     * @return self
     */
    public function setDefault(?array $default) : self
    {
        $this->initialized['default'] = true;
        $this->default = $default;
        return $this;
    }
}