<?php

namespace DHL\Express\Webservice;

class docTypeRef_PackagesType
{

    /**
     * @var docTypeRef_RequestedPackagesType $RequestedPackages
     */
    protected $RequestedPackages = null;

    /**
     * @param docTypeRef_RequestedPackagesType $RequestedPackages
     */
    public function __construct($RequestedPackages)
    {
      $this->RequestedPackages = $RequestedPackages;
    }

    /**
     * @return docTypeRef_RequestedPackagesType
     */
    public function getRequestedPackages()
    {
      return $this->RequestedPackages;
    }

    /**
     * @param docTypeRef_RequestedPackagesType $RequestedPackages
     * @return \DHL\Express\Webservice\docTypeRef_PackagesType
     */
    public function setRequestedPackages($RequestedPackages)
    {
      $this->RequestedPackages = $RequestedPackages;
      return $this;
    }

}
