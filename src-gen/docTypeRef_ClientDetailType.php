<?php

namespace DHL\Express\Webservice;

class docTypeRef_ClientDetailType
{

    /**
     * @var sso $sso
     */
    protected $sso = null;

    /**
     * @var plant $plant
     */
    protected $plant = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return sso
     */
    public function getSso()
    {
      return $this->sso;
    }

    /**
     * @param sso $sso
     * @return \DHL\Express\Webservice\docTypeRef_ClientDetailType
     */
    public function setSso($sso)
    {
      $this->sso = $sso;
      return $this;
    }

    /**
     * @return plant
     */
    public function getPlant()
    {
      return $this->plant;
    }

    /**
     * @param plant $plant
     * @return \DHL\Express\Webservice\docTypeRef_ClientDetailType
     */
    public function setPlant($plant)
    {
      $this->plant = $plant;
      return $this;
    }

}
