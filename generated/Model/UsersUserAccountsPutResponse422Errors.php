<?php

namespace MauticInc\MEGA\OpenAPI\Generated\Model;

class UsersUserAccountsPutResponse422Errors extends \ArrayObject
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
    protected $accountUuids;
    /**
     * 
     *
     * @return string[]|null
     */
    public function getAccountUuids() : ?array
    {
        return $this->accountUuids;
    }
    /**
     * 
     *
     * @param string[]|null $accountUuids
     *
     * @return self
     */
    public function setAccountUuids(?array $accountUuids) : self
    {
        $this->initialized['accountUuids'] = true;
        $this->accountUuids = $accountUuids;
        return $this;
    }
}