<?php

namespace DHL\Express\Webservice;

class RateResponseType
{

    /**
     * @var ProviderType[] $Provider
     */
    protected $Provider = null;


    public function __construct()
    {

    }

    /**
     * @return ProviderType[]
     */
    public function getProvider()
    {
        return $this->Provider;
    }

    /**
     * @param ProviderType[] $Provider
     * @return \DHL\Express\Webservice\RateResponseType
     */
    public function setProvider(array $Provider = null)
    {
        $this->Provider = $Provider;
        return $this;
    }
}
