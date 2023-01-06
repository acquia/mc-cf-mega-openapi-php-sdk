<?php

namespace MauticInc\MEGA\OpenAPI\Generated\Model;

class MailTemplatesUuidPatchResponse422Errors extends \ArrayObject
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
    protected $subject;
    /**
     * 
     *
     * @var string[]|null
     */
    protected $htmlTemplate;
    /**
     * 
     *
     * @var string[]|null
     */
    protected $mailable;
    /**
     * 
     *
     * @return string[]|null
     */
    public function getSubject() : ?array
    {
        return $this->subject;
    }
    /**
     * 
     *
     * @param string[]|null $subject
     *
     * @return self
     */
    public function setSubject(?array $subject) : self
    {
        $this->initialized['subject'] = true;
        $this->subject = $subject;
        return $this;
    }
    /**
     * 
     *
     * @return string[]|null
     */
    public function getHtmlTemplate() : ?array
    {
        return $this->htmlTemplate;
    }
    /**
     * 
     *
     * @param string[]|null $htmlTemplate
     *
     * @return self
     */
    public function setHtmlTemplate(?array $htmlTemplate) : self
    {
        $this->initialized['htmlTemplate'] = true;
        $this->htmlTemplate = $htmlTemplate;
        return $this;
    }
    /**
     * 
     *
     * @return string[]|null
     */
    public function getMailable() : ?array
    {
        return $this->mailable;
    }
    /**
     * 
     *
     * @param string[]|null $mailable
     *
     * @return self
     */
    public function setMailable(?array $mailable) : self
    {
        $this->initialized['mailable'] = true;
        $this->mailable = $mailable;
        return $this;
    }
}