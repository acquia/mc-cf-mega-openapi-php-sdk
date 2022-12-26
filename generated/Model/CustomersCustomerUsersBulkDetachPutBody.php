<?php

namespace MauticInc\MEGA\OpenAPI\Generated\Model;

class CustomersCustomerUsersBulkDetachPutBody extends \ArrayObject
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
     * @var string[]|null
     */
    protected $userUuids;
    /**
     * 
     *
     * @return string[]|null
     */
    public function getUserUuids() : ?array
    {
        return $this->userUuids;
    }
    /**
     * 
     *
     * @param string[]|null $userUuids
     *
     * @return self
     */
    public function setUserUuids(?array $userUuids) : self
    {
        $this->initialized['userUuids'] = true;
        $this->userUuids = $userUuids;
        return $this;
    }
}