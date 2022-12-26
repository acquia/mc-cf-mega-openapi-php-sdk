<?php

namespace MauticInc\MEGA\OpenAPI\Generated\Model;

class SenderDomainsPostResponse422 extends \ArrayObject
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
     * @var SenderDomainsPostResponse422Errors|null
     */
    protected $errors;
    /**
     * 
     *
     * @return SenderDomainsPostResponse422Errors|null
     */
    public function getErrors() : ?SenderDomainsPostResponse422Errors
    {
        return $this->errors;
    }
    /**
     * 
     *
     * @param SenderDomainsPostResponse422Errors|null $errors
     *
     * @return self
     */
    public function setErrors(?SenderDomainsPostResponse422Errors $errors) : self
    {
        $this->initialized['errors'] = true;
        $this->errors = $errors;
        return $this;
    }
}