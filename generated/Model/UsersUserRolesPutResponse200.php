<?php

namespace MauticInc\MEGA\OpenAPI\Generated\Model;

class UsersUserRolesPutResponse200 extends \ArrayObject
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
     * @var UsersUserRolesPutResponse200Data|null
     */
    protected $data;
    /**
     * 
     *
     * @return UsersUserRolesPutResponse200Data|null
     */
    public function getData() : ?UsersUserRolesPutResponse200Data
    {
        return $this->data;
    }
    /**
     * 
     *
     * @param UsersUserRolesPutResponse200Data|null $data
     *
     * @return self
     */
    public function setData(?UsersUserRolesPutResponse200Data $data) : self
    {
        $this->initialized['data'] = true;
        $this->data = $data;
        return $this;
    }
}