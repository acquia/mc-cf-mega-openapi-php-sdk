<?php

namespace MauticInc\MEGA\OpenAPI\Generated\Model;

class FontsPostResponse422 extends \ArrayObject
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
     * @var FontsPostResponse422Errors|null
     */
    protected $errors;
    /**
     * 
     *
     * @return FontsPostResponse422Errors|null
     */
    public function getErrors() : ?FontsPostResponse422Errors
    {
        return $this->errors;
    }
    /**
     * 
     *
     * @param FontsPostResponse422Errors|null $errors
     *
     * @return self
     */
    public function setErrors(?FontsPostResponse422Errors $errors) : self
    {
        $this->initialized['errors'] = true;
        $this->errors = $errors;
        return $this;
    }
}