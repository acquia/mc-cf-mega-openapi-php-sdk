<?php

namespace MauticInc\MEGA\OpenAPI\Generated\Model;

class IpPoolsPostResponse201 extends \ArrayObject
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
     * @var IpPool|null
     */
    protected $data;
    /**
     * 
     *
     * @return IpPool|null
     */
    public function getData() : ?IpPool
    {
        return $this->data;
    }
    /**
     * 
     *
     * @param IpPool|null $data
     *
     * @return self
     */
    public function setData(?IpPool $data) : self
    {
        $this->initialized['data'] = true;
        $this->data = $data;
        return $this;
    }
}