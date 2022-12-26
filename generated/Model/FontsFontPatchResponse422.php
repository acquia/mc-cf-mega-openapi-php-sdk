<?php

namespace MauticInc\MEGA\OpenAPI\Generated\Model;

class FontsFontPatchResponse422 extends \ArrayObject
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
     * @var FontsFontPatchResponse422Errors|null
     */
    protected $errors;
    /**
     * 
     *
     * @return FontsFontPatchResponse422Errors|null
     */
    public function getErrors() : ?FontsFontPatchResponse422Errors
    {
        return $this->errors;
    }
    /**
     * 
     *
     * @param FontsFontPatchResponse422Errors|null $errors
     *
     * @return self
     */
    public function setErrors(?FontsFontPatchResponse422Errors $errors) : self
    {
        $this->initialized['errors'] = true;
        $this->errors = $errors;
        return $this;
    }
}