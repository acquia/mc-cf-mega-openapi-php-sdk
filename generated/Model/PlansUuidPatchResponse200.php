<?php

namespace MauticInc\MEGA\OpenAPI\Generated\Model;

class PlansUuidPatchResponse200 extends \ArrayObject
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
     * @var Plans|null
     */
    protected $data;
    /**
     * 
     *
     * @return Plans|null
     */
    public function getData() : ?Plans
    {
        return $this->data;
    }
    /**
     * 
     *
     * @param Plans|null $data
     *
     * @return self
     */
    public function setData(?Plans $data) : self
    {
        $this->initialized['data'] = true;
        $this->data = $data;
        return $this;
    }
}