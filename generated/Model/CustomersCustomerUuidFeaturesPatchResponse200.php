<?php

namespace MauticInc\MEGA\OpenAPI\Generated\Model;

class CustomersCustomerUuidFeaturesPatchResponse200 extends \ArrayObject
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
     * @var CustomersCustomerUuidFeaturesPatchResponse200Data|null
     */
    protected $data;
    /**
     * 
     *
     * @return CustomersCustomerUuidFeaturesPatchResponse200Data|null
     */
    public function getData() : ?CustomersCustomerUuidFeaturesPatchResponse200Data
    {
        return $this->data;
    }
    /**
     * 
     *
     * @param CustomersCustomerUuidFeaturesPatchResponse200Data|null $data
     *
     * @return self
     */
    public function setData(?CustomersCustomerUuidFeaturesPatchResponse200Data $data) : self
    {
        $this->initialized['data'] = true;
        $this->data = $data;
        return $this;
    }
}