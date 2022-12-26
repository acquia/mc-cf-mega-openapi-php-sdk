<?php

namespace MauticInc\MEGA\OpenAPI\Generated\Model;

class Customer extends \ArrayObject
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
    protected $uuid;
    /**
     * 
     *
     * @var string|null
     */
    protected $name;
    /**
     * 
     *
     * @var int|null
     */
    protected $accountLimit = 1;
    /**
     * 
     *
     * @var int|null
     */
    protected $instanceLimit = 1;
    /**
     * 
     *
     * @var int|null
     */
    protected $contactLimit = 5000;
    /**
     * 
     *
     * @var \DateTime|null
     */
    protected $startDate = 'NULL';
    /**
     * 
     *
     * @var \DateTime|null
     */
    protected $renewalDate = 'NULL';
    /**
     * 
     *
     * @var int|null
     */
    protected $monthlyEmailLimit = 0;
    /**
     * 
     *
     * @var string|null
     */
    protected $planUuid;
    /**
     * 
     *
     * @var string|null
     */
    protected $restrictedIps;
    /**
     * 
     *
     * @var IpPool[]|null
     */
    protected $ipPools;
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
    protected $welcomeEmailSubject;
    /**
     * 
     *
     * @var string|null
     */
    protected $welcomeEmailTemplate;
    /**
     * 
     *
     * @var string|null
     */
    protected $customUrl = 'NULL';
    /**
     * 
     *
     * @var bool|null
     */
    protected $customUrlValidated = false;
    /**
     * 
     *
     * @var string|null
     */
    protected $favicon = 'NULL';
    /**
     * 
     *
     * @var string|null
     */
    protected $loginLogo = 'NULL';
    /**
     * 
     *
     * @var string|null
     */
    protected $mainLogo = 'NULL';
    /**
     * 
     *
     * @var string|null
     */
    protected $openidProviderUrl = 'NULL';
    /**
     * 
     *
     * @var string|null
     */
    protected $openidClientId = 'NULL';
    /**
     * 
     *
     * @var string|null
     */
    protected $openidClientSecret = 'NULL';
    /**
     * 
     *
     * @var string|null
     */
    protected $openidScope = 'NULL';
    /**
     * 
     *
     * @var string|null
     */
    protected $openidResponseType = 'NULL';
    /**
     * 
     *
     * @var string|null
     */
    protected $openidExtraParameter = 'NULL';
    /**
     * 
     *
     * @var \DateTime|null
     */
    protected $createdAt;
    /**
     * 
     *
     * @var \DateTime|null
     */
    protected $updatedAt;
    /**
     * 
     *
     * @var RelLink[]|null
     */
    protected $links;
    /**
     * 
     *
     * @return string|null
     */
    public function getUuid() : ?string
    {
        return $this->uuid;
    }
    /**
     * 
     *
     * @param string|null $uuid
     *
     * @return self
     */
    public function setUuid(?string $uuid) : self
    {
        $this->initialized['uuid'] = true;
        $this->uuid = $uuid;
        return $this;
    }
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
    /**
     * 
     *
     * @return IpPool[]|null
     */
    public function getIpPools() : ?array
    {
        return $this->ipPools;
    }
    /**
     * 
     *
     * @param IpPool[]|null $ipPools
     *
     * @return self
     */
    public function setIpPools(?array $ipPools) : self
    {
        $this->initialized['ipPools'] = true;
        $this->ipPools = $ipPools;
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
    public function getCustomUrl() : ?string
    {
        return $this->customUrl;
    }
    /**
     * 
     *
     * @param string|null $customUrl
     *
     * @return self
     */
    public function setCustomUrl(?string $customUrl) : self
    {
        $this->initialized['customUrl'] = true;
        $this->customUrl = $customUrl;
        return $this;
    }
    /**
     * 
     *
     * @return bool|null
     */
    public function getCustomUrlValidated() : ?bool
    {
        return $this->customUrlValidated;
    }
    /**
     * 
     *
     * @param bool|null $customUrlValidated
     *
     * @return self
     */
    public function setCustomUrlValidated(?bool $customUrlValidated) : self
    {
        $this->initialized['customUrlValidated'] = true;
        $this->customUrlValidated = $customUrlValidated;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getFavicon() : ?string
    {
        return $this->favicon;
    }
    /**
     * 
     *
     * @param string|null $favicon
     *
     * @return self
     */
    public function setFavicon(?string $favicon) : self
    {
        $this->initialized['favicon'] = true;
        $this->favicon = $favicon;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getLoginLogo() : ?string
    {
        return $this->loginLogo;
    }
    /**
     * 
     *
     * @param string|null $loginLogo
     *
     * @return self
     */
    public function setLoginLogo(?string $loginLogo) : self
    {
        $this->initialized['loginLogo'] = true;
        $this->loginLogo = $loginLogo;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getMainLogo() : ?string
    {
        return $this->mainLogo;
    }
    /**
     * 
     *
     * @param string|null $mainLogo
     *
     * @return self
     */
    public function setMainLogo(?string $mainLogo) : self
    {
        $this->initialized['mainLogo'] = true;
        $this->mainLogo = $mainLogo;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getOpenidProviderUrl() : ?string
    {
        return $this->openidProviderUrl;
    }
    /**
     * 
     *
     * @param string|null $openidProviderUrl
     *
     * @return self
     */
    public function setOpenidProviderUrl(?string $openidProviderUrl) : self
    {
        $this->initialized['openidProviderUrl'] = true;
        $this->openidProviderUrl = $openidProviderUrl;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getOpenidClientId() : ?string
    {
        return $this->openidClientId;
    }
    /**
     * 
     *
     * @param string|null $openidClientId
     *
     * @return self
     */
    public function setOpenidClientId(?string $openidClientId) : self
    {
        $this->initialized['openidClientId'] = true;
        $this->openidClientId = $openidClientId;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getOpenidClientSecret() : ?string
    {
        return $this->openidClientSecret;
    }
    /**
     * 
     *
     * @param string|null $openidClientSecret
     *
     * @return self
     */
    public function setOpenidClientSecret(?string $openidClientSecret) : self
    {
        $this->initialized['openidClientSecret'] = true;
        $this->openidClientSecret = $openidClientSecret;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getOpenidScope() : ?string
    {
        return $this->openidScope;
    }
    /**
     * 
     *
     * @param string|null $openidScope
     *
     * @return self
     */
    public function setOpenidScope(?string $openidScope) : self
    {
        $this->initialized['openidScope'] = true;
        $this->openidScope = $openidScope;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getOpenidResponseType() : ?string
    {
        return $this->openidResponseType;
    }
    /**
     * 
     *
     * @param string|null $openidResponseType
     *
     * @return self
     */
    public function setOpenidResponseType(?string $openidResponseType) : self
    {
        $this->initialized['openidResponseType'] = true;
        $this->openidResponseType = $openidResponseType;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getOpenidExtraParameter() : ?string
    {
        return $this->openidExtraParameter;
    }
    /**
     * 
     *
     * @param string|null $openidExtraParameter
     *
     * @return self
     */
    public function setOpenidExtraParameter(?string $openidExtraParameter) : self
    {
        $this->initialized['openidExtraParameter'] = true;
        $this->openidExtraParameter = $openidExtraParameter;
        return $this;
    }
    /**
     * 
     *
     * @return \DateTime|null
     */
    public function getCreatedAt() : ?\DateTime
    {
        return $this->createdAt;
    }
    /**
     * 
     *
     * @param \DateTime|null $createdAt
     *
     * @return self
     */
    public function setCreatedAt(?\DateTime $createdAt) : self
    {
        $this->initialized['createdAt'] = true;
        $this->createdAt = $createdAt;
        return $this;
    }
    /**
     * 
     *
     * @return \DateTime|null
     */
    public function getUpdatedAt() : ?\DateTime
    {
        return $this->updatedAt;
    }
    /**
     * 
     *
     * @param \DateTime|null $updatedAt
     *
     * @return self
     */
    public function setUpdatedAt(?\DateTime $updatedAt) : self
    {
        $this->initialized['updatedAt'] = true;
        $this->updatedAt = $updatedAt;
        return $this;
    }
    /**
     * 
     *
     * @return RelLink[]|null
     */
    public function getLinks() : ?array
    {
        return $this->links;
    }
    /**
     * 
     *
     * @param RelLink[]|null $links
     *
     * @return self
     */
    public function setLinks(?array $links) : self
    {
        $this->initialized['links'] = true;
        $this->links = $links;
        return $this;
    }
}