<?php

namespace MauticInc\MEGA\OpenAPI\Generated\Model;

class CustomersCustomerUsersUserDeleteResponse422Errors extends \ArrayObject
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
    protected $userUuid;
    /**
     * 
     *
     * @return string[]|null
     */
    public function getUserUuid() : ?array
    {
        return $this->userUuid;
    }
    /**
     * 
     *
     * @param string[]|null $userUuid
     *
     * @return self
     */
    public function setUserUuid(?array $userUuid) : self
    {
        $this->initialized['userUuid'] = true;
        $this->userUuid = $userUuid;
        return $this;
    }
}