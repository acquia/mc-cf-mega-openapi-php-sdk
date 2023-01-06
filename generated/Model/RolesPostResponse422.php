<?php

namespace MauticInc\MEGA\OpenAPI\Generated\Model;

class RolesPostResponse422 extends \ArrayObject
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
     * @var RolesPostResponse422Errors|null
     */
    protected $errors;
    /**
     * 
     *
     * @return RolesPostResponse422Errors|null
     */
    public function getErrors() : ?RolesPostResponse422Errors
    {
        return $this->errors;
    }
    /**
     * 
     *
     * @param RolesPostResponse422Errors|null $errors
     *
     * @return self
     */
    public function setErrors(?RolesPostResponse422Errors $errors) : self
    {
        $this->initialized['errors'] = true;
        $this->errors = $errors;
        return $this;
    }
}