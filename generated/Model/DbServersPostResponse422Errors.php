<?php

namespace MauticInc\MEGA\OpenAPI\Generated\Model;

class DbServersPostResponse422Errors extends \ArrayObject
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
    protected $username;
    /**
     * 
     *
     * @var string[]|null
     */
    protected $hostname;
    /**
     * 
     *
     * @var string[]|null
     */
    protected $password;
    /**
     * 
     *
     * @var string[]|null
     */
    protected $locationUuid;
    /**
     * 
     *
     * @return string[]|null
     */
    public function getUsername() : ?array
    {
        return $this->username;
    }
    /**
     * 
     *
     * @param string[]|null $username
     *
     * @return self
     */
    public function setUsername(?array $username) : self
    {
        $this->initialized['username'] = true;
        $this->username = $username;
        return $this;
    }
    /**
     * 
     *
     * @return string[]|null
     */
    public function getHostname() : ?array
    {
        return $this->hostname;
    }
    /**
     * 
     *
     * @param string[]|null $hostname
     *
     * @return self
     */
    public function setHostname(?array $hostname) : self
    {
        $this->initialized['hostname'] = true;
        $this->hostname = $hostname;
        return $this;
    }
    /**
     * 
     *
     * @return string[]|null
     */
    public function getPassword() : ?array
    {
        return $this->password;
    }
    /**
     * 
     *
     * @param string[]|null $password
     *
     * @return self
     */
    public function setPassword(?array $password) : self
    {
        $this->initialized['password'] = true;
        $this->password = $password;
        return $this;
    }
    /**
     * 
     *
     * @return string[]|null
     */
    public function getLocationUuid() : ?array
    {
        return $this->locationUuid;
    }
    /**
     * 
     *
     * @param string[]|null $locationUuid
     *
     * @return self
     */
    public function setLocationUuid(?array $locationUuid) : self
    {
        $this->initialized['locationUuid'] = true;
        $this->locationUuid = $locationUuid;
        return $this;
    }
}