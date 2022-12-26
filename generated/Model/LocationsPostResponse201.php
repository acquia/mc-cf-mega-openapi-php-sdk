<?php

namespace MauticInc\MEGA\OpenAPI\Generated\Model;

class LocationsPostResponse201 extends \ArrayObject
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
     * @var Location|null
     */
    protected $data;
    /**
     * 
     *
     * @return Location|null
     */
    public function getData() : ?Location
    {
        return $this->data;
    }
    /**
     * 
     *
     * @param Location|null $data
     *
     * @return self
     */
    public function setData(?Location $data) : self
    {
        $this->initialized['data'] = true;
        $this->data = $data;
        return $this;
    }
}