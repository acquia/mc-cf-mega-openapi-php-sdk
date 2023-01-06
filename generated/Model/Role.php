<?php

namespace MauticInc\MEGA\OpenAPI\Generated\Model;

class Role extends \ArrayObject
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
    protected $name = 'New Role';
    /**
     * 
     *
     * @var string|null
     */
    protected $slug = 'new role slug';
    /**
     * 
     *
     * @var mixed|null
     */
    protected $customerUuid;
    /**
     * 
     *
     * @var bool|null
     */
    protected $visibleInMaestro = false;
    /**
     * 
     *
     * @var RolePermissionsItem[]|null
     */
    protected $permissions;
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
    public function getSlug() : ?string
    {
        return $this->slug;
    }
    /**
     * 
     *
     * @param string|null $slug
     *
     * @return self
     */
    public function setSlug(?string $slug) : self
    {
        $this->initialized['slug'] = true;
        $this->slug = $slug;
        return $this;
    }
    /**
     * 
     *
     * @return mixed
     */
    public function getCustomerUuid()
    {
        return $this->customerUuid;
    }
    /**
     * 
     *
     * @param mixed $customerUuid
     *
     * @return self
     */
    public function setCustomerUuid($customerUuid) : self
    {
        $this->initialized['customerUuid'] = true;
        $this->customerUuid = $customerUuid;
        return $this;
    }
    /**
     * 
     *
     * @return bool|null
     */
    public function getVisibleInMaestro() : ?bool
    {
        return $this->visibleInMaestro;
    }
    /**
     * 
     *
     * @param bool|null $visibleInMaestro
     *
     * @return self
     */
    public function setVisibleInMaestro(?bool $visibleInMaestro) : self
    {
        $this->initialized['visibleInMaestro'] = true;
        $this->visibleInMaestro = $visibleInMaestro;
        return $this;
    }
    /**
     * 
     *
     * @return RolePermissionsItem[]|null
     */
    public function getPermissions() : ?array
    {
        return $this->permissions;
    }
    /**
     * 
     *
     * @param RolePermissionsItem[]|null $permissions
     *
     * @return self
     */
    public function setPermissions(?array $permissions) : self
    {
        $this->initialized['permissions'] = true;
        $this->permissions = $permissions;
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