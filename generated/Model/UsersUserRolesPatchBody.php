<?php

namespace MauticInc\MEGA\OpenAPI\Generated\Model;

class UsersUserRolesPatchBody extends \ArrayObject
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
    protected $roleUuid;
    /**
     * 
     *
     * @return string|null
     */
    public function getRoleUuid() : ?string
    {
        return $this->roleUuid;
    }
    /**
     * 
     *
     * @param string|null $roleUuid
     *
     * @return self
     */
    public function setRoleUuid(?string $roleUuid) : self
    {
        $this->initialized['roleUuid'] = true;
        $this->roleUuid = $roleUuid;
        return $this;
    }
}