<?php

namespace MauticInc\MEGA\OpenAPI\Generated\Model;

class UsersUserRolesPutResponse422Errors extends \ArrayObject
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
    protected $roleUuids;
    /**
     * 
     *
     * @return string[]|null
     */
    public function getRoleUuids() : ?array
    {
        return $this->roleUuids;
    }
    /**
     * 
     *
     * @param string[]|null $roleUuids
     *
     * @return self
     */
    public function setRoleUuids(?array $roleUuids) : self
    {
        $this->initialized['roleUuids'] = true;
        $this->roleUuids = $roleUuids;
        return $this;
    }
}