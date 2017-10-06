<?php

namespace DHL\Express\Webservice\Tracking;

class Reference
{

    /**
     * @var ReferenceID $ReferenceID
     */
    protected $ReferenceID = null;

    /**
     * @var ReferenceType $ReferenceType
     */
    protected $ReferenceType = null;

    /**
     * @param ReferenceID $ReferenceID
     */
    public function __construct($ReferenceID)
    {
      $this->ReferenceID = $ReferenceID;
    }

    /**
     * @return ReferenceID
     */
    public function getReferenceID()
    {
      return $this->ReferenceID;
    }

    /**
     * @param ReferenceID $ReferenceID
     * @return \DHL\Express\Webservice\Tracking\Reference
     */
    public function setReferenceID($ReferenceID)
    {
      $this->ReferenceID = $ReferenceID;
      return $this;
    }

    /**
     * @return ReferenceType
     */
    public function getReferenceType()
    {
      return $this->ReferenceType;
    }

    /**
     * @param ReferenceType $ReferenceType
     * @return \DHL\Express\Webservice\Tracking\Reference
     */
    public function setReferenceType($ReferenceType)
    {
      $this->ReferenceType = $ReferenceType;
      return $this;
    }

}
