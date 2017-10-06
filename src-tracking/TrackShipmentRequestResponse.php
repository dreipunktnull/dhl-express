<?php

namespace DHL\Express\Webservice\Tracking;

class TrackShipmentRequestResponse
{
    /**
     * @var pubTrackingResponse $trackingResponse
     */
    protected $trackingResponse = null;

    /**
     * @return pubTrackingResponse
     */
    public function getTrackingResponse()
    {
        return $this->trackingResponse;
    }

    /**
     * @param pubTrackingResponse $trackingResponse
     * @return \DHL\Express\Webservice\Tracking\TrackShipmentRequestResponse
     */
    public function setTrackingResponse($trackingResponse)
    {
        $this->trackingResponse = $trackingResponse;
        return $this;
    }
}
