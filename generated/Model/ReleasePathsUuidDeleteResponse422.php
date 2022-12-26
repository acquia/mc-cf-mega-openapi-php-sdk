<?php

namespace MauticInc\MEGA\OpenAPI\Generated\Model;

class ReleasePathsUuidDeleteResponse422 extends \ArrayObject
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
     * @var ReleasePathsUuidDeleteResponse422Errors|null
     */
    protected $errors;
    /**
     * 
     *
     * @return ReleasePathsUuidDeleteResponse422Errors|null
     */
    public function getErrors() : ?ReleasePathsUuidDeleteResponse422Errors
    {
        return $this->errors;
    }
    /**
     * 
     *
     * @param ReleasePathsUuidDeleteResponse422Errors|null $errors
     *
     * @return self
     */
    public function setErrors(?ReleasePathsUuidDeleteResponse422Errors $errors) : self
    {
        $this->initialized['errors'] = true;
        $this->errors = $errors;
        return $this;
    }
}