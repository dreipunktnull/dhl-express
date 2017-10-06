<?php

namespace DHL\Express\Webservice;

class docTypeRef_ClientDetailType3
{

    /**
     * @var sso2 $sso
     */
    protected $sso = null;

    /**
     * @var plant2 $plant
     */
    protected $plant = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return sso2
     */
    public function getSso()
    {
      return $this->sso;
    }

    /**
     * @param sso2 $sso
     * @return \DHL\Express\Webservice\docTypeRef_ClientDetailType3
     */
    public function setSso($sso)
    {
      $this->sso = $sso;
      return $this;
    }

    /**
     * @return plant2
     */
    public function getPlant()
    {
      return $this->plant;
    }

    /**
     * @param plant2 $plant
     * @return \DHL\Express\Webservice\docTypeRef_ClientDetailType3
     */
    public function setPlant($plant)
    {
      $this->plant = $plant;
      return $this;
    }

}
