<?php

namespace MauticInc\MEGA\OpenAPI\Generated\Model;

class AuditsUuidPostResponse422 extends \ArrayObject
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
     * @var AuditsUuidPostResponse422Errors|null
     */
    protected $errors;
    /**
     * 
     *
     * @return AuditsUuidPostResponse422Errors|null
     */
    public function getErrors() : ?AuditsUuidPostResponse422Errors
    {
        return $this->errors;
    }
    /**
     * 
     *
     * @param AuditsUuidPostResponse422Errors|null $errors
     *
     * @return self
     */
    public function setErrors(?AuditsUuidPostResponse422Errors $errors) : self
    {
        $this->initialized['errors'] = true;
        $this->errors = $errors;
        return $this;
    }
}