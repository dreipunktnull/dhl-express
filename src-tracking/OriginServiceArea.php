<?php

namespace DHL\Express\Webservice\Tracking;

class OriginServiceArea
{

    /**
     * @var ServiceAreaCode $ServiceAreaCode
     */
    protected $ServiceAreaCode = null;

    /**
     * @var string $Description
     */
    protected $Description = null;

    /**
     * @var OutboundSortCode $OutboundSortCode
     */
    protected $OutboundSortCode = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ServiceAreaCode
     */
    public function getServiceAreaCode()
    {
      return $this->ServiceAreaCode;
    }

    /**
     * @param ServiceAreaCode $ServiceAreaCode
     * @return \DHL\Express\Webservice\Tracking\OriginServiceArea
     */
    public function setServiceAreaCode($ServiceAreaCode)
    {
      $this->ServiceAreaCode = $ServiceAreaCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
      return $this->Description;
    }

    /**
     * @param string $Description
     * @return \DHL\Express\Webservice\Tracking\OriginServiceArea
     */
    public function setDescription($Description)
    {
      $this->Description = $Description;
      return $this;
    }

    /**
     * @return OutboundSortCode
     */
    public function getOutboundSortCode()
    {
      return $this->OutboundSortCode;
    }

    /**
     * @param OutboundSortCode $OutboundSortCode
     * @return \DHL\Express\Webservice\Tracking\OriginServiceArea
     */
    public function setOutboundSortCode($OutboundSortCode)
    {
      $this->OutboundSortCode = $OutboundSortCode;
      return $this;
    }

}
