<?php

namespace MauticInc\MEGA\OpenAPI\Generated\Model;

class CustomersCustomerUsersPatchBody extends \ArrayObject
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
     * @var string|null
     */
    protected $userUuid;
    /**
     * 
     *
     * @return string|null
     */
    public function getUserUuid() : ?string
    {
        return $this->userUuid;
    }
    /**
     * 
     *
     * @param string|null $userUuid
     *
     * @return self
     */
    public function setUserUuid(?string $userUuid) : self
    {
        $this->initialized['userUuid'] = true;
        $this->userUuid = $userUuid;
        return $this;
    }
}