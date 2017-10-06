<?php

namespace DHL\Express\Webservice;

class ProcessShipmentRequestType
{

    /**
     * @var MessageId $MessageId
     */
    protected $MessageId = null;

    /**
     * @var ClientDetailType2 $ClientDetail
     */
    protected $ClientDetail = null;

    /**
     * @var RequestedShipmentType $RequestedShipment
     */
    protected $RequestedShipment = null;

    /**
     * @param RequestedShipmentType $RequestedShipment
     */
    public function __construct($RequestedShipment)
    {
      $this->RequestedShipment = $RequestedShipment;
    }

    /**
     * @return MessageId
     */
    public function getMessageId()
    {
      return $this->MessageId;
    }

    /**
     * @param MessageId $MessageId
     * @return \DHL\Express\Webservice\ProcessShipmentRequestType
     */
    public function setMessageId($MessageId)
    {
      $this->MessageId = $MessageId;
      return $this;
    }

    /**
     * @return ClientDetailType2
     */
    public function getClientDetail()
    {
      return $this->ClientDetail;
    }

    /**
     * @param ClientDetailType2 $ClientDetail
     * @return \DHL\Express\Webservice\ProcessShipmentRequestType
     */
    public function setClientDetail($ClientDetail)
    {
      $this->ClientDetail = $ClientDetail;
      return $this;
    }

    /**
     * @return RequestedShipmentType
     */
    public function getRequestedShipment()
    {
      return $this->RequestedShipment;
    }

    /**
     * @param RequestedShipmentType $RequestedShipment
     * @return \DHL\Express\Webservice\ProcessShipmentRequestType
     */
    public function setRequestedShipment($RequestedShipment)
    {
      $this->RequestedShipment = $RequestedShipment;
      return $this;
    }

}
