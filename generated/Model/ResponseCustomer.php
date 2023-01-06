<?php

namespace MauticInc\MEGA\OpenAPI\Generated\Model;

class ResponseCustomer extends \ArrayObject
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
     * @var Customer|null
     */
    protected $data;
    /**
     * 
     *
     * @return Customer|null
     */
    public function getData() : ?Customer
    {
        return $this->data;
    }
    /**
     * 
     *
     * @param Customer|null $data
     *
     * @return self
     */
    public function setData(?Customer $data) : self
    {
        $this->initialized['data'] = true;
        $this->data = $data;
        return $this;
    }
}