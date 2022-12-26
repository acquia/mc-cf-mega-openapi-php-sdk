<?php

namespace MauticInc\MEGA\OpenAPI\Generated\Model;

class SenderDomainsSenderDomainGetResponse200 extends \ArrayObject
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
     * @var SenderDomain|null
     */
    protected $data;
    /**
     * 
     *
     * @return SenderDomain|null
     */
    public function getData() : ?SenderDomain
    {
        return $this->data;
    }
    /**
     * 
     *
     * @param SenderDomain|null $data
     *
     * @return self
     */
    public function setData(?SenderDomain $data) : self
    {
        $this->initialized['data'] = true;
        $this->data = $data;
        return $this;
    }
}