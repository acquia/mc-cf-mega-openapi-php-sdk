<?php

namespace MauticInc\MEGA\OpenAPI\Generated\Model;

class FontsFontGetResponse200 extends \ArrayObject
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
     * @var Font|null
     */
    protected $data;
    /**
     * 
     *
     * @return Font|null
     */
    public function getData() : ?Font
    {
        return $this->data;
    }
    /**
     * 
     *
     * @param Font|null $data
     *
     * @return self
     */
    public function setData(?Font $data) : self
    {
        $this->initialized['data'] = true;
        $this->data = $data;
        return $this;
    }
}