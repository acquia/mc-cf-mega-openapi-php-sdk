<?php

namespace MauticInc\MEGA\OpenAPI\Generated\Model;

class ReleasePathsPostResponse422 extends \ArrayObject
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
     * @var ReleasePathsPostResponse422Errors|null
     */
    protected $errors;
    /**
     * 
     *
     * @return ReleasePathsPostResponse422Errors|null
     */
    public function getErrors() : ?ReleasePathsPostResponse422Errors
    {
        return $this->errors;
    }
    /**
     * 
     *
     * @param ReleasePathsPostResponse422Errors|null $errors
     *
     * @return self
     */
    public function setErrors(?ReleasePathsPostResponse422Errors $errors) : self
    {
        $this->initialized['errors'] = true;
        $this->errors = $errors;
        return $this;
    }
}