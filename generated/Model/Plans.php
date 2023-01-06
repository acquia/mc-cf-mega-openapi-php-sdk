<?php

namespace MauticInc\MEGA\OpenAPI\Generated\Model;

class Plans extends \ArrayObject
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
    protected $name = 'Plan';
    /**
     * 
     *
     * @var string|null
     */
    protected $alias = 'Plan';
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
    protected $contactLimit = 5000;
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
    protected $monthlyEmailLimit = 300;
    /**
     * 
     *
     * @var int|null
     */
    protected $usersLimit = 1;
    /**
     * 
     *
     * @var int|null
     */
    protected $trialLength = 0;
    /**
     * 
     *
     * @var string|null
     */
    protected $templateInstanceUuid;
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
     * @return string|null
     */
    public function getAlias() : ?string
    {
        return $this->alias;
    }
    /**
     * 
     *
     * @param string|null $alias
     *
     * @return self
     */
    public function setAlias(?string $alias) : self
    {
        $this->initialized['alias'] = true;
        $this->alias = $alias;
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
    public function getUsersLimit() : ?int
    {
        return $this->usersLimit;
    }
    /**
     * 
     *
     * @param int|null $usersLimit
     *
     * @return self
     */
    public function setUsersLimit(?int $usersLimit) : self
    {
        $this->initialized['usersLimit'] = true;
        $this->usersLimit = $usersLimit;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getTrialLength() : ?int
    {
        return $this->trialLength;
    }
    /**
     * 
     *
     * @param int|null $trialLength
     *
     * @return self
     */
    public function setTrialLength(?int $trialLength) : self
    {
        $this->initialized['trialLength'] = true;
        $this->trialLength = $trialLength;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getTemplateInstanceUuid() : ?string
    {
        return $this->templateInstanceUuid;
    }
    /**
     * 
     *
     * @param string|null $templateInstanceUuid
     *
     * @return self
     */
    public function setTemplateInstanceUuid(?string $templateInstanceUuid) : self
    {
        $this->initialized['templateInstanceUuid'] = true;
        $this->templateInstanceUuid = $templateInstanceUuid;
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