<?php

namespace MauticInc\MEGA\OpenAPI\Generated\Model;

class DbServersUuidPatchResponse422 extends \ArrayObject
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
     * @var DbServersUuidPatchResponse422Errors|null
     */
    protected $errors;
    /**
     * 
     *
     * @return DbServersUuidPatchResponse422Errors|null
     */
    public function getErrors() : ?DbServersUuidPatchResponse422Errors
    {
        return $this->errors;
    }
    /**
     * 
     *
     * @param DbServersUuidPatchResponse422Errors|null $errors
     *
     * @return self
     */
    public function setErrors(?DbServersUuidPatchResponse422Errors $errors) : self
    {
        $this->initialized['errors'] = true;
        $this->errors = $errors;
        return $this;
    }
}