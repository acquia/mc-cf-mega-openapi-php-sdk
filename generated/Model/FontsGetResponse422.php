<?php

namespace MauticInc\MEGA\OpenAPI\Generated\Model;

class FontsGetResponse422 extends \ArrayObject
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
     * @var FontsGetResponse422Errors|null
     */
    protected $errors;
    /**
     * 
     *
     * @return FontsGetResponse422Errors|null
     */
    public function getErrors() : ?FontsGetResponse422Errors
    {
        return $this->errors;
    }
    /**
     * 
     *
     * @param FontsGetResponse422Errors|null $errors
     *
     * @return self
     */
    public function setErrors(?FontsGetResponse422Errors $errors) : self
    {
        $this->initialized['errors'] = true;
        $this->errors = $errors;
        return $this;
    }
}