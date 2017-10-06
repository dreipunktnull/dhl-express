<?php

namespace DHL\Express\Webservice;

class Services
{

    /**
     * @var Service[] $Service
     */
    protected $Service = null;

    /**
     * @param Service[] $Service
     */
    public function __construct(array $Service)
    {
      $this->Service = $Service;
    }

    /**
     * @return Service[]
     */
    public function getService()
    {
      return $this->Service;
    }

    /**
     * @param Service[] $Service
     * @return \DHL\Express\Webservice\Services
     */
    public function setService(array $Service)
    {
      $this->Service = $Service;
      return $this;
    }

}
