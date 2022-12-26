<?php

namespace MauticInc\MEGA\OpenAPI\Generated\Model;

class SenderDomainsSenderDomainPatchResponse422 extends \ArrayObject
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
     * @var SenderDomainsSenderDomainPatchResponse422Errors|null
     */
    protected $errors;
    /**
     * 
     *
     * @return SenderDomainsSenderDomainPatchResponse422Errors|null
     */
    public function getErrors() : ?SenderDomainsSenderDomainPatchResponse422Errors
    {
        return $this->errors;
    }
    /**
     * 
     *
     * @param SenderDomainsSenderDomainPatchResponse422Errors|null $errors
     *
     * @return self
     */
    public function setErrors(?SenderDomainsSenderDomainPatchResponse422Errors $errors) : self
    {
        $this->initialized['errors'] = true;
        $this->errors = $errors;
        return $this;
    }
}