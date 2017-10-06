<?php

namespace DHL\Express\Webservice\Tracking;

class PieceInfo
{

    /**
     * @var PieceDetails $PieceDetails
     */
    protected $PieceDetails = null;

    /**
     * @var ArrayOfPieceEvent $PieceEvent
     */
    protected $PieceEvent = null;

    /**
     * @param PieceDetails $PieceDetails
     * @param ArrayOfPieceEvent $PieceEvent
     */
    public function __construct($PieceDetails, $PieceEvent)
    {
      $this->PieceDetails = $PieceDetails;
      $this->PieceEvent = $PieceEvent;
    }

    /**
     * @return PieceDetails
     */
    public function getPieceDetails()
    {
      return $this->PieceDetails;
    }

    /**
     * @param PieceDetails $PieceDetails
     * @return \DHL\Express\Webservice\Tracking\PieceInfo
     */
    public function setPieceDetails($PieceDetails)
    {
      $this->PieceDetails = $PieceDetails;
      return $this;
    }

    /**
     * @return ArrayOfPieceEvent
     */
    public function getPieceEvent()
    {
      return $this->PieceEvent;
    }

    /**
     * @param ArrayOfPieceEvent $PieceEvent
     * @return \DHL\Express\Webservice\Tracking\PieceInfo
     */
    public function setPieceEvent($PieceEvent)
    {
      $this->PieceEvent = $PieceEvent;
      return $this;
    }

}
