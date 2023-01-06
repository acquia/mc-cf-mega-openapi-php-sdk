<?php

namespace MauticInc\MEGA\OpenAPI\Generated\Model;

class Font extends \ArrayObject
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
     * @var string|null
     */
    protected $cssUrl;
    /**
     * 
     *
     * @var string|null
     */
    protected $stack;
    /**
     * 
     *
     * @var string|null
     */
    protected $customerUuid;
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
    public function getCssUrl() : ?string
    {
        return $this->cssUrl;
    }
    /**
     * 
     *
     * @param string|null $cssUrl
     *
     * @return self
     */
    public function setCssUrl(?string $cssUrl) : self
    {
        $this->initialized['cssUrl'] = true;
        $this->cssUrl = $cssUrl;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getStack() : ?string
    {
        return $this->stack;
    }
    /**
     * 
     *
     * @param string|null $stack
     *
     * @return self
     */
    public function setStack(?string $stack) : self
    {
        $this->initialized['stack'] = true;
        $this->stack = $stack;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getCustomerUuid() : ?string
    {
        return $this->customerUuid;
    }
    /**
     * 
     *
     * @param string|null $customerUuid
     *
     * @return self
     */
    public function setCustomerUuid(?string $customerUuid) : self
    {
        $this->initialized['customerUuid'] = true;
        $this->customerUuid = $customerUuid;
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