<?php

namespace MauticInc\MEGA\OpenAPI\Generated\Model;

class AccountsPostResponse422Errors extends \ArrayObject
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
    protected $name;
    /**
     * 
     *
     * @var string[]|null
     */
    protected $monthlyEmailLimit;
    /**
     * 
     *
     * @var string[]|null
     */
    protected $contactLimit;
    /**
     * 
     *
     * @var string[]|null
     */
    protected $customerUuid;
    /**
     * 
     *
     * @return string[]|null
     */
    public function getName() : ?array
    {
        return $this->name;
    }
    /**
     * 
     *
     * @param string[]|null $name
     *
     * @return self
     */
    public function setName(?array $name) : self
    {
        $this->initialized['name'] = true;
        $this->name = $name;
        return $this;
    }
    /**
     * 
     *
     * @return string[]|null
     */
    public function getMonthlyEmailLimit() : ?array
    {
        return $this->monthlyEmailLimit;
    }
    /**
     * 
     *
     * @param string[]|null $monthlyEmailLimit
     *
     * @return self
     */
    public function setMonthlyEmailLimit(?array $monthlyEmailLimit) : self
    {
        $this->initialized['monthlyEmailLimit'] = true;
        $this->monthlyEmailLimit = $monthlyEmailLimit;
        return $this;
    }
    /**
     * 
     *
     * @return string[]|null
     */
    public function getContactLimit() : ?array
    {
        return $this->contactLimit;
    }
    /**
     * 
     *
     * @param string[]|null $contactLimit
     *
     * @return self
     */
    public function setContactLimit(?array $contactLimit) : self
    {
        $this->initialized['contactLimit'] = true;
        $this->contactLimit = $contactLimit;
        return $this;
    }
    /**
     * 
     *
     * @return string[]|null
     */
    public function getCustomerUuid() : ?array
    {
        return $this->customerUuid;
    }
    /**
     * 
     *
     * @param string[]|null $customerUuid
     *
     * @return self
     */
    public function setCustomerUuid(?array $customerUuid) : self
    {
        $this->initialized['customerUuid'] = true;
        $this->customerUuid = $customerUuid;
        return $this;
    }
}