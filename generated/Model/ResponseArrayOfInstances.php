<?php

namespace MauticInc\MEGA\OpenAPI\Generated\Model;

class ResponseArrayOfInstances extends \ArrayObject
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
     * @var Instance[]|null
     */
    protected $data;
    /**
     * 
     *
     * @var PaginationLinks|null
     */
    protected $links;
    /**
     * 
     *
     * @var PaginationMeta|null
     */
    protected $meta;
    /**
     * 
     *
     * @return Instance[]|null
     */
    public function getData() : ?array
    {
        return $this->data;
    }
    /**
     * 
     *
     * @param Instance[]|null $data
     *
     * @return self
     */
    public function setData(?array $data) : self
    {
        $this->initialized['data'] = true;
        $this->data = $data;
        return $this;
    }
    /**
     * 
     *
     * @return PaginationLinks|null
     */
    public function getLinks() : ?PaginationLinks
    {
        return $this->links;
    }
    /**
     * 
     *
     * @param PaginationLinks|null $links
     *
     * @return self
     */
    public function setLinks(?PaginationLinks $links) : self
    {
        $this->initialized['links'] = true;
        $this->links = $links;
        return $this;
    }
    /**
     * 
     *
     * @return PaginationMeta|null
     */
    public function getMeta() : ?PaginationMeta
    {
        return $this->meta;
    }
    /**
     * 
     *
     * @param PaginationMeta|null $meta
     *
     * @return self
     */
    public function setMeta(?PaginationMeta $meta) : self
    {
        $this->initialized['meta'] = true;
        $this->meta = $meta;
        return $this;
    }
}