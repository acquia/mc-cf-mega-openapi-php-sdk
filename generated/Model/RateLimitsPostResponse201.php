<?php

namespace MauticInc\MEGA\OpenAPI\Generated\Model;

class RateLimitsPostResponse201 extends \ArrayObject
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
     * @var RateLimit|null
     */
    protected $data;
    /**
     * 
     *
     * @return RateLimit|null
     */
    public function getData() : ?RateLimit
    {
        return $this->data;
    }
    /**
     * 
     *
     * @param RateLimit|null $data
     *
     * @return self
     */
    public function setData(?RateLimit $data) : self
    {
        $this->initialized['data'] = true;
        $this->data = $data;
        return $this;
    }
}