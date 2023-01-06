<?php

namespace MauticInc\MEGA\OpenAPI\Generated\Model;

class SenderDomainsPostBody extends \ArrayObject
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
    protected $senderDomain = 'sender.domain';
    /**
     * 
     *
     * @var string|null
     */
    protected $bounceDomain = 'bounce.sender.domain';
    /**
     * 
     *
     * @var string|null
     */
    protected $trackingDomain = 'clicks.sender.domain';
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
     * @var string|null
     */
    protected $esp = 'sparkpost';
    /**
     * 
     *
     * @var bool|null
     */
    protected $senderDomainValidated = false;
    /**
     * 
     *
     * @var bool|null
     */
    protected $bounceDomainValidated = false;
    /**
     * 
     *
     * @var bool|null
     */
    protected $trackingDomainValidated = false;
    /**
     * 
     *
     * @return string|null
     */
    public function getSenderDomain() : ?string
    {
        return $this->senderDomain;
    }
    /**
     * 
     *
     * @param string|null $senderDomain
     *
     * @return self
     */
    public function setSenderDomain(?string $senderDomain) : self
    {
        $this->initialized['senderDomain'] = true;
        $this->senderDomain = $senderDomain;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getBounceDomain() : ?string
    {
        return $this->bounceDomain;
    }
    /**
     * 
     *
     * @param string|null $bounceDomain
     *
     * @return self
     */
    public function setBounceDomain(?string $bounceDomain) : self
    {
        $this->initialized['bounceDomain'] = true;
        $this->bounceDomain = $bounceDomain;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getTrackingDomain() : ?string
    {
        return $this->trackingDomain;
    }
    /**
     * 
     *
     * @param string|null $trackingDomain
     *
     * @return self
     */
    public function setTrackingDomain(?string $trackingDomain) : self
    {
        $this->initialized['trackingDomain'] = true;
        $this->trackingDomain = $trackingDomain;
        return $this;
    }
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
    /**
     * 
     *
     * @return string|null
     */
    public function getEsp() : ?string
    {
        return $this->esp;
    }
    /**
     * 
     *
     * @param string|null $esp
     *
     * @return self
     */
    public function setEsp(?string $esp) : self
    {
        $this->initialized['esp'] = true;
        $this->esp = $esp;
        return $this;
    }
    /**
     * 
     *
     * @return bool|null
     */
    public function getSenderDomainValidated() : ?bool
    {
        return $this->senderDomainValidated;
    }
    /**
     * 
     *
     * @param bool|null $senderDomainValidated
     *
     * @return self
     */
    public function setSenderDomainValidated(?bool $senderDomainValidated) : self
    {
        $this->initialized['senderDomainValidated'] = true;
        $this->senderDomainValidated = $senderDomainValidated;
        return $this;
    }
    /**
     * 
     *
     * @return bool|null
     */
    public function getBounceDomainValidated() : ?bool
    {
        return $this->bounceDomainValidated;
    }
    /**
     * 
     *
     * @param bool|null $bounceDomainValidated
     *
     * @return self
     */
    public function setBounceDomainValidated(?bool $bounceDomainValidated) : self
    {
        $this->initialized['bounceDomainValidated'] = true;
        $this->bounceDomainValidated = $bounceDomainValidated;
        return $this;
    }
    /**
     * 
     *
     * @return bool|null
     */
    public function getTrackingDomainValidated() : ?bool
    {
        return $this->trackingDomainValidated;
    }
    /**
     * 
     *
     * @param bool|null $trackingDomainValidated
     *
     * @return self
     */
    public function setTrackingDomainValidated(?bool $trackingDomainValidated) : self
    {
        $this->initialized['trackingDomainValidated'] = true;
        $this->trackingDomainValidated = $trackingDomainValidated;
        return $this;
    }
}