<?php

namespace MauticInc\MEGA\OpenAPI\Generated\Model;

class MailTemplatesUuidPatchResponse200 extends \ArrayObject
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
     * @var MailTemplate|null
     */
    protected $data;
    /**
     * 
     *
     * @return MailTemplate|null
     */
    public function getData() : ?MailTemplate
    {
        return $this->data;
    }
    /**
     * 
     *
     * @param MailTemplate|null $data
     *
     * @return self
     */
    public function setData(?MailTemplate $data) : self
    {
        $this->initialized['data'] = true;
        $this->data = $data;
        return $this;
    }
}