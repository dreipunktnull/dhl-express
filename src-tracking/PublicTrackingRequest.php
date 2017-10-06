<?php

namespace DHL\Express\Webservice\Tracking;

class PublicTrackingRequest
{

    /**
     * @var TrackingRequest $TrackingRequest
     */
    protected $TrackingRequest = null;

    /**
     * @param TrackingRequest $TrackingRequest
     */
    public function __construct($TrackingRequest)
    {
      $this->TrackingRequest = $TrackingRequest;
    }

    /**
     * @return TrackingRequest
     */
    public function getTrackingRequest()
    {
      return $this->TrackingRequest;
    }

    /**
     * @param TrackingRequest $TrackingRequest
     * @return \DHL\Express\Webservice\Tracking\PublicTrackingRequest
     */
    public function setTrackingRequest($TrackingRequest)
    {
      $this->TrackingRequest = $TrackingRequest;
      return $this;
    }

}
