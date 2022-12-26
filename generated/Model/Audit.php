<?php

namespace MauticInc\MEGA\OpenAPI\Generated\Model;

class Audit extends \ArrayObject
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
    protected $userType;
    /**
     * 
     *
     * @var int|null
     */
    protected $userId;
    /**
     * 
     *
     * @var string|null
     */
    protected $event;
    /**
     * 
     *
     * @var string|null
     */
    protected $auditableType;
    /**
     * 
     *
     * @var string|null
     */
    protected $auditableUuid;
    /**
     * 
     *
     * @var mixed[]|null
     */
    protected $oldValues;
    /**
     * 
     *
     * @var AuditNewValues|null
     */
    protected $newValues;
    /**
     * 
     *
     * @var string|null
     */
    protected $url;
    /**
     * 
     *
     * @var string|null
     */
    protected $ipAddress;
    /**
     * 
     *
     * @var string|null
     */
    protected $userAgent;
    /**
     * 
     *
     * @var string[]|null
     */
    protected $tags;
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
    public function getUserType() : ?string
    {
        return $this->userType;
    }
    /**
     * 
     *
     * @param string|null $userType
     *
     * @return self
     */
    public function setUserType(?string $userType) : self
    {
        $this->initialized['userType'] = true;
        $this->userType = $userType;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getUserId() : ?int
    {
        return $this->userId;
    }
    /**
     * 
     *
     * @param int|null $userId
     *
     * @return self
     */
    public function setUserId(?int $userId) : self
    {
        $this->initialized['userId'] = true;
        $this->userId = $userId;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getEvent() : ?string
    {
        return $this->event;
    }
    /**
     * 
     *
     * @param string|null $event
     *
     * @return self
     */
    public function setEvent(?string $event) : self
    {
        $this->initialized['event'] = true;
        $this->event = $event;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getAuditableType() : ?string
    {
        return $this->auditableType;
    }
    /**
     * 
     *
     * @param string|null $auditableType
     *
     * @return self
     */
    public function setAuditableType(?string $auditableType) : self
    {
        $this->initialized['auditableType'] = true;
        $this->auditableType = $auditableType;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getAuditableUuid() : ?string
    {
        return $this->auditableUuid;
    }
    /**
     * 
     *
     * @param string|null $auditableUuid
     *
     * @return self
     */
    public function setAuditableUuid(?string $auditableUuid) : self
    {
        $this->initialized['auditableUuid'] = true;
        $this->auditableUuid = $auditableUuid;
        return $this;
    }
    /**
     * 
     *
     * @return mixed[]|null
     */
    public function getOldValues() : ?iterable
    {
        return $this->oldValues;
    }
    /**
     * 
     *
     * @param mixed[]|null $oldValues
     *
     * @return self
     */
    public function setOldValues(?iterable $oldValues) : self
    {
        $this->initialized['oldValues'] = true;
        $this->oldValues = $oldValues;
        return $this;
    }
    /**
     * 
     *
     * @return AuditNewValues|null
     */
    public function getNewValues() : ?AuditNewValues
    {
        return $this->newValues;
    }
    /**
     * 
     *
     * @param AuditNewValues|null $newValues
     *
     * @return self
     */
    public function setNewValues(?AuditNewValues $newValues) : self
    {
        $this->initialized['newValues'] = true;
        $this->newValues = $newValues;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getUrl() : ?string
    {
        return $this->url;
    }
    /**
     * 
     *
     * @param string|null $url
     *
     * @return self
     */
    public function setUrl(?string $url) : self
    {
        $this->initialized['url'] = true;
        $this->url = $url;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getIpAddress() : ?string
    {
        return $this->ipAddress;
    }
    /**
     * 
     *
     * @param string|null $ipAddress
     *
     * @return self
     */
    public function setIpAddress(?string $ipAddress) : self
    {
        $this->initialized['ipAddress'] = true;
        $this->ipAddress = $ipAddress;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getUserAgent() : ?string
    {
        return $this->userAgent;
    }
    /**
     * 
     *
     * @param string|null $userAgent
     *
     * @return self
     */
    public function setUserAgent(?string $userAgent) : self
    {
        $this->initialized['userAgent'] = true;
        $this->userAgent = $userAgent;
        return $this;
    }
    /**
     * 
     *
     * @return string[]|null
     */
    public function getTags() : ?array
    {
        return $this->tags;
    }
    /**
     * 
     *
     * @param string[]|null $tags
     *
     * @return self
     */
    public function setTags(?array $tags) : self
    {
        $this->initialized['tags'] = true;
        $this->tags = $tags;
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
}