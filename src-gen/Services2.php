<?php

namespace DHL\Express\Webservice;

class Services2
{
    /**
     * @var Service2[] $Service
     */
    protected $Service = null;

    /**
     * @param Service2[] $Service
     */
    public function __construct(array $Service)
    {
      $this->Service = $Service;
    }

    /**
     * @return Service2[]
     */
    public function getService()
    {
      return $this->Service;
    }

    /**
     * @param Service2[] $Service
     * @return \DHL\Express\Webservice\Services2
     */
    public function setService(array $Service)
    {
      $this->Service = $Service;
      return $this;
    }

}
