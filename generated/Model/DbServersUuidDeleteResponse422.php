<?php

namespace MauticInc\MEGA\OpenAPI\Generated\Model;

class DbServersUuidDeleteResponse422 extends \ArrayObject
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
     * @var DbServersUuidDeleteResponse422Errors|null
     */
    protected $errors;
    /**
     * 
     *
     * @return DbServersUuidDeleteResponse422Errors|null
     */
    public function getErrors() : ?DbServersUuidDeleteResponse422Errors
    {
        return $this->errors;
    }
    /**
     * 
     *
     * @param DbServersUuidDeleteResponse422Errors|null $errors
     *
     * @return self
     */
    public function setErrors(?DbServersUuidDeleteResponse422Errors $errors) : self
    {
        $this->initialized['errors'] = true;
        $this->errors = $errors;
        return $this;
    }
}