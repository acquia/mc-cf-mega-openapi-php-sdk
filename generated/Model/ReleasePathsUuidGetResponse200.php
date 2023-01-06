<?php

namespace MauticInc\MEGA\OpenAPI\Generated\Model;

class ReleasePathsUuidGetResponse200 extends \ArrayObject
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
     * @var ReleasePath|null
     */
    protected $data;
    /**
     * 
     *
     * @return ReleasePath|null
     */
    public function getData() : ?ReleasePath
    {
        return $this->data;
    }
    /**
     * 
     *
     * @param ReleasePath|null $data
     *
     * @return self
     */
    public function setData(?ReleasePath $data) : self
    {
        $this->initialized['data'] = true;
        $this->data = $data;
        return $this;
    }
}