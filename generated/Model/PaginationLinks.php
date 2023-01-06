<?php

namespace MauticInc\MEGA\OpenAPI\Generated\Model;

class PaginationLinks extends \ArrayObject
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
    protected $first;
    /**
     * 
     *
     * @var string|null
     */
    protected $last;
    /**
     * 
     *
     * @var string|null
     */
    protected $prev;
    /**
     * 
     *
     * @var string|null
     */
    protected $next;
    /**
     * 
     *
     * @return string|null
     */
    public function getFirst() : ?string
    {
        return $this->first;
    }
    /**
     * 
     *
     * @param string|null $first
     *
     * @return self
     */
    public function setFirst(?string $first) : self
    {
        $this->initialized['first'] = true;
        $this->first = $first;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getLast() : ?string
    {
        return $this->last;
    }
    /**
     * 
     *
     * @param string|null $last
     *
     * @return self
     */
    public function setLast(?string $last) : self
    {
        $this->initialized['last'] = true;
        $this->last = $last;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getPrev() : ?string
    {
        return $this->prev;
    }
    /**
     * 
     *
     * @param string|null $prev
     *
     * @return self
     */
    public function setPrev(?string $prev) : self
    {
        $this->initialized['prev'] = true;
        $this->prev = $prev;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getNext() : ?string
    {
        return $this->next;
    }
    /**
     * 
     *
     * @param string|null $next
     *
     * @return self
     */
    public function setNext(?string $next) : self
    {
        $this->initialized['next'] = true;
        $this->next = $next;
        return $this;
    }
}