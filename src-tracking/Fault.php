<?php

namespace DHL\Express\Webservice\Tracking;

class Fault
{

    /**
     * @var ArrayOfPieceFault $PieceFault
     */
    protected $PieceFault = null;

    /**
     * @param ArrayOfPieceFault $PieceFault
     */
    public function __construct($PieceFault)
    {
      $this->PieceFault = $PieceFault;
    }

    /**
     * @return ArrayOfPieceFault
     */
    public function getPieceFault()
    {
      return $this->PieceFault;
    }

    /**
     * @param ArrayOfPieceFault $PieceFault
     * @return \DHL\Express\Webservice\Tracking\Fault
     */
    public function setPieceFault($PieceFault)
    {
      $this->PieceFault = $PieceFault;
      return $this;
    }

}
