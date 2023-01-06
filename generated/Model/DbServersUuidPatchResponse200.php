<?php

namespace MauticInc\MEGA\OpenAPI\Generated\Model;

class DbServersUuidPatchResponse200 extends \ArrayObject
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
     * @var Database|null
     */
    protected $data;
    /**
     * 
     *
     * @return Database|null
     */
    public function getData() : ?Database
    {
        return $this->data;
    }
    /**
     * 
     *
     * @param Database|null $data
     *
     * @return self
     */
    public function setData(?Database $data) : self
    {
        $this->initialized['data'] = true;
        $this->data = $data;
        return $this;
    }
}