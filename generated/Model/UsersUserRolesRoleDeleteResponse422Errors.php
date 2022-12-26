<?php

namespace MauticInc\MEGA\OpenAPI\Generated\Model;

class UsersUserRolesRoleDeleteResponse422Errors extends \ArrayObject
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
    protected $roleUuid;
    /**
     * 
     *
     * @return string[]|null
     */
    public function getRoleUuid() : ?array
    {
        return $this->roleUuid;
    }
    /**
     * 
     *
     * @param string[]|null $roleUuid
     *
     * @return self
     */
    public function setRoleUuid(?array $roleUuid) : self
    {
        $this->initialized['roleUuid'] = true;
        $this->roleUuid = $roleUuid;
        return $this;
    }
}