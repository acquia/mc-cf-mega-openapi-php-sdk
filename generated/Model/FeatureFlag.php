<?php

namespace MauticInc\MEGA\OpenAPI\Generated\Model;

class FeatureFlag extends \ArrayObject
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
    protected $name = 'mautic name';
    /**
     * 
     *
     * @var string|null
     */
    protected $description = 'description';
    /**
     * flagname should be unique.
     *
     * @var string|null
     */
    protected $flagname = 'flagname';
    /**
     * 
     *
     * @var bool|null
     */
    protected $isEnabled = true;
    /**
     * 
     *
     * @var bool|null
     */
    protected $isMauticFeatureFlag = false;
    /**
     * mautic_config_name is required field if is_mautic_feature_flag is set.
     *
     * @var string|null
     */
    protected $mauticConfigName = 'config_name';
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
    public function getDescription() : ?string
    {
        return $this->description;
    }
    /**
     * 
     *
     * @param string|null $description
     *
     * @return self
     */
    public function setDescription(?string $description) : self
    {
        $this->initialized['description'] = true;
        $this->description = $description;
        return $this;
    }
    /**
     * flagname should be unique.
     *
     * @return string|null
     */
    public function getFlagname() : ?string
    {
        return $this->flagname;
    }
    /**
     * flagname should be unique.
     *
     * @param string|null $flagname
     *
     * @return self
     */
    public function setFlagname(?string $flagname) : self
    {
        $this->initialized['flagname'] = true;
        $this->flagname = $flagname;
        return $this;
    }
    /**
     * 
     *
     * @return bool|null
     */
    public function getIsEnabled() : ?bool
    {
        return $this->isEnabled;
    }
    /**
     * 
     *
     * @param bool|null $isEnabled
     *
     * @return self
     */
    public function setIsEnabled(?bool $isEnabled) : self
    {
        $this->initialized['isEnabled'] = true;
        $this->isEnabled = $isEnabled;
        return $this;
    }
    /**
     * 
     *
     * @return bool|null
     */
    public function getIsMauticFeatureFlag() : ?bool
    {
        return $this->isMauticFeatureFlag;
    }
    /**
     * 
     *
     * @param bool|null $isMauticFeatureFlag
     *
     * @return self
     */
    public function setIsMauticFeatureFlag(?bool $isMauticFeatureFlag) : self
    {
        $this->initialized['isMauticFeatureFlag'] = true;
        $this->isMauticFeatureFlag = $isMauticFeatureFlag;
        return $this;
    }
    /**
     * mautic_config_name is required field if is_mautic_feature_flag is set.
     *
     * @return string|null
     */
    public function getMauticConfigName() : ?string
    {
        return $this->mauticConfigName;
    }
    /**
     * mautic_config_name is required field if is_mautic_feature_flag is set.
     *
     * @param string|null $mauticConfigName
     *
     * @return self
     */
    public function setMauticConfigName(?string $mauticConfigName) : self
    {
        $this->initialized['mauticConfigName'] = true;
        $this->mauticConfigName = $mauticConfigName;
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