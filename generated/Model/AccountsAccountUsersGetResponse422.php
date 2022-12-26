<?php

namespace MauticInc\MEGA\OpenAPI\Generated\Model;

class AccountsAccountUsersGetResponse422 extends \ArrayObject
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
     * @var string|null
     */
    protected $message;
    /**
     * 
     *
     * @var AccountsAccountUsersGetResponse422Errors|null
     */
    protected $errors;
    /**
     * 
     *
     * @return string|null
     */
    public function getMessage() : ?string
    {
        return $this->message;
    }
    /**
     * 
     *
     * @param string|null $message
     *
     * @return self
     */
    public function setMessage(?string $message) : self
    {
        $this->initialized['message'] = true;
        $this->message = $message;
        return $this;
    }
    /**
     * 
     *
     * @return AccountsAccountUsersGetResponse422Errors|null
     */
    public function getErrors() : ?AccountsAccountUsersGetResponse422Errors
    {
        return $this->errors;
    }
    /**
     * 
     *
     * @param AccountsAccountUsersGetResponse422Errors|null $errors
     *
     * @return self
     */
    public function setErrors(?AccountsAccountUsersGetResponse422Errors $errors) : self
    {
        $this->initialized['errors'] = true;
        $this->errors = $errors;
        return $this;
    }
}