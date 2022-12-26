<?php

namespace MauticInc\MEGA\OpenAPI\Generated\Model;

class ResponseShowMailTemplate extends \ArrayObject
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
     * @var ResponseShowMailTemplateData|null
     */
    protected $data;
    /**
     * 
     *
     * @return ResponseShowMailTemplateData|null
     */
    public function getData() : ?ResponseShowMailTemplateData
    {
        return $this->data;
    }
    /**
     * 
     *
     * @param ResponseShowMailTemplateData|null $data
     *
     * @return self
     */
    public function setData(?ResponseShowMailTemplateData $data) : self
    {
        $this->initialized['data'] = true;
        $this->data = $data;
        return $this;
    }
}