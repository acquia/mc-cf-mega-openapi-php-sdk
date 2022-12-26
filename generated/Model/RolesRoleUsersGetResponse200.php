<?php

namespace MauticInc\MEGA\OpenAPI\Generated\Model;

class RolesRoleUsersGetResponse200 extends \ArrayObject
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
     * @var User[]|null
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
    protected $;
    /**
     * 
     *
     * @return User[]|null
     */
    public function getData() : ?array
    {
        return $this->data;
    }
    /**
     * 
     *
     * @param User[]|null $data
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
    public function get() : ?PaginationMeta
    {
        return $this->;
    }
    /**
     * 
     *
     * @param PaginationMeta|null $
     *
     * @return self
     */
    public function set(?PaginationMeta $) : self
    {
        $this->initialized[''] = true;
        $this-> = $;
        return $this;
    }
}