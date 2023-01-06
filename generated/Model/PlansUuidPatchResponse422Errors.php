<?php

namespace MauticInc\MEGA\OpenAPI\Generated\Model;

class PlansUuidPatchResponse422Errors extends \ArrayObject
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
    protected $alias;
    /**
     * 
     *
     * @var string[]|null
     */
    protected $templateInstanceUuid;
    /**
     * 
     *
     * @var string[]|null
     */
    protected $accountLimit;
    /**
     * 
     *
     * @var string[]|null
     */
    protected $instanceLimit;
    /**
     * 
     *
     * @var string[]|null
     */
    protected $usersLimit;
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
    protected $monthlyEmailLimit;
    /**
     * 
     *
     * @var string[]|null
     */
    protected $trialLength;
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
    public function getAlias() : ?array
    {
        return $this->alias;
    }
    /**
     * 
     *
     * @param string[]|null $alias
     *
     * @return self
     */
    public function setAlias(?array $alias) : self
    {
        $this->initialized['alias'] = true;
        $this->alias = $alias;
        return $this;
    }
    /**
     * 
     *
     * @return string[]|null
     */
    public function getTemplateInstanceUuid() : ?array
    {
        return $this->templateInstanceUuid;
    }
    /**
     * 
     *
     * @param string[]|null $templateInstanceUuid
     *
     * @return self
     */
    public function setTemplateInstanceUuid(?array $templateInstanceUuid) : self
    {
        $this->initialized['templateInstanceUuid'] = true;
        $this->templateInstanceUuid = $templateInstanceUuid;
        return $this;
    }
    /**
     * 
     *
     * @return string[]|null
     */
    public function getAccountLimit() : ?array
    {
        return $this->accountLimit;
    }
    /**
     * 
     *
     * @param string[]|null $accountLimit
     *
     * @return self
     */
    public function setAccountLimit(?array $accountLimit) : self
    {
        $this->initialized['accountLimit'] = true;
        $this->accountLimit = $accountLimit;
        return $this;
    }
    /**
     * 
     *
     * @return string[]|null
     */
    public function getInstanceLimit() : ?array
    {
        return $this->instanceLimit;
    }
    /**
     * 
     *
     * @param string[]|null $instanceLimit
     *
     * @return self
     */
    public function setInstanceLimit(?array $instanceLimit) : self
    {
        $this->initialized['instanceLimit'] = true;
        $this->instanceLimit = $instanceLimit;
        return $this;
    }
    /**
     * 
     *
     * @return string[]|null
     */
    public function getUsersLimit() : ?array
    {
        return $this->usersLimit;
    }
    /**
     * 
     *
     * @param string[]|null $usersLimit
     *
     * @return self
     */
    public function setUsersLimit(?array $usersLimit) : self
    {
        $this->initialized['usersLimit'] = true;
        $this->usersLimit = $usersLimit;
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
    public function getTrialLength() : ?array
    {
        return $this->trialLength;
    }
    /**
     * 
     *
     * @param string[]|null $trialLength
     *
     * @return self
     */
    public function setTrialLength(?array $trialLength) : self
    {
        $this->initialized['trialLength'] = true;
        $this->trialLength = $trialLength;
        return $this;
    }
}