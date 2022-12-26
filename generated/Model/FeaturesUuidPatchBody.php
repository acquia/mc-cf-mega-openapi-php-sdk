<?php

namespace MauticInc\MEGA\OpenAPI\Generated\Model;

class FeaturesUuidPatchBody extends \ArrayObject
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
    protected $name;
    /**
     * 
     *
     * @var string|null
     */
    protected $description;
    /**
     * 
     *
     * @var string|null
     */
    protected $flagname;
    /**
     * 
     *
     * @var bool|null
     */
    protected $isEnabled;
    /**
     * 
     *
     * @return string|null
     */
    public function getName() : ?string
    {
        return $this->name;
    }
    /**
     * 
     *
     * @param string|null $name
     *
     * @return self
     */
    public function setName(?string $name) : self
    {
        $this->initialized['name'] = true;
        $this->name = $name;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getDescription() : ?string
    {
        return $this->description;
    }
    /**
     * 
     *
     * @param string|null $description
     *
     * @return self
     */
    public function setDescription(?string $description) : self
    {
        $this->initialized['description'] = true;
        $this->description = $description;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getFlagname() : ?string
    {
        return $this->flagname;
    }
    /**
     * 
     *
     * @param string|null $flagname
     *
     * @return self
     */
    public function setFlagname(?string $flagname) : self
    {
        $this->initialized['flagname'] = true;
        $this->flagname = $flagname;
        return $this;
    }
    /**
     * 
     *
     * @return bool|null
     */
    public function getIsEnabled() : ?bool
    {
        return $this->isEnabled;
    }
    /**
     * 
     *
     * @param bool|null $isEnabled
     *
     * @return self
     */
    public function setIsEnabled(?bool $isEnabled) : self
    {
        $this->initialized['isEnabled'] = true;
        $this->isEnabled = $isEnabled;
        return $this;
    }
}