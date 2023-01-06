<?php

namespace MauticInc\MEGA\OpenAPI\Generated\Model;

class AccountsAccountUsersBulkDetachPutResponse422 extends \ArrayObject
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
     * @var AccountsAccountUsersBulkDetachPutResponse422Errors|null
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
     * @return AccountsAccountUsersBulkDetachPutResponse422Errors|null
     */
    public function getErrors() : ?AccountsAccountUsersBulkDetachPutResponse422Errors
    {
        return $this->errors;
    }
    /**
     * 
     *
     * @param AccountsAccountUsersBulkDetachPutResponse422Errors|null $errors
     *
     * @return self
     */
    public function setErrors(?AccountsAccountUsersBulkDetachPutResponse422Errors $errors) : self
    {
        $this->initialized['errors'] = true;
        $this->errors = $errors;
        return $this;
    }
}