<?php

namespace MauticInc\MEGA\OpenAPI\Generated\Model;

class InstancesPatchResponse200 extends \ArrayObject
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
     * @var InstancesPatchResponse200Data|null
     */
    protected $data;
    /**
     * 
     *
     * @return InstancesPatchResponse200Data|null
     */
    public function getData() : ?InstancesPatchResponse200Data
    {
        return $this->data;
    }
    /**
     * 
     *
     * @param InstancesPatchResponse200Data|null $data
     *
     * @return self
     */
    public function setData(?InstancesPatchResponse200Data $data) : self
    {
        $this->initialized['data'] = true;
        $this->data = $data;
        return $this;
    }
}