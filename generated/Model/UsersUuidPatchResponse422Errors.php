<?php

namespace MauticInc\MEGA\OpenAPI\Generated\Model;

class UsersUuidPatchResponse422Errors extends \ArrayObject
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
    protected $name;
    /**
     * 
     *
     * @var string[]|null
     */
    protected $email;
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
    protected $super;
    /**
     * 
     *
     * @var string[]|null
     */
    protected $notifyLimitViolation;
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
    /**
     * 
     *
     * @return string[]|null
     */
    public function getEmail() : ?array
    {
        return $this->email;
    }
    /**
     * 
     *
     * @param string[]|null $email
     *
     * @return self
     */
    public function setEmail(?array $email) : self
    {
        $this->initialized['email'] = true;
        $this->email = $email;
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
    public function getSuper() : ?array
    {
        return $this->super;
    }
    /**
     * 
     *
     * @param string[]|null $super
     *
     * @return self
     */
    public function setSuper(?array $super) : self
    {
        $this->initialized['super'] = true;
        $this->super = $super;
        return $this;
    }
    /**
     * 
     *
     * @return string[]|null
     */
    public function getNotifyLimitViolation() : ?array
    {
        return $this->notifyLimitViolation;
    }
    /**
     * 
     *
     * @param string[]|null $notifyLimitViolation
     *
     * @return self
     */
    public function setNotifyLimitViolation(?array $notifyLimitViolation) : self
    {
        $this->initialized['notifyLimitViolation'] = true;
        $this->notifyLimitViolation = $notifyLimitViolation;
        return $this;
    }
}