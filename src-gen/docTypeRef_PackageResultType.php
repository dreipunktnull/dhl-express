<?php

namespace DHL\Express\Webservice;

class docTypeRef_PackageResultType
{

    /**
     * @var TrackingNumber $TrackingNumber
     */
    protected $TrackingNumber = null;

    /**
     * @var _x0040_number2 $number
     */
    protected $number = null;

    /**
     * @param TrackingNumber $TrackingNumber
     * @param _x0040_number2 $number
     */
    public function __construct($TrackingNumber, $number)
    {
      $this->TrackingNumber = $TrackingNumber;
      $this->number = $number;
    }

    /**
     * @return TrackingNumber
     */
    public function getTrackingNumber()
    {
      return $this->TrackingNumber;
    }

    /**
     * @param TrackingNumber $TrackingNumber
     * @return \DHL\Express\Webservice\docTypeRef_PackageResultType
     */
    public function setTrackingNumber($TrackingNumber)
    {
      $this->TrackingNumber = $TrackingNumber;
      return $this;
    }

    /**
     * @return _x0040_number2
     */
    public function getNumber()
    {
      return $this->number;
    }

    /**
     * @param _x0040_number2 $number
     * @return \DHL\Express\Webservice\docTypeRef_PackageResultType
     */
    public function setNumber($number)
    {
      $this->number = $number;
      return $this;
    }

}
