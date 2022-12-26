<?php

namespace MauticInc\MEGA\OpenAPI\Generated\Model;

class UsersPostResponse201 extends \ArrayObject
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
     * @var User|null
     */
    protected $data;
    /**
     * 
     *
     * @return User|null
     */
    public function getData() : ?User
    {
        return $this->data;
    }
    /**
     * 
     *
     * @param User|null $data
     *
     * @return self
     */
    public function setData(?User $data) : self
    {
        $this->initialized['data'] = true;
        $this->data = $data;
        return $this;
    }
}