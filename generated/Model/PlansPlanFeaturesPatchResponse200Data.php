<?php

namespace MauticInc\MEGA\OpenAPI\Generated\Model;

class PlansPlanFeaturesPatchResponse200Data extends \ArrayObject
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
    protected $messgae;
    /**
     * 
     *
     * @return string|null
     */
    public function getMessgae() : ?string
    {
        return $this->messgae;
    }
    /**
     * 
     *
     * @param string|null $messgae
     *
     * @return self
     */
    public function setMessgae(?string $messgae) : self
    {
        $this->initialized['messgae'] = true;
        $this->messgae = $messgae;
        return $this;
    }
}