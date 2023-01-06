<?php

namespace MauticInc\MEGA\OpenAPI\Generated\Model;

class ResponseUnprocessable extends \ArrayObject
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
     * @var ValidationError[]|null
     */
    protected $errors;
    /**
     * 
     *
     * @return ValidationError[]|null
     */
    public function getErrors() : ?array
    {
        return $this->errors;
    }
    /**
     * 
     *
     * @param ValidationError[]|null $errors
     *
     * @return self
     */
    public function setErrors(?array $errors) : self
    {
        $this->initialized['errors'] = true;
        $this->errors = $errors;
        return $this;
    }
}