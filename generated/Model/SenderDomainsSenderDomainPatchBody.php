<?php

namespace MauticInc\MEGA\OpenAPI\Generated\Model;

class SenderDomainsSenderDomainPatchBody extends \ArrayObject
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
    protected $defaultFromName = 'someone';
    /**
     * 
     *
     * @var string|null
     */
    protected $defaultFromEmail = 'someone@domain.com';
    /**
     * 
     *
     * @return string|null
     */
    public function getDefaultFromName() : ?string
    {
        return $this->defaultFromName;
    }
    /**
     * 
     *
     * @param string|null $defaultFromName
     *
     * @return self
     */
    public function setDefaultFromName(?string $defaultFromName) : self
    {
        $this->initialized['defaultFromName'] = true;
        $this->defaultFromName = $defaultFromName;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getDefaultFromEmail() : ?string
    {
        return $this->defaultFromEmail;
    }
    /**
     * 
     *
     * @param string|null $defaultFromEmail
     *
     * @return self
     */
    public function setDefaultFromEmail(?string $defaultFromEmail) : self
    {
        $this->initialized['defaultFromEmail'] = true;
        $this->defaultFromEmail = $defaultFromEmail;
        return $this;
    }
}