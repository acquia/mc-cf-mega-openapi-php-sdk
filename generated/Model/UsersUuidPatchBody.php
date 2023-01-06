<?php

namespace MauticInc\MEGA\OpenAPI\Generated\Model;

class UsersUuidPatchBody extends \ArrayObject
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
    protected $name;
    /**
     * 
     *
     * @var string|null
     */
    protected $email = 'email@email.com';
    /**
     * 
     *
     * @var string|null
     */
    protected $password;
    /**
     * 
     *
     * @var bool|null
     */
    protected $notifyLimitViolation;
    /**
     * 
     *
     * @var bool|null
     */
    protected $super;
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
    public function getEmail() : ?string
    {
        return $this->email;
    }
    /**
     * 
     *
     * @param string|null $email
     *
     * @return self
     */
    public function setEmail(?string $email) : self
    {
        $this->initialized['email'] = true;
        $this->email = $email;
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
    public function getNotifyLimitViolation() : ?bool
    {
        return $this->notifyLimitViolation;
    }
    /**
     * 
     *
     * @param bool|null $notifyLimitViolation
     *
     * @return self
     */
    public function setNotifyLimitViolation(?bool $notifyLimitViolation) : self
    {
        $this->initialized['notifyLimitViolation'] = true;
        $this->notifyLimitViolation = $notifyLimitViolation;
        return $this;
    }
    /**
     * 
     *
     * @return bool|null
     */
    public function getSuper() : ?bool
    {
        return $this->super;
    }
    /**
     * 
     *
     * @param bool|null $super
     *
     * @return self
     */
    public function setSuper(?bool $super) : self
    {
        $this->initialized['super'] = true;
        $this->super = $super;
        return $this;
    }
}