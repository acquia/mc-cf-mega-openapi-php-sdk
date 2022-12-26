<?php

namespace MauticInc\MEGA\OpenAPI\Generated\Model;

class NotificationsNotificationUUIDPatchResponse200 extends \ArrayObject
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
     * @var Notification|null
     */
    protected $data;
    /**
     * 
     *
     * @return Notification|null
     */
    public function getData() : ?Notification
    {
        return $this->data;
    }
    /**
     * 
     *
     * @param Notification|null $data
     *
     * @return self
     */
    public function setData(?Notification $data) : self
    {
        $this->initialized['data'] = true;
        $this->data = $data;
        return $this;
    }
}