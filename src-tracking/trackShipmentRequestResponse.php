<?php

namespace DHL\Express\Webservice\Tracking;

class trackShipmentRequestResponse
{

    /**
     * @var pubTrackingResponse $trackingResponse
     */
    protected $trackingResponse = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return pubTrackingResponse
     */
    public function getTrackingResponse()
    {
      return $this->trackingResponse;
    }

    /**
     * @param pubTrackingResponse $trackingResponse
     * @return \DHL\Express\Webservice\Tracking\trackShipmentRequestResponse
     */
    public function setTrackingResponse($trackingResponse)
    {
      $this->trackingResponse = $trackingResponse;
      return $this;
    }

}
