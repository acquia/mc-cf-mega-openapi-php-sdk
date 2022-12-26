<?php

namespace MauticInc\MEGA\OpenAPI\Generated\Model;

class Database extends \ArrayObject
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
    protected $hostname = 'database.com';
    /**
     * 
     *
     * @var string|null
     */
    protected $username = 'database.com';
    /**
     * 
     *
     * @var bool|null
     */
    protected $open = true;
    /**
     * 
     *
     * @var bool|null
     */
    protected $debug = false;
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
     * @return string|null
     */
    public function getHostname() : ?string
    {
        return $this->hostname;
    }
    /**
     * 
     *
     * @param string|null $hostname
     *
     * @return self
     */
    public function setHostname(?string $hostname) : self
    {
        $this->initialized['hostname'] = true;
        $this->hostname = $hostname;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getUsername() : ?string
    {
        return $this->username;
    }
    /**
     * 
     *
     * @param string|null $username
     *
     * @return self
     */
    public function setUsername(?string $username) : self
    {
        $this->initialized['username'] = true;
        $this->username = $username;
        return $this;
    }
    /**
     * 
     *
     * @return bool|null
     */
    public function getOpen() : ?bool
    {
        return $this->open;
    }
    /**
     * 
     *
     * @param bool|null $open
     *
     * @return self
     */
    public function setOpen(?bool $open) : self
    {
        $this->initialized['open'] = true;
        $this->open = $open;
        return $this;
    }
    /**
     * 
     *
     * @return bool|null
     */
    public function getDebug() : ?bool
    {
        return $this->debug;
    }
    /**
     * 
     *
     * @param bool|null $debug
     *
     * @return self
     */
    public function setDebug(?bool $debug) : self
    {
        $this->initialized['debug'] = true;
        $this->debug = $debug;
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