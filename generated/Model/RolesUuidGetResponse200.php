<?php

namespace MauticInc\MEGA\OpenAPI\Generated\Model;

class RolesUuidGetResponse200 extends \ArrayObject
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
     * @var Role|null
     */
    protected $data;
    /**
     * 
     *
     * @return Role|null
     */
    public function getData() : ?Role
    {
        return $this->data;
    }
    /**
     * 
     *
     * @param Role|null $data
     *
     * @return self
     */
    public function setData(?Role $data) : self
    {
        $this->initialized['data'] = true;
        $this->data = $data;
        return $this;
    }
}