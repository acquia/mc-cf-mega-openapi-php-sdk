<?php

namespace MauticInc\MEGA\OpenAPI\Generated\Model;

class DbServersPostResponse422 extends \ArrayObject
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
     * @var DbServersPostResponse422Errors|null
     */
    protected $errors;
    /**
     * 
     *
     * @return DbServersPostResponse422Errors|null
     */
    public function getErrors() : ?DbServersPostResponse422Errors
    {
        return $this->errors;
    }
    /**
     * 
     *
     * @param DbServersPostResponse422Errors|null $errors
     *
     * @return self
     */
    public function setErrors(?DbServersPostResponse422Errors $errors) : self
    {
        $this->initialized['errors'] = true;
        $this->errors = $errors;
        return $this;
    }
}