<?php

namespace MauticInc\MEGA\OpenAPI\Generated\Model;

class PaginationMeta extends \ArrayObject
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
     * The current page number.
     *
     * @var int|null
     */
    protected $currentPage;
    /**
     * The ID of the first result in the current set.
     *
     * @var int|null
     */
    protected $from;
    /**
     * The page number for the last page of results.
     *
     * @var int|null
     */
    protected $lastPage;
    /**
     * The path to this resource, without query variables attached.
     *
     * @var string|null
     */
    protected $path;
    /**
     * The number of results per page in the current set.
     *
     * @var int|null
     */
    protected $perPage;
    /**
     * The ID of the last result in the current set.
     *
     * @var int|null
     */
    protected $to;
    /**
     * Total number of items in the whole set.
     *
     * @var int|null
     */
    protected $total;
    /**
     * The current page number.
     *
     * @return int|null
     */
    public function getCurrentPage() : ?int
    {
        return $this->currentPage;
    }
    /**
     * The current page number.
     *
     * @param int|null $currentPage
     *
     * @return self
     */
    public function setCurrentPage(?int $currentPage) : self
    {
        $this->initialized['currentPage'] = true;
        $this->currentPage = $currentPage;
        return $this;
    }
    /**
     * The ID of the first result in the current set.
     *
     * @return int|null
     */
    public function getFrom() : ?int
    {
        return $this->from;
    }
    /**
     * The ID of the first result in the current set.
     *
     * @param int|null $from
     *
     * @return self
     */
    public function setFrom(?int $from) : self
    {
        $this->initialized['from'] = true;
        $this->from = $from;
        return $this;
    }
    /**
     * The page number for the last page of results.
     *
     * @return int|null
     */
    public function getLastPage() : ?int
    {
        return $this->lastPage;
    }
    /**
     * The page number for the last page of results.
     *
     * @param int|null $lastPage
     *
     * @return self
     */
    public function setLastPage(?int $lastPage) : self
    {
        $this->initialized['lastPage'] = true;
        $this->lastPage = $lastPage;
        return $this;
    }
    /**
     * The path to this resource, without query variables attached.
     *
     * @return string|null
     */
    public function getPath() : ?string
    {
        return $this->path;
    }
    /**
     * The path to this resource, without query variables attached.
     *
     * @param string|null $path
     *
     * @return self
     */
    public function setPath(?string $path) : self
    {
        $this->initialized['path'] = true;
        $this->path = $path;
        return $this;
    }
    /**
     * The number of results per page in the current set.
     *
     * @return int|null
     */
    public function getPerPage() : ?int
    {
        return $this->perPage;
    }
    /**
     * The number of results per page in the current set.
     *
     * @param int|null $perPage
     *
     * @return self
     */
    public function setPerPage(?int $perPage) : self
    {
        $this->initialized['perPage'] = true;
        $this->perPage = $perPage;
        return $this;
    }
    /**
     * The ID of the last result in the current set.
     *
     * @return int|null
     */
    public function getTo() : ?int
    {
        return $this->to;
    }
    /**
     * The ID of the last result in the current set.
     *
     * @param int|null $to
     *
     * @return self
     */
    public function setTo(?int $to) : self
    {
        $this->initialized['to'] = true;
        $this->to = $to;
        return $this;
    }
    /**
     * Total number of items in the whole set.
     *
     * @return int|null
     */
    public function getTotal() : ?int
    {
        return $this->total;
    }
    /**
     * Total number of items in the whole set.
     *
     * @param int|null $total
     *
     * @return self
     */
    public function setTotal(?int $total) : self
    {
        $this->initialized['total'] = true;
        $this->total = $total;
        return $this;
    }
}