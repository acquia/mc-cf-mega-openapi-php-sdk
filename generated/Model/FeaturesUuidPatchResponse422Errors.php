<?php

namespace MauticInc\MEGA\OpenAPI\Generated\Model;

class FeaturesUuidPatchResponse422Errors extends \ArrayObject
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
    protected $flagname;
    /**
     * 
     *
     * @var string[]|null
     */
    protected $name;
    /**
     * 
     *
     * @var string[]|null
     */
    protected $mauticConfigName;
    /**
     * 
     *
     * @var string[]|null
     */
    protected $description;
    /**
     * 
     *
     * @return string[]|null
     */
    public function getFlagname() : ?array
    {
        return $this->flagname;
    }
    /**
     * 
     *
     * @param string[]|null $flagname
     *
     * @return self
     */
    public function setFlagname(?array $flagname) : self
    {
        $this->initialized['flagname'] = true;
        $this->flagname = $flagname;
        return $this;
    }
    /**
     * 
     *
     * @return string[]|null
     */
    public function getName() : ?array
    {
        return $this->name;
    }
    /**
     * 
     *
     * @param string[]|null $name
     *
     * @return self
     */
    public function setName(?array $name) : self
    {
        $this->initialized['name'] = true;
        $this->name = $name;
        return $this;
    }
    /**
     * 
     *
     * @return string[]|null
     */
    public function getMauticConfigName() : ?array
    {
        return $this->mauticConfigName;
    }
    /**
     * 
     *
     * @param string[]|null $mauticConfigName
     *
     * @return self
     */
    public function setMauticConfigName(?array $mauticConfigName) : self
    {
        $this->initialized['mauticConfigName'] = true;
        $this->mauticConfigName = $mauticConfigName;
        return $this;
    }
    /**
     * 
     *
     * @return string[]|null
     */
    public function getDescription() : ?array
    {
        return $this->description;
    }
    /**
     * 
     *
     * @param string[]|null $description
     *
     * @return self
     */
    public function setDescription(?array $description) : self
    {
        $this->initialized['description'] = true;
        $this->description = $description;
        return $this;
    }
}