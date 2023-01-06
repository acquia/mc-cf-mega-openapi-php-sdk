<?php

namespace MauticInc\MEGA\OpenAPI\Generated\Model;

class SenderDomainsPostResponse422Errors extends \ArrayObject
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
    protected $senderDomain;
    /**
     * 
     *
     * @var string[]|null
     */
    protected $bounceDomain;
    /**
     * 
     *
     * @var string[]|null
     */
    protected $trackingDomain;
    /**
     * 
     *
     * @return string[]|null
     */
    public function getSenderDomain() : ?array
    {
        return $this->senderDomain;
    }
    /**
     * 
     *
     * @param string[]|null $senderDomain
     *
     * @return self
     */
    public function setSenderDomain(?array $senderDomain) : self
    {
        $this->initialized['senderDomain'] = true;
        $this->senderDomain = $senderDomain;
        return $this;
    }
    /**
     * 
     *
     * @return string[]|null
     */
    public function getBounceDomain() : ?array
    {
        return $this->bounceDomain;
    }
    /**
     * 
     *
     * @param string[]|null $bounceDomain
     *
     * @return self
     */
    public function setBounceDomain(?array $bounceDomain) : self
    {
        $this->initialized['bounceDomain'] = true;
        $this->bounceDomain = $bounceDomain;
        return $this;
    }
    /**
     * 
     *
     * @return string[]|null
     */
    public function getTrackingDomain() : ?array
    {
        return $this->trackingDomain;
    }
    /**
     * 
     *
     * @param string[]|null $trackingDomain
     *
     * @return self
     */
    public function setTrackingDomain(?array $trackingDomain) : self
    {
        $this->initialized['trackingDomain'] = true;
        $this->trackingDomain = $trackingDomain;
        return $this;
    }
}