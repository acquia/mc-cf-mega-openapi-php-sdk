<?php

namespace MauticInc\MEGA\OpenAPI\Generated\Model;

class Instance extends \ArrayObject
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
     * @var \DateTime|null
     */
    protected $activeAt;
    /**
     * 
     *
     * @var string|null
     */
    protected $name;
    /**
     * 
     *
     * @var string|null
     */
    protected $subdomain;
    /**
     * 
     *
     * @var string|null
     */
    protected $customDomain = 'NULL';
    /**
     * 
     *
     * @var string|null
     */
    protected $locationCname;
    /**
     * 
     *
     * @var string|null
     */
    protected $dbName;
    /**
     * 
     *
     * @var string|null
     */
    protected $dbHost;
    /**
     * 
     *
     * @var string|null
     */
    protected $planName;
    /**
     * 
     *
     * @var \DateTime|null
     */
    protected $trialExpiration;
    /**
     * 
     *
     * @var string|null
     */
    protected $userEmail;
    /**
     * 
     *
     * @var string|null
     */
    protected $locationUuid;
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
     * @return \DateTime|null
     */
    public function getActiveAt() : ?\DateTime
    {
        return $this->activeAt;
    }
    /**
     * 
     *
     * @param \DateTime|null $activeAt
     *
     * @return self
     */
    public function setActiveAt(?\DateTime $activeAt) : self
    {
        $this->initialized['activeAt'] = true;
        $this->activeAt = $activeAt;
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
     * @return string|null
     */
    public function getSubdomain() : ?string
    {
        return $this->subdomain;
    }
    /**
     * 
     *
     * @param string|null $subdomain
     *
     * @return self
     */
    public function setSubdomain(?string $subdomain) : self
    {
        $this->initialized['subdomain'] = true;
        $this->subdomain = $subdomain;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getCustomDomain() : ?string
    {
        return $this->customDomain;
    }
    /**
     * 
     *
     * @param string|null $customDomain
     *
     * @return self
     */
    public function setCustomDomain(?string $customDomain) : self
    {
        $this->initialized['customDomain'] = true;
        $this->customDomain = $customDomain;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getLocationCname() : ?string
    {
        return $this->locationCname;
    }
    /**
     * 
     *
     * @param string|null $locationCname
     *
     * @return self
     */
    public function setLocationCname(?string $locationCname) : self
    {
        $this->initialized['locationCname'] = true;
        $this->locationCname = $locationCname;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getDbName() : ?string
    {
        return $this->dbName;
    }
    /**
     * 
     *
     * @param string|null $dbName
     *
     * @return self
     */
    public function setDbName(?string $dbName) : self
    {
        $this->initialized['dbName'] = true;
        $this->dbName = $dbName;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getDbHost() : ?string
    {
        return $this->dbHost;
    }
    /**
     * 
     *
     * @param string|null $dbHost
     *
     * @return self
     */
    public function setDbHost(?string $dbHost) : self
    {
        $this->initialized['dbHost'] = true;
        $this->dbHost = $dbHost;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getPlanName() : ?string
    {
        return $this->planName;
    }
    /**
     * 
     *
     * @param string|null $planName
     *
     * @return self
     */
    public function setPlanName(?string $planName) : self
    {
        $this->initialized['planName'] = true;
        $this->planName = $planName;
        return $this;
    }
    /**
     * 
     *
     * @return \DateTime|null
     */
    public function getTrialExpiration() : ?\DateTime
    {
        return $this->trialExpiration;
    }
    /**
     * 
     *
     * @param \DateTime|null $trialExpiration
     *
     * @return self
     */
    public function setTrialExpiration(?\DateTime $trialExpiration) : self
    {
        $this->initialized['trialExpiration'] = true;
        $this->trialExpiration = $trialExpiration;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getUserEmail() : ?string
    {
        return $this->userEmail;
    }
    /**
     * 
     *
     * @param string|null $userEmail
     *
     * @return self
     */
    public function setUserEmail(?string $userEmail) : self
    {
        $this->initialized['userEmail'] = true;
        $this->userEmail = $userEmail;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getLocationUuid() : ?string
    {
        return $this->locationUuid;
    }
    /**
     * 
     *
     * @param string|null $locationUuid
     *
     * @return self
     */
    public function setLocationUuid(?string $locationUuid) : self
    {
        $this->initialized['locationUuid'] = true;
        $this->locationUuid = $locationUuid;
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