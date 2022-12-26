<?php

namespace MauticInc\MEGA\OpenAPI\Generated\Model;

class AuditsUuidPostBody extends \ArrayObject
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
    protected $restore;
    /**
     * 
     *
     * @return string[]|null
     */
    public function getRestore() : ?array
    {
        return $this->restore;
    }
    /**
     * 
     *
     * @param string[]|null $restore
     *
     * @return self
     */
    public function setRestore(?array $restore) : self
    {
        $this->initialized['restore'] = true;
        $this->restore = $restore;
        return $this;
    }
}