<?php

namespace MauticInc\MEGA\OpenAPI\Generated\Model;

class CustomersCustomerPatchResponse422Errors extends \ArrayObject
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
    protected $ipPoolUuids;
    /**
     * 
     *
     * @var string[]|null
     */
    protected $planUuid;
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
    protected $sendWelcomeEmail;
    /**
     * 
     *
     * @var string[]|null
     */
    protected $welcomeEmailTemplate;
    /**
     * 
     *
     * @var string[]|null
     */
    protected $welcomeEmailSubject;
    /**
     * 
     *
     * @var string[]|null
     */
    protected $restrictedIps;
    /**
     * 
     *
     * @var string[]|null
     */
    protected $startDate;
    /**
     * 
     *
     * @var string[]|null
     */
    protected $renewalDate;
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
    public function getIpPoolUuids() : ?array
    {
        return $this->ipPoolUuids;
    }
    /**
     * 
     *
     * @param string[]|null $ipPoolUuids
     *
     * @return self
     */
    public function setIpPoolUuids(?array $ipPoolUuids) : self
    {
        $this->initialized['ipPoolUuids'] = true;
        $this->ipPoolUuids = $ipPoolUuids;
        return $this;
    }
    /**
     * 
     *
     * @return string[]|null
     */
    public function getPlanUuid() : ?array
    {
        return $this->planUuid;
    }
    /**
     * 
     *
     * @param string[]|null $planUuid
     *
     * @return self
     */
    public function setPlanUuid(?array $planUuid) : self
    {
        $this->initialized['planUuid'] = true;
        $this->planUuid = $planUuid;
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
    public function getSendWelcomeEmail() : ?array
    {
        return $this->sendWelcomeEmail;
    }
    /**
     * 
     *
     * @param string[]|null $sendWelcomeEmail
     *
     * @return self
     */
    public function setSendWelcomeEmail(?array $sendWelcomeEmail) : self
    {
        $this->initialized['sendWelcomeEmail'] = true;
        $this->sendWelcomeEmail = $sendWelcomeEmail;
        return $this;
    }
    /**
     * 
     *
     * @return string[]|null
     */
    public function getWelcomeEmailTemplate() : ?array
    {
        return $this->welcomeEmailTemplate;
    }
    /**
     * 
     *
     * @param string[]|null $welcomeEmailTemplate
     *
     * @return self
     */
    public function setWelcomeEmailTemplate(?array $welcomeEmailTemplate) : self
    {
        $this->initialized['welcomeEmailTemplate'] = true;
        $this->welcomeEmailTemplate = $welcomeEmailTemplate;
        return $this;
    }
    /**
     * 
     *
     * @return string[]|null
     */
    public function getWelcomeEmailSubject() : ?array
    {
        return $this->welcomeEmailSubject;
    }
    /**
     * 
     *
     * @param string[]|null $welcomeEmailSubject
     *
     * @return self
     */
    public function setWelcomeEmailSubject(?array $welcomeEmailSubject) : self
    {
        $this->initialized['welcomeEmailSubject'] = true;
        $this->welcomeEmailSubject = $welcomeEmailSubject;
        return $this;
    }
    /**
     * 
     *
     * @return string[]|null
     */
    public function getRestrictedIps() : ?array
    {
        return $this->restrictedIps;
    }
    /**
     * 
     *
     * @param string[]|null $restrictedIps
     *
     * @return self
     */
    public function setRestrictedIps(?array $restrictedIps) : self
    {
        $this->initialized['restrictedIps'] = true;
        $this->restrictedIps = $restrictedIps;
        return $this;
    }
    /**
     * 
     *
     * @return string[]|null
     */
    public function getStartDate() : ?array
    {
        return $this->startDate;
    }
    /**
     * 
     *
     * @param string[]|null $startDate
     *
     * @return self
     */
    public function setStartDate(?array $startDate) : self
    {
        $this->initialized['startDate'] = true;
        $this->startDate = $startDate;
        return $this;
    }
    /**
     * 
     *
     * @return string[]|null
     */
    public function getRenewalDate() : ?array
    {
        return $this->renewalDate;
    }
    /**
     * 
     *
     * @param string[]|null $renewalDate
     *
     * @return self
     */
    public function setRenewalDate(?array $renewalDate) : self
    {
        $this->initialized['renewalDate'] = true;
        $this->renewalDate = $renewalDate;
        return $this;
    }
}