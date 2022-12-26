<?php

namespace MauticInc\MEGA\OpenAPI\Generated\Model;

class BrandingsBrandingPatchBody extends \ArrayObject
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
    protected $primaryColor;
    /**
     * 
     *
     * @var string|null
     */
    protected $secondaryColor;
    /**
     * 
     *
     * @var string|null
     */
    protected $tertiaryColor;
    /**
     * 
     *
     * @var string|null
     */
    protected $headerColor;
    /**
     * 
     *
     * @var string|null
     */
    protected $brandingColor;
    /**
     * 
     *
     * @var string|null
     */
    protected $headingFont;
    /**
     * 
     *
     * @var string|null
     */
    protected $bodyFont;
    /**
     * 
     *
     * @var string|null
     */
    protected $loginLogo;
    /**
     * 
     *
     * @var string|null
     */
    protected $mainLogo;
    /**
     * 
     *
     * @var string|null
     */
    protected $mascot;
    /**
     * 
     *
     * @var string|null
     */
    protected $favicon;
    /**
     * 
     *
     * @var string|null
     */
    protected $appName;
    /**
     * 
     *
     * @var string|null
     */
    protected $auxilaryColor;
    /**
     * 
     *
     * @var string|null
     */
    protected $accountUuid;
    /**
     * 
     *
     * @var string|null
     */
    protected $instanceUuid;
    /**
     * 
     *
     * @return string|null
     */
    public function getPrimaryColor() : ?string
    {
        return $this->primaryColor;
    }
    /**
     * 
     *
     * @param string|null $primaryColor
     *
     * @return self
     */
    public function setPrimaryColor(?string $primaryColor) : self
    {
        $this->initialized['primaryColor'] = true;
        $this->primaryColor = $primaryColor;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getSecondaryColor() : ?string
    {
        return $this->secondaryColor;
    }
    /**
     * 
     *
     * @param string|null $secondaryColor
     *
     * @return self
     */
    public function setSecondaryColor(?string $secondaryColor) : self
    {
        $this->initialized['secondaryColor'] = true;
        $this->secondaryColor = $secondaryColor;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getTertiaryColor() : ?string
    {
        return $this->tertiaryColor;
    }
    /**
     * 
     *
     * @param string|null $tertiaryColor
     *
     * @return self
     */
    public function setTertiaryColor(?string $tertiaryColor) : self
    {
        $this->initialized['tertiaryColor'] = true;
        $this->tertiaryColor = $tertiaryColor;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getHeaderColor() : ?string
    {
        return $this->headerColor;
    }
    /**
     * 
     *
     * @param string|null $headerColor
     *
     * @return self
     */
    public function setHeaderColor(?string $headerColor) : self
    {
        $this->initialized['headerColor'] = true;
        $this->headerColor = $headerColor;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getBrandingColor() : ?string
    {
        return $this->brandingColor;
    }
    /**
     * 
     *
     * @param string|null $brandingColor
     *
     * @return self
     */
    public function setBrandingColor(?string $brandingColor) : self
    {
        $this->initialized['brandingColor'] = true;
        $this->brandingColor = $brandingColor;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getHeadingFont() : ?string
    {
        return $this->headingFont;
    }
    /**
     * 
     *
     * @param string|null $headingFont
     *
     * @return self
     */
    public function setHeadingFont(?string $headingFont) : self
    {
        $this->initialized['headingFont'] = true;
        $this->headingFont = $headingFont;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getBodyFont() : ?string
    {
        return $this->bodyFont;
    }
    /**
     * 
     *
     * @param string|null $bodyFont
     *
     * @return self
     */
    public function setBodyFont(?string $bodyFont) : self
    {
        $this->initialized['bodyFont'] = true;
        $this->bodyFont = $bodyFont;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getLoginLogo() : ?string
    {
        return $this->loginLogo;
    }
    /**
     * 
     *
     * @param string|null $loginLogo
     *
     * @return self
     */
    public function setLoginLogo(?string $loginLogo) : self
    {
        $this->initialized['loginLogo'] = true;
        $this->loginLogo = $loginLogo;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getMainLogo() : ?string
    {
        return $this->mainLogo;
    }
    /**
     * 
     *
     * @param string|null $mainLogo
     *
     * @return self
     */
    public function setMainLogo(?string $mainLogo) : self
    {
        $this->initialized['mainLogo'] = true;
        $this->mainLogo = $mainLogo;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getMascot() : ?string
    {
        return $this->mascot;
    }
    /**
     * 
     *
     * @param string|null $mascot
     *
     * @return self
     */
    public function setMascot(?string $mascot) : self
    {
        $this->initialized['mascot'] = true;
        $this->mascot = $mascot;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getFavicon() : ?string
    {
        return $this->favicon;
    }
    /**
     * 
     *
     * @param string|null $favicon
     *
     * @return self
     */
    public function setFavicon(?string $favicon) : self
    {
        $this->initialized['favicon'] = true;
        $this->favicon = $favicon;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getAppName() : ?string
    {
        return $this->appName;
    }
    /**
     * 
     *
     * @param string|null $appName
     *
     * @return self
     */
    public function setAppName(?string $appName) : self
    {
        $this->initialized['appName'] = true;
        $this->appName = $appName;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getAuxilaryColor() : ?string
    {
        return $this->auxilaryColor;
    }
    /**
     * 
     *
     * @param string|null $auxilaryColor
     *
     * @return self
     */
    public function setAuxilaryColor(?string $auxilaryColor) : self
    {
        $this->initialized['auxilaryColor'] = true;
        $this->auxilaryColor = $auxilaryColor;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getAccountUuid() : ?string
    {
        return $this->accountUuid;
    }
    /**
     * 
     *
     * @param string|null $accountUuid
     *
     * @return self
     */
    public function setAccountUuid(?string $accountUuid) : self
    {
        $this->initialized['accountUuid'] = true;
        $this->accountUuid = $accountUuid;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getInstanceUuid() : ?string
    {
        return $this->instanceUuid;
    }
    /**
     * 
     *
     * @param string|null $instanceUuid
     *
     * @return self
     */
    public function setInstanceUuid(?string $instanceUuid) : self
    {
        $this->initialized['instanceUuid'] = true;
        $this->instanceUuid = $instanceUuid;
        return $this;
    }
}