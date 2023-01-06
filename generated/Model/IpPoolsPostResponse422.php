<?php

namespace MauticInc\MEGA\OpenAPI\Generated\Model;

class IpPoolsPostResponse422 extends \ArrayObject
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
     * @var IpPoolsPostResponse422Errors|null
     */
    protected $errors;
    /**
     * 
     *
     * @return IpPoolsPostResponse422Errors|null
     */
    public function getErrors() : ?IpPoolsPostResponse422Errors
    {
        return $this->errors;
    }
    /**
     * 
     *
     * @param IpPoolsPostResponse422Errors|null $errors
     *
     * @return self
     */
    public function setErrors(?IpPoolsPostResponse422Errors $errors) : self
    {
        $this->initialized['errors'] = true;
        $this->errors = $errors;
        return $this;
    }
}