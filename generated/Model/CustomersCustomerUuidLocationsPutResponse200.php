<?php

namespace MauticInc\MEGA\OpenAPI\Generated\Model;

class CustomersCustomerUuidLocationsPutResponse200 extends \ArrayObject
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
     * @var CustomersCustomerUuidLocationsPutResponse200Data|null
     */
    protected $data;
    /**
     * 
     *
     * @return CustomersCustomerUuidLocationsPutResponse200Data|null
     */
    public function getData() : ?CustomersCustomerUuidLocationsPutResponse200Data
    {
        return $this->data;
    }
    /**
     * 
     *
     * @param CustomersCustomerUuidLocationsPutResponse200Data|null $data
     *
     * @return self
     */
    public function setData(?CustomersCustomerUuidLocationsPutResponse200Data $data) : self
    {
        $this->initialized['data'] = true;
        $this->data = $data;
        return $this;
    }
}