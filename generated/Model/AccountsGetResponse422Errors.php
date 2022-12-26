<?php

namespace MauticInc\MEGA\OpenAPI\Generated\Model;

class AccountsGetResponse422Errors extends \ArrayObject
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
     * @var string[]|null
     */
    protected $perPage;
    /**
     * 
     *
     * @var string[]|null
     */
    protected $sortColumn;
    /**
     * 
     *
     * @var string[]|null
     */
    protected $sortDirection;
    /**
     * 
     *
     * @var string[]|null
     */
    protected $trashed;
    /**
     * 
     *
     * @return string[]|null
     */
    public function getPerPage() : ?array
    {
        return $this->perPage;
    }
    /**
     * 
     *
     * @param string[]|null $perPage
     *
     * @return self
     */
    public function setPerPage(?array $perPage) : self
    {
        $this->initialized['perPage'] = true;
        $this->perPage = $perPage;
        return $this;
    }
    /**
     * 
     *
     * @return string[]|null
     */
    public function getSortColumn() : ?array
    {
        return $this->sortColumn;
    }
    /**
     * 
     *
     * @param string[]|null $sortColumn
     *
     * @return self
     */
    public function setSortColumn(?array $sortColumn) : self
    {
        $this->initialized['sortColumn'] = true;
        $this->sortColumn = $sortColumn;
        return $this;
    }
    /**
     * 
     *
     * @return string[]|null
     */
    public function getSortDirection() : ?array
    {
        return $this->sortDirection;
    }
    /**
     * 
     *
     * @param string[]|null $sortDirection
     *
     * @return self
     */
    public function setSortDirection(?array $sortDirection) : self
    {
        $this->initialized['sortDirection'] = true;
        $this->sortDirection = $sortDirection;
        return $this;
    }
    /**
     * 
     *
     * @return string[]|null
     */
    public function getTrashed() : ?array
    {
        return $this->trashed;
    }
    /**
     * 
     *
     * @param string[]|null $trashed
     *
     * @return self
     */
    public function setTrashed(?array $trashed) : self
    {
        $this->initialized['trashed'] = true;
        $this->trashed = $trashed;
        return $this;
    }
}