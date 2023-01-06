<?php

namespace MauticInc\MEGA\OpenAPI\Generated\Model;

class User extends \ArrayObject
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
    protected $name = 'user name';
    /**
     * 
     *
     * @var string|null
     */
    protected $email;
    /**
     * 
     *
     * @var \DateTime|null
     */
    protected $emailVerifiedAt;
    /**
     * 
     *
     * @var bool|null
     */
    protected $allAccounts = false;
    /**
     * 
     *
     * @var \DateTime|null
     */
    protected $lastLogin;
    /**
     * 
     *
     * @var bool|null
     */
    protected $super = false;
    /**
     * 
     *
     * @var bool|null
     */
    protected $notifyLimitViolation = false;
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
    public function getEmail() : ?string
    {
        return $this->email;
    }
    /**
     * 
     *
     * @param string|null $email
     *
     * @return self
     */
    public function setEmail(?string $email) : self
    {
        $this->initialized['email'] = true;
        $this->email = $email;
        return $this;
    }
    /**
     * 
     *
     * @return \DateTime|null
     */
    public function getEmailVerifiedAt() : ?\DateTime
    {
        return $this->emailVerifiedAt;
    }
    /**
     * 
     *
     * @param \DateTime|null $emailVerifiedAt
     *
     * @return self
     */
    public function setEmailVerifiedAt(?\DateTime $emailVerifiedAt) : self
    {
        $this->initialized['emailVerifiedAt'] = true;
        $this->emailVerifiedAt = $emailVerifiedAt;
        return $this;
    }
    /**
     * 
     *
     * @return bool|null
     */
    public function getAllAccounts() : ?bool
    {
        return $this->allAccounts;
    }
    /**
     * 
     *
     * @param bool|null $allAccounts
     *
     * @return self
     */
    public function setAllAccounts(?bool $allAccounts) : self
    {
        $this->initialized['allAccounts'] = true;
        $this->allAccounts = $allAccounts;
        return $this;
    }
    /**
     * 
     *
     * @return \DateTime|null
     */
    public function getLastLogin() : ?\DateTime
    {
        return $this->lastLogin;
    }
    /**
     * 
     *
     * @param \DateTime|null $lastLogin
     *
     * @return self
     */
    public function setLastLogin(?\DateTime $lastLogin) : self
    {
        $this->initialized['lastLogin'] = true;
        $this->lastLogin = $lastLogin;
        return $this;
    }
    /**
     * 
     *
     * @return bool|null
     */
    public function getSuper() : ?bool
    {
        return $this->super;
    }
    /**
     * 
     *
     * @param bool|null $super
     *
     * @return self
     */
    public function setSuper(?bool $super) : self
    {
        $this->initialized['super'] = true;
        $this->super = $super;
        return $this;
    }
    /**
     * 
     *
     * @return bool|null
     */
    public function getNotifyLimitViolation() : ?bool
    {
        return $this->notifyLimitViolation;
    }
    /**
     * 
     *
     * @param bool|null $notifyLimitViolation
     *
     * @return self
     */
    public function setNotifyLimitViolation(?bool $notifyLimitViolation) : self
    {
        $this->initialized['notifyLimitViolation'] = true;
        $this->notifyLimitViolation = $notifyLimitViolation;
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