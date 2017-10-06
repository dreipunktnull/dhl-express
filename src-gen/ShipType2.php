<?php

namespace DHL\Express\Webservice;

use DHL\Express\Webservice\RateRequest\AddressType2;

class ShipType2
{
    /**
     * @var AddressType2 $Shipper
     */
    protected $Shipper = null;

    /**
     * @var AddressType2 $Recipient
     */
    protected $Recipient = null;

    /**
     * @param AddressType2 $Shipper
     * @param AddressType2 $Recipient
     */
    public function __construct($Shipper, $Recipient)
    {
      $this->Shipper = $Shipper;
      $this->Recipient = $Recipient;
    }

    /**
     * @return AddressType2
     */
    public function getShipper()
    {
      return $this->Shipper;
    }

    /**
     * @param AddressType2 $Shipper
     * @return \DHL\Express\Webservice\ShipType2
     */
    public function setShipper($Shipper)
    {
      $this->Shipper = $Shipper;
      return $this;
    }

    /**
     * @return AddressType2
     */
    public function getRecipient()
    {
      return $this->Recipient;
    }

    /**
     * @param AddressType2 $Recipient
     * @return \DHL\Express\Webservice\ShipType2
     */
    public function setRecipient($Recipient)
    {
      $this->Recipient = $Recipient;
      return $this;
    }

}
