<?php

namespace DHL\Express\Webservice\Tracking;

class Status
{

    /**
     * @var string $ActionStatus
     */
    protected $ActionStatus = null;

    /**
     * @var ArrayOfCondition $Condition
     */
    protected $Condition = null;

    /**
     * @param string $ActionStatus
     */
    public function __construct($ActionStatus)
    {
      $this->ActionStatus = $ActionStatus;
    }

    /**
     * @return string
     */
    public function getActionStatus()
    {
      return $this->ActionStatus;
    }

    /**
     * @param string $ActionStatus
     * @return \DHL\Express\Webservice\Tracking\Status
     */
    public function setActionStatus($ActionStatus)
    {
      $this->ActionStatus = $ActionStatus;
      return $this;
    }

    /**
     * @return ArrayOfCondition
     */
    public function getCondition()
    {
      return $this->Condition;
    }

    /**
     * @param ArrayOfCondition $Condition
     * @return \DHL\Express\Webservice\Tracking\Status
     */
    public function setCondition($Condition)
    {
      $this->Condition = $Condition;
      return $this;
    }

}
