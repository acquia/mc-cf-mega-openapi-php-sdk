<?php

namespace MauticInc\MEGA\OpenAPI\Generated\Model;

class ResponseInstance extends \ArrayObject
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
     * @var Instance|null
     */
    protected $data;
    /**
     * 
     *
     * @return Instance|null
     */
    public function getData() : ?Instance
    {
        return $this->data;
    }
    /**
     * 
     *
     * @param Instance|null $data
     *
     * @return self
     */
    public function setData(?Instance $data) : self
    {
        $this->initialized['data'] = true;
        $this->data = $data;
        return $this;
    }
}