<?php

namespace DHL\Express\Webservice\Tracking;

class ShipperReference
{

    /**
     * @var string $ReferenceID
     */
    protected $ReferenceID = null;

    /**
     * @var string $ReferenceType
     */
    protected $ReferenceType = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getReferenceID()
    {
      return $this->ReferenceID;
    }

    /**
     * @param string $ReferenceID
     * @return \DHL\Express\Webservice\Tracking\ShipperReference
     */
    public function setReferenceID($ReferenceID)
    {
      $this->ReferenceID = $ReferenceID;
      return $this;
    }

    /**
     * @return string
     */
    public function getReferenceType()
    {
      return $this->ReferenceType;
    }

    /**
     * @param string $ReferenceType
     * @return \DHL\Express\Webservice\Tracking\ShipperReference
     */
    public function setReferenceType($ReferenceType)
    {
      $this->ReferenceType = $ReferenceType;
      return $this;
    }

}
