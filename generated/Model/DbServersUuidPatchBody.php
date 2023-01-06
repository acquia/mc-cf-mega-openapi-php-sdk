<?php

namespace MauticInc\MEGA\OpenAPI\Generated\Model;

class DbServersUuidPatchBody extends \ArrayObject
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
    protected $hostname = 'database.com';
    /**
     * 
     *
     * @var string|null
     */
    protected $username = 'database.com';
    /**
     * 
     *
     * @var string|null
     */
    protected $password = 'password';
    /**
     * 
     *
     * @var bool|null
     */
    protected $debug = false;
    /**
     * 
     *
     * @var bool|null
     */
    protected $open = true;
    /**
     * 
     *
     * @var string|null
     */
    protected $locationUuid;
    /**
     * 
     *
     * @return string|null
     */
    public function getHostname() : ?string
    {
        return $this->hostname;
    }
    /**
     * 
     *
     * @param string|null $hostname
     *
     * @return self
     */
    public function setHostname(?string $hostname) : self
    {
        $this->initialized['hostname'] = true;
        $this->hostname = $hostname;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getUsername() : ?string
    {
        return $this->username;
    }
    /**
     * 
     *
     * @param string|null $username
     *
     * @return self
     */
    public function setUsername(?string $username) : self
    {
        $this->initialized['username'] = true;
        $this->username = $username;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getPassword() : ?string
    {
        return $this->password;
    }
    /**
     * 
     *
     * @param string|null $password
     *
     * @return self
     */
    public function setPassword(?string $password) : self
    {
        $this->initialized['password'] = true;
        $this->password = $password;
        return $this;
    }
    /**
     * 
     *
     * @return bool|null
     */
    public function getDebug() : ?bool
    {
        return $this->debug;
    }
    /**
     * 
     *
     * @param bool|null $debug
     *
     * @return self
     */
    public function setDebug(?bool $debug) : self
    {
        $this->initialized['debug'] = true;
        $this->debug = $debug;
        return $this;
    }
    /**
     * 
     *
     * @return bool|null
     */
    public function getOpen() : ?bool
    {
        return $this->open;
    }
    /**
     * 
     *
     * @param bool|null $open
     *
     * @return self
     */
    public function setOpen(?bool $open) : self
    {
        $this->initialized['open'] = true;
        $this->open = $open;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getLocationUuid() : ?string
    {
        return $this->locationUuid;
    }
    /**
     * 
     *
     * @param string|null $locationUuid
     *
     * @return self
     */
    public function setLocationUuid(?string $locationUuid) : self
    {
        $this->initialized['locationUuid'] = true;
        $this->locationUuid = $locationUuid;
        return $this;
    }
}