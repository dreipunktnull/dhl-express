<?php

namespace DHL\Express\Webservice;

class TotalNetType
{
    /**
     * @var string $Currency
     */
    protected $Currency = null;

    /**
     * @var string $Amount
     */
    protected $Amount = null;

    /**
     * @param string $Currency
     * @param string $Amount
     */
    public function __construct($Currency, $Amount)
    {
      $this->Currency = $Currency;
      $this->Amount = $Amount;
    }

    /**
     * @return string
     */
    public function getCurrency()
    {
      return $this->Currency;
    }

    /**
     * @param string $Currency
     * @return \DHL\Express\Webservice\TotalNetType
     */
    public function setCurrency($Currency)
    {
      $this->Currency = $Currency;
      return $this;
    }

    /**
     * @return string
     */
    public function getAmount()
    {
      return $this->Amount;
    }

    /**
     * @param string $Amount
     * @return \DHL\Express\Webservice\TotalNetType
     */
    public function setAmount($Amount)
    {
      $this->Amount = $Amount;
      return $this;
    }

}
