<?php

namespace MauticInc\MEGA\OpenAPI\Generated\Model;

class CustomersCustomerPatchBody extends \ArrayObject
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
    protected $name = 'new customer';
    /**
     * 
     *
     * @var int|null
     */
    protected $accountLimit;
    /**
     * 
     *
     * @var int|null
     */
    protected $contactLimit;
    /**
     * 
     *
     * @var int|null
     */
    protected $monthlyEmailLimit;
    /**
     * 
     *
     * @var int|null
     */
    protected $instanceLimit;
    /**
     * 
     *
     * @var string|null
     */
    protected $planUuid;
    /**
     * 
     *
     * @var \DateTime|null
     */
    protected $startDate = '2022-03-05';
    /**
     * 
     *
     * @var \DateTime|null
     */
    protected $renewalDate = '2023-03-05';
    /**
     * 
     *
     * @var string[]|null
     */
    protected $ipPoolUuids;
    /**
     * 
     *
     * @var bool|null
     */
    protected $sendWelcomeEmail = true;
    /**
     * 
     *
     * @var string|null
     */
    protected $welcomeEmailSubject = 'Your new Campaign Studio Cloud account!';
    /**
     * 
     *
     * @var string|null
     */
    protected $welcomeEmailTemplate = '<h3> Add template </h3>';
    /**
     * 
     *
     * @var string|null
     */
    protected $restrictedIps;
    /**
     * 
     *
     * @return string|null
     */
    public function getName() : ?string
    {
        return $this->name;
    }
    /**
     * 
     *
     * @param string|null $name
     *
     * @return self
     */
    public function setName(?string $name) : self
    {
        $this->initialized['name'] = true;
        $this->name = $name;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getAccountLimit() : ?int
    {
        return $this->accountLimit;
    }
    /**
     * 
     *
     * @param int|null $accountLimit
     *
     * @return self
     */
    public function setAccountLimit(?int $accountLimit) : self
    {
        $this->initialized['accountLimit'] = true;
        $this->accountLimit = $accountLimit;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getContactLimit() : ?int
    {
        return $this->contactLimit;
    }
    /**
     * 
     *
     * @param int|null $contactLimit
     *
     * @return self
     */
    public function setContactLimit(?int $contactLimit) : self
    {
        $this->initialized['contactLimit'] = true;
        $this->contactLimit = $contactLimit;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getMonthlyEmailLimit() : ?int
    {
        return $this->monthlyEmailLimit;
    }
    /**
     * 
     *
     * @param int|null $monthlyEmailLimit
     *
     * @return self
     */
    public function setMonthlyEmailLimit(?int $monthlyEmailLimit) : self
    {
        $this->initialized['monthlyEmailLimit'] = true;
        $this->monthlyEmailLimit = $monthlyEmailLimit;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getInstanceLimit() : ?int
    {
        return $this->instanceLimit;
    }
    /**
     * 
     *
     * @param int|null $instanceLimit
     *
     * @return self
     */
    public function setInstanceLimit(?int $instanceLimit) : self
    {
        $this->initialized['instanceLimit'] = true;
        $this->instanceLimit = $instanceLimit;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getPlanUuid() : ?string
    {
        return $this->planUuid;
    }
    /**
     * 
     *
     * @param string|null $planUuid
     *
     * @return self
     */
    public function setPlanUuid(?string $planUuid) : self
    {
        $this->initialized['planUuid'] = true;
        $this->planUuid = $planUuid;
        return $this;
    }
    /**
     * 
     *
     * @return \DateTime|null
     */
    public function getStartDate() : ?\DateTime
    {
        return $this->startDate;
    }
    /**
     * 
     *
     * @param \DateTime|null $startDate
     *
     * @return self
     */
    public function setStartDate(?\DateTime $startDate) : self
    {
        $this->initialized['startDate'] = true;
        $this->startDate = $startDate;
        return $this;
    }
    /**
     * 
     *
     * @return \DateTime|null
     */
    public function getRenewalDate() : ?\DateTime
    {
        return $this->renewalDate;
    }
    /**
     * 
     *
     * @param \DateTime|null $renewalDate
     *
     * @return self
     */
    public function setRenewalDate(?\DateTime $renewalDate) : self
    {
        $this->initialized['renewalDate'] = true;
        $this->renewalDate = $renewalDate;
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
     * @return bool|null
     */
    public function getSendWelcomeEmail() : ?bool
    {
        return $this->sendWelcomeEmail;
    }
    /**
     * 
     *
     * @param bool|null $sendWelcomeEmail
     *
     * @return self
     */
    public function setSendWelcomeEmail(?bool $sendWelcomeEmail) : self
    {
        $this->initialized['sendWelcomeEmail'] = true;
        $this->sendWelcomeEmail = $sendWelcomeEmail;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getWelcomeEmailSubject() : ?string
    {
        return $this->welcomeEmailSubject;
    }
    /**
     * 
     *
     * @param string|null $welcomeEmailSubject
     *
     * @return self
     */
    public function setWelcomeEmailSubject(?string $welcomeEmailSubject) : self
    {
        $this->initialized['welcomeEmailSubject'] = true;
        $this->welcomeEmailSubject = $welcomeEmailSubject;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getWelcomeEmailTemplate() : ?string
    {
        return $this->welcomeEmailTemplate;
    }
    /**
     * 
     *
     * @param string|null $welcomeEmailTemplate
     *
     * @return self
     */
    public function setWelcomeEmailTemplate(?string $welcomeEmailTemplate) : self
    {
        $this->initialized['welcomeEmailTemplate'] = true;
        $this->welcomeEmailTemplate = $welcomeEmailTemplate;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getRestrictedIps() : ?string
    {
        return $this->restrictedIps;
    }
    /**
     * 
     *
     * @param string|null $restrictedIps
     *
     * @return self
     */
    public function setRestrictedIps(?string $restrictedIps) : self
    {
        $this->initialized['restrictedIps'] = true;
        $this->restrictedIps = $restrictedIps;
        return $this;
    }
}