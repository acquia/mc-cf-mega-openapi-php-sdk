<?php

namespace MauticInc\MEGA\OpenAPI\Generated\Model;

class BrandingsBrandingGetResponse200 extends \ArrayObject
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
     * @var Brandings|null
     */
    protected $data;
    /**
     * 
     *
     * @return Brandings|null
     */
    public function getData() : ?Brandings
    {
        return $this->data;
    }
    /**
     * 
     *
     * @param Brandings|null $data
     *
     * @return self
     */
    public function setData(?Brandings $data) : self
    {
        $this->initialized['data'] = true;
        $this->data = $data;
        return $this;
    }
}