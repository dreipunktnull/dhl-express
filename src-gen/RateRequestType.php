<?php

namespace DHL\Express\Webservice;

use DHL\Express\Webservice\RateRequest\RequestedShipmentType2;

class RateRequestType
{

    /**
     * @var docTypeRef_ClientDetailType3 $ClientDetail
     */
    protected $ClientDetail = null;

    /**
     * @var RequestedShipmentType2 $RequestedShipment
     */
    protected $RequestedShipment = null;

    /**
     * @param RequestedShipmentType2 $RequestedShipment
     */
    public function __construct($RequestedShipment)
    {
      $this->RequestedShipment = $RequestedShipment;
    }

    /**
     * @return docTypeRef_ClientDetailType3
     */
    public function getClientDetail()
    {
      return $this->ClientDetail;
    }

    /**
     * @param docTypeRef_ClientDetailType3 $ClientDetail
     * @return \DHL\Express\Webservice\RateRequestType
     */
    public function setClientDetail($ClientDetail)
    {
      $this->ClientDetail = $ClientDetail;
      return $this;
    }

    /**
     * @return RequestedShipmentType2
     */
    public function getRequestedShipment()
    {
      return $this->RequestedShipment;
    }

    /**
     * @param RequestedShipmentType2 $RequestedShipment
     * @return \DHL\Express\Webservice\RateRequestType
     */
    public function setRequestedShipment($RequestedShipment)
    {
      $this->RequestedShipment = $RequestedShipment;
      return $this;
    }

}
