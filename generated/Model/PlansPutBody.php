<?php

namespace MauticInc\MEGA\OpenAPI\Generated\Model;

class PlansPutBody extends \ArrayObject
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
    protected $planUuids;
    /**
     * 
     *
     * @return string[]|null
     */
    public function getPlanUuids() : ?array
    {
        return $this->planUuids;
    }
    /**
     * 
     *
     * @param string[]|null $planUuids
     *
     * @return self
     */
    public function setPlanUuids(?array $planUuids) : self
    {
        $this->initialized['planUuids'] = true;
        $this->planUuids = $planUuids;
        return $this;
    }
}