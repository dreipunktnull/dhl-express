<?php

namespace DHL\Express\Webservice\DeleteShipment;

class DeleteResponseType
{
    /**
     * @var NotificationType $Notification
     */
    protected $Notification = null;

    /**
     * @param NotificationType $Notification
     */
    public function __construct($Notification)
    {
      $this->Notification = $Notification;
    }

    /**
     * @return NotificationType
     */
    public function getNotification()
    {
      return $this->Notification;
    }

    /**
     * @param NotificationType $Notification
     * @return DeleteResponseType
     */
    public function setNotification($Notification)
    {
      $this->Notification = $Notification;
      return $this;
    }
}
