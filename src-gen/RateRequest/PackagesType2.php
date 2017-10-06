<?php

namespace DHL\Express\Webservice\RateRequest;

class PackagesType2
{

    /**
     * @var RequestedPackagesType2[] $RequestedPackages
     */
    protected $RequestedPackages = null;

    /**
     * @param RequestedPackagesType2[] $RequestedPackages
     */
    public function __construct(array $RequestedPackages)
    {
        $this->RequestedPackages = $RequestedPackages;
    }

    /**
     * @return RequestedPackagesType2[]
     */
    public function getRequestedPackages()
    {
        return $this->RequestedPackages;
    }

    /**
     * @param RequestedPackagesType2[] $RequestedPackages
     * @return PackagesType2
     */
    public function setRequestedPackages(array $RequestedPackages)
    {
        $this->RequestedPackages = $RequestedPackages;
        return $this;
    }
}
