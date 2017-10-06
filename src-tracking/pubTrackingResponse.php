<?php

namespace DHL\Express\Webservice\Tracking;

class pubTrackingResponse
{

    /**
     * @var TrackingResponse $TrackingResponse
     */
    protected $TrackingResponse = null;

    /**
     * @param TrackingResponse $TrackingResponse
     */
    public function __construct($TrackingResponse)
    {
      $this->TrackingResponse = $TrackingResponse;
    }

    /**
     * @return TrackingResponse
     */
    public function getTrackingResponse()
    {
      return $this->TrackingResponse;
    }

    /**
     * @param TrackingResponse $TrackingResponse
     * @return \DHL\Express\Webservice\Tracking\pubTrackingResponse
     */
    public function setTrackingResponse($TrackingResponse)
    {
      $this->TrackingResponse = $TrackingResponse;
      return $this;
    }

}
