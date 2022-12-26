<?php

namespace MauticInc\MEGA\OpenAPI\Generated\Model;

class CustomersCustomerUuidLocationsPatchResponse200 extends \ArrayObject
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
     * @var CustomersCustomerUuidLocationsPatchResponse200Data|null
     */
    protected $data;
    /**
     * 
     *
     * @return CustomersCustomerUuidLocationsPatchResponse200Data|null
     */
    public function getData() : ?CustomersCustomerUuidLocationsPatchResponse200Data
    {
        return $this->data;
    }
    /**
     * 
     *
     * @param CustomersCustomerUuidLocationsPatchResponse200Data|null $data
     *
     * @return self
     */
    public function setData(?CustomersCustomerUuidLocationsPatchResponse200Data $data) : self
    {
        $this->initialized['data'] = true;
        $this->data = $data;
        return $this;
    }
}