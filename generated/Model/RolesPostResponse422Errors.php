<?php

namespace MauticInc\MEGA\OpenAPI\Generated\Model;

class RolesPostResponse422Errors extends \ArrayObject
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
     * @var string[]|null
     */
    protected $slug;
    /**
     * 
     *
     * @var string[]|null
     */
    protected $permissions;
    /**
     * 
     *
     * @var string[]|null
     */
    protected $name;
    /**
     * 
     *
     * @return string[]|null
     */
    public function getSlug() : ?array
    {
        return $this->slug;
    }
    /**
     * 
     *
     * @param string[]|null $slug
     *
     * @return self
     */
    public function setSlug(?array $slug) : self
    {
        $this->initialized['slug'] = true;
        $this->slug = $slug;
        return $this;
    }
    /**
     * 
     *
     * @return string[]|null
     */
    public function getPermissions() : ?array
    {
        return $this->permissions;
    }
    /**
     * 
     *
     * @param string[]|null $permissions
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
     * @return string[]|null
     */
    public function getName() : ?array
    {
        return $this->name;
    }
    /**
     * 
     *
     * @param string[]|null $name
     *
     * @return self
     */
    public function setName(?array $name) : self
    {
        $this->initialized['name'] = true;
        $this->name = $name;
        return $this;
    }
}