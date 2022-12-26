<?php

namespace MauticInc\MEGA\OpenAPI\Generated\Model;

class UsersUserRolesPatchResponse200 extends \ArrayObject
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
     * @var UsersUserRolesPatchResponse200Data|null
     */
    protected $data;
    /**
     * 
     *
     * @return UsersUserRolesPatchResponse200Data|null
     */
    public function getData() : ?UsersUserRolesPatchResponse200Data
    {
        return $this->data;
    }
    /**
     * 
     *
     * @param UsersUserRolesPatchResponse200Data|null $data
     *
     * @return self
     */
    public function setData(?UsersUserRolesPatchResponse200Data $data) : self
    {
        $this->initialized['data'] = true;
        $this->data = $data;
        return $this;
    }
}