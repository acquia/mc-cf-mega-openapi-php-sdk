<?php

namespace MauticInc\MEGA\OpenAPI\Generated\Model;

class RolesPostBody extends \ArrayObject
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
    protected $name = 'role';
    /**
     * 
     *
     * @var string|null
     */
    protected $slug = 'role';
    /**
     * 
     *
     * @var bool|null
     */
    protected $visibleInMaestro = false;
    /**
     * 
     *
     * @var string[]|null
     */
    protected $permissions;
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
}