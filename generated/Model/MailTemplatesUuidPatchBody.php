<?php

namespace MauticInc\MEGA\OpenAPI\Generated\Model;

class MailTemplatesUuidPatchBody extends \ArrayObject
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
    protected $subject = 'New Mail Template';
    /**
     * 
     *
     * @var string|null
     */
    protected $htmlTemplate = '<h3> provide html template </h3>';
    /**
     * 
     *
     * @var string|null
     */
    protected $textTemplate = 'provide text template';
    /**
     * 
     *
     * @return string|null
     */
    public function getSubject() : ?string
    {
        return $this->subject;
    }
    /**
     * 
     *
     * @param string|null $subject
     *
     * @return self
     */
    public function setSubject(?string $subject) : self
    {
        $this->initialized['subject'] = true;
        $this->subject = $subject;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getHtmlTemplate() : ?string
    {
        return $this->htmlTemplate;
    }
    /**
     * 
     *
     * @param string|null $htmlTemplate
     *
     * @return self
     */
    public function setHtmlTemplate(?string $htmlTemplate) : self
    {
        $this->initialized['htmlTemplate'] = true;
        $this->htmlTemplate = $htmlTemplate;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getTextTemplate() : ?string
    {
        return $this->textTemplate;
    }
    /**
     * 
     *
     * @param string|null $textTemplate
     *
     * @return self
     */
    public function setTextTemplate(?string $textTemplate) : self
    {
        $this->initialized['textTemplate'] = true;
        $this->textTemplate = $textTemplate;
        return $this;
    }
}