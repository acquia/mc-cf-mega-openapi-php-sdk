<?php

namespace MauticInc\MEGA\OpenAPI\Generated\Model;

class AccountsAccountGetResponse200 extends \ArrayObject
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
     * @var Account|null
     */
    protected $data;
    /**
     * 
     *
     * @return Account|null
     */
    public function getData() : ?Account
    {
        return $this->data;
    }
    /**
     * 
     *
     * @param Account|null $data
     *
     * @return self
     */
    public function setData(?Account $data) : self
    {
        $this->initialized['data'] = true;
        $this->data = $data;
        return $this;
    }
}