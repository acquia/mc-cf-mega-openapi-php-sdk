<?php

namespace MauticInc\MEGA\OpenAPI\Generated\Model;

class CustomersCustomerUuidFeaturesPutResponse200 extends \ArrayObject
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
     * @var CustomersCustomerUuidFeaturesPutResponse200Data|null
     */
    protected $data;
    /**
     * 
     *
     * @return CustomersCustomerUuidFeaturesPutResponse200Data|null
     */
    public function getData() : ?CustomersCustomerUuidFeaturesPutResponse200Data
    {
        return $this->data;
    }
    /**
     * 
     *
     * @param CustomersCustomerUuidFeaturesPutResponse200Data|null $data
     *
     * @return self
     */
    public function setData(?CustomersCustomerUuidFeaturesPutResponse200Data $data) : self
    {
        $this->initialized['data'] = true;
        $this->data = $data;
        return $this;
    }
}