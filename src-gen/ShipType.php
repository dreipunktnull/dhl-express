<?php

namespace DHL\Express\Webservice;

class ShipType
{
    /**
     * @var ContactInfoType $Shipper
     */
    protected $Shipper = null;

    /**
     * @var ContactInfoType $Pickup
     */
    protected $Pickup = null;

    /**
     * @var ContactInfoType $Recipient
     */
    protected $Recipient = null;

    /**
     * @param ContactInfoType $Shipper
     * @param ContactInfoType $Recipient
     */
    public function __construct($Shipper, $Recipient)
    {
      $this->Shipper = $Shipper;
      $this->Recipient = $Recipient;
    }

    /**
     * @return ContactInfoType
     */
    public function getShipper()
    {
      return $this->Shipper;
    }

    /**
     * @param ContactInfoType $Shipper
     * @return \DHL\Express\Webservice\ShipType
     */
    public function setShipper($Shipper)
    {
      $this->Shipper = $Shipper;
      return $this;
    }

    /**
     * @return ContactInfoType
     */
    public function getPickup()
    {
      return $this->Pickup;
    }

    /**
     * @param ContactInfoType $Pickup
     * @return \DHL\Express\Webservice\ShipType
     */
    public function setPickup($Pickup)
    {
      $this->Pickup = $Pickup;
      return $this;
    }

    /**
     * @return ContactInfoType
     */
    public function getRecipient()
    {
      return $this->Recipient;
    }

    /**
     * @param ContactInfoType $Recipient
     * @return \DHL\Express\Webservice\ShipType
     */
    public function setRecipient($Recipient)
    {
      $this->Recipient = $Recipient;
      return $this;
    }

}
