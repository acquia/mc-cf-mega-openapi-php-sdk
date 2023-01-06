<?php

namespace MauticInc\MEGA\OpenAPI\Generated\Model;

class Notification extends \ArrayObject
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
    protected $type;
    /**
     * 
     *
     * @var string|null
     */
    protected $notifiableType;
    /**
     * 
     *
     * @var int|null
     */
    protected $notifiableId;
    /**
     * 
     *
     * @var string|null
     */
    protected $data;
    /**
     * 
     *
     * @var \DateTime|null
     */
    protected $readAt = 'NULL';
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
    public function getType() : ?string
    {
        return $this->type;
    }
    /**
     * 
     *
     * @param string|null $type
     *
     * @return self
     */
    public function setType(?string $type) : self
    {
        $this->initialized['type'] = true;
        $this->type = $type;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getNotifiableType() : ?string
    {
        return $this->notifiableType;
    }
    /**
     * 
     *
     * @param string|null $notifiableType
     *
     * @return self
     */
    public function setNotifiableType(?string $notifiableType) : self
    {
        $this->initialized['notifiableType'] = true;
        $this->notifiableType = $notifiableType;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getNotifiableId() : ?int
    {
        return $this->notifiableId;
    }
    /**
     * 
     *
     * @param int|null $notifiableId
     *
     * @return self
     */
    public function setNotifiableId(?int $notifiableId) : self
    {
        $this->initialized['notifiableId'] = true;
        $this->notifiableId = $notifiableId;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getData() : ?string
    {
        return $this->data;
    }
    /**
     * 
     *
     * @param string|null $data
     *
     * @return self
     */
    public function setData(?string $data) : self
    {
        $this->initialized['data'] = true;
        $this->data = $data;
        return $this;
    }
    /**
     * 
     *
     * @return \DateTime|null
     */
    public function getReadAt() : ?\DateTime
    {
        return $this->readAt;
    }
    /**
     * 
     *
     * @param \DateTime|null $readAt
     *
     * @return self
     */
    public function setReadAt(?\DateTime $readAt) : self
    {
        $this->initialized['readAt'] = true;
        $this->readAt = $readAt;
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