<?php

namespace DHL\Express\Webservice\Tracking;

class TrackingPieces
{

    /**
     * @var ArrayOfPieceInfo $PieceInfo
     */
    protected $PieceInfo = null;

    /**
     * @param ArrayOfPieceInfo $PieceInfo
     */
    public function __construct($PieceInfo)
    {
      $this->PieceInfo = $PieceInfo;
    }

    /**
     * @return ArrayOfPieceInfo
     */
    public function getPieceInfo()
    {
      return $this->PieceInfo;
    }

    /**
     * @param ArrayOfPieceInfo $PieceInfo
     * @return \DHL\Express\Webservice\Tracking\TrackingPieces
     */
    public function setPieceInfo($PieceInfo)
    {
      $this->PieceInfo = $PieceInfo;
      return $this;
    }

}
