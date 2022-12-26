<?php

namespace MauticInc\MEGA\OpenAPI\Generated\Model;

class RolesUuidPatchResponse422 extends \ArrayObject
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
     * @var RolesUuidPatchResponse422Errors|null
     */
    protected $errors;
    /**
     * 
     *
     * @return RolesUuidPatchResponse422Errors|null
     */
    public function getErrors() : ?RolesUuidPatchResponse422Errors
    {
        return $this->errors;
    }
    /**
     * 
     *
     * @param RolesUuidPatchResponse422Errors|null $errors
     *
     * @return self
     */
    public function setErrors(?RolesUuidPatchResponse422Errors $errors) : self
    {
        $this->initialized['errors'] = true;
        $this->errors = $errors;
        return $this;
    }
}