<?php

namespace MauticInc\MEGA\OpenAPI\Generated\Model;

class SenderDomain extends \ArrayObject
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
    protected $senderDomain;
    /**
     * 
     *
     * @var string|null
     */
    protected $bounceDomain;
    /**
     * 
     *
     * @var string|null
     */
    protected $trackingDomain;
    /**
     * 
     *
     * @var int|null
     */
    protected $customerId;
    /**
     * 
     *
     * @var bool|null
     */
    protected $senderDomainValidated = false;
    /**
     * 
     *
     * @var string|null
     */
    protected $senderDomainDetails = false;
    /**
     * 
     *
     * @var bool|null
     */
    protected $bounceDomainValidated = false;
    /**
     * 
     *
     * @var string|null
     */
    protected $bounceDomainDetails;
    /**
     * 
     *
     * @var bool|null
     */
    protected $trackingDomainValidated = false;
    /**
     * 
     *
     * @var string|null
     */
    protected $trackingDomainDetails = false;
    /**
     * 
     *
     * @var string|null
     */
    protected $defaultFromName;
    /**
     * 
     *
     * @var string|null
     */
    protected $defaultFromEmail;
    /**
     * 
     *
     * @var string|null
     */
    protected $espAccountId;
    /**
     * 
     *
     * @var string|null
     */
    protected $espApiKey;
    /**
     * 
     *
     * @var string|null
     */
    protected $esp;
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
     * @var \DateTime|null
     */
    protected $deletedAt;
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
    public function getSenderDomain() : ?string
    {
        return $this->senderDomain;
    }
    /**
     * 
     *
     * @param string|null $senderDomain
     *
     * @return self
     */
    public function setSenderDomain(?string $senderDomain) : self
    {
        $this->initialized['senderDomain'] = true;
        $this->senderDomain = $senderDomain;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getBounceDomain() : ?string
    {
        return $this->bounceDomain;
    }
    /**
     * 
     *
     * @param string|null $bounceDomain
     *
     * @return self
     */
    public function setBounceDomain(?string $bounceDomain) : self
    {
        $this->initialized['bounceDomain'] = true;
        $this->bounceDomain = $bounceDomain;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getTrackingDomain() : ?string
    {
        return $this->trackingDomain;
    }
    /**
     * 
     *
     * @param string|null $trackingDomain
     *
     * @return self
     */
    public function setTrackingDomain(?string $trackingDomain) : self
    {
        $this->initialized['trackingDomain'] = true;
        $this->trackingDomain = $trackingDomain;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getCustomerId() : ?int
    {
        return $this->customerId;
    }
    /**
     * 
     *
     * @param int|null $customerId
     *
     * @return self
     */
    public function setCustomerId(?int $customerId) : self
    {
        $this->initialized['customerId'] = true;
        $this->customerId = $customerId;
        return $this;
    }
    /**
     * 
     *
     * @return bool|null
     */
    public function getSenderDomainValidated() : ?bool
    {
        return $this->senderDomainValidated;
    }
    /**
     * 
     *
     * @param bool|null $senderDomainValidated
     *
     * @return self
     */
    public function setSenderDomainValidated(?bool $senderDomainValidated) : self
    {
        $this->initialized['senderDomainValidated'] = true;
        $this->senderDomainValidated = $senderDomainValidated;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getSenderDomainDetails() : ?string
    {
        return $this->senderDomainDetails;
    }
    /**
     * 
     *
     * @param string|null $senderDomainDetails
     *
     * @return self
     */
    public function setSenderDomainDetails(?string $senderDomainDetails) : self
    {
        $this->initialized['senderDomainDetails'] = true;
        $this->senderDomainDetails = $senderDomainDetails;
        return $this;
    }
    /**
     * 
     *
     * @return bool|null
     */
    public function getBounceDomainValidated() : ?bool
    {
        return $this->bounceDomainValidated;
    }
    /**
     * 
     *
     * @param bool|null $bounceDomainValidated
     *
     * @return self
     */
    public function setBounceDomainValidated(?bool $bounceDomainValidated) : self
    {
        $this->initialized['bounceDomainValidated'] = true;
        $this->bounceDomainValidated = $bounceDomainValidated;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getBounceDomainDetails() : ?string
    {
        return $this->bounceDomainDetails;
    }
    /**
     * 
     *
     * @param string|null $bounceDomainDetails
     *
     * @return self
     */
    public function setBounceDomainDetails(?string $bounceDomainDetails) : self
    {
        $this->initialized['bounceDomainDetails'] = true;
        $this->bounceDomainDetails = $bounceDomainDetails;
        return $this;
    }
    /**
     * 
     *
     * @return bool|null
     */
    public function getTrackingDomainValidated() : ?bool
    {
        return $this->trackingDomainValidated;
    }
    /**
     * 
     *
     * @param bool|null $trackingDomainValidated
     *
     * @return self
     */
    public function setTrackingDomainValidated(?bool $trackingDomainValidated) : self
    {
        $this->initialized['trackingDomainValidated'] = true;
        $this->trackingDomainValidated = $trackingDomainValidated;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getTrackingDomainDetails() : ?string
    {
        return $this->trackingDomainDetails;
    }
    /**
     * 
     *
     * @param string|null $trackingDomainDetails
     *
     * @return self
     */
    public function setTrackingDomainDetails(?string $trackingDomainDetails) : self
    {
        $this->initialized['trackingDomainDetails'] = true;
        $this->trackingDomainDetails = $trackingDomainDetails;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getDefaultFromName() : ?string
    {
        return $this->defaultFromName;
    }
    /**
     * 
     *
     * @param string|null $defaultFromName
     *
     * @return self
     */
    public function setDefaultFromName(?string $defaultFromName) : self
    {
        $this->initialized['defaultFromName'] = true;
        $this->defaultFromName = $defaultFromName;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getDefaultFromEmail() : ?string
    {
        return $this->defaultFromEmail;
    }
    /**
     * 
     *
     * @param string|null $defaultFromEmail
     *
     * @return self
     */
    public function setDefaultFromEmail(?string $defaultFromEmail) : self
    {
        $this->initialized['defaultFromEmail'] = true;
        $this->defaultFromEmail = $defaultFromEmail;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getEspAccountId() : ?string
    {
        return $this->espAccountId;
    }
    /**
     * 
     *
     * @param string|null $espAccountId
     *
     * @return self
     */
    public function setEspAccountId(?string $espAccountId) : self
    {
        $this->initialized['espAccountId'] = true;
        $this->espAccountId = $espAccountId;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getEspApiKey() : ?string
    {
        return $this->espApiKey;
    }
    /**
     * 
     *
     * @param string|null $espApiKey
     *
     * @return self
     */
    public function setEspApiKey(?string $espApiKey) : self
    {
        $this->initialized['espApiKey'] = true;
        $this->espApiKey = $espApiKey;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getEsp() : ?string
    {
        return $this->esp;
    }
    /**
     * 
     *
     * @param string|null $esp
     *
     * @return self
     */
    public function setEsp(?string $esp) : self
    {
        $this->initialized['esp'] = true;
        $this->esp = $esp;
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
     * @return \DateTime|null
     */
    public function getDeletedAt() : ?\DateTime
    {
        return $this->deletedAt;
    }
    /**
     * 
     *
     * @param \DateTime|null $deletedAt
     *
     * @return self
     */
    public function setDeletedAt(?\DateTime $deletedAt) : self
    {
        $this->initialized['deletedAt'] = true;
        $this->deletedAt = $deletedAt;
        return $this;
    }
}