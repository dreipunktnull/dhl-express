<?php

namespace DHL\Express\Webservice\Tracking;

class TrackShipmentRequest
{
    /**
     * @var PublicTrackingRequest $trackingRequest
     */
    protected $trackingRequest = null;

    /**
     * @return PublicTrackingRequest
     */
    public function getTrackingRequest()
    {
      return $this->trackingRequest;
    }

    /**
     * @param PublicTrackingRequest $trackingRequest
     * @return \DHL\Express\Webservice\Tracking\TrackShipmentRequest
     */
    public function setTrackingRequest($trackingRequest)
    {
      $this->trackingRequest = $trackingRequest;
      return $this;
    }

}
