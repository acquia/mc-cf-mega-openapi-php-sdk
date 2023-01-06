<?php

namespace MauticInc\MEGA\OpenAPI\Generated\Model;

class ResponseListMailTemplateDataItem extends \ArrayObject
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
    protected $uuid;
    /**
     * 
     *
     * @var string|null
     */
    protected $subject;
    /**
     * 
     *
     * @var string|null
     */
    protected $mailable;
    /**
     * 
     *
     * @var string|null
     */
    protected $htmlTemplate = '<h3>provide html template</h3>';
    /**
     * 
     *
     * @var string|null
     */
    protected $textTemplate = 'provide text template';
    /**
     * 
     *
     * @var \DateTime|null
     */
    protected $createdAt;
    /**
     * 
     *
     * @var \DateTime|null
     */
    protected $updatedAt;
    /**
     * 
     *
     * @return string|null
     */
    public function getUuid() : ?string
    {
        return $this->uuid;
    }
    /**
     * 
     *
     * @param string|null $uuid
     *
     * @return self
     */
    public function setUuid(?string $uuid) : self
    {
        $this->initialized['uuid'] = true;
        $this->uuid = $uuid;
        return $this;
    }
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
    public function getMailable() : ?string
    {
        return $this->mailable;
    }
    /**
     * 
     *
     * @param string|null $mailable
     *
     * @return self
     */
    public function setMailable(?string $mailable) : self
    {
        $this->initialized['mailable'] = true;
        $this->mailable = $mailable;
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
    /**
     * 
     *
     * @return \DateTime|null
     */
    public function getCreatedAt() : ?\DateTime
    {
        return $this->createdAt;
    }
    /**
     * 
     *
     * @param \DateTime|null $createdAt
     *
     * @return self
     */
    public function setCreatedAt(?\DateTime $createdAt) : self
    {
        $this->initialized['createdAt'] = true;
        $this->createdAt = $createdAt;
        return $this;
    }
    /**
     * 
     *
     * @return \DateTime|null
     */
    public function getUpdatedAt() : ?\DateTime
    {
        return $this->updatedAt;
    }
    /**
     * 
     *
     * @param \DateTime|null $updatedAt
     *
     * @return self
     */
    public function setUpdatedAt(?\DateTime $updatedAt) : self
    {
        $this->initialized['updatedAt'] = true;
        $this->updatedAt = $updatedAt;
        return $this;
    }
}