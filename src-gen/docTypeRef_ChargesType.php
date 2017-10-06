<?php

namespace DHL\Express\Webservice;

class docTypeRef_ChargesType
{

    /**
     * @var string $Currency
     */
    protected $Currency = null;

    /**
     * @var docTypeRef_ChargeType[] $Charge
     */
    protected $Charge = null;

    /**
     * @param string $Currency
     * @param docTypeRef_ChargeType[] $Charge
     */
    public function __construct($Currency, array $Charge)
    {
      $this->Currency = $Currency;
      $this->Charge = $Charge;
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
     * @return \DHL\Express\Webservice\docTypeRef_ChargesType
     */
    public function setCurrency($Currency)
    {
      $this->Currency = $Currency;
      return $this;
    }

    /**
     * @return docTypeRef_ChargeType[]
     */
    public function getCharge()
    {
      return $this->Charge;
    }

    /**
     * @param docTypeRef_ChargeType[] $Charge
     * @return \DHL\Express\Webservice\docTypeRef_ChargesType
     */
    public function setCharge(array $Charge)
    {
      $this->Charge = $Charge;
      return $this;
    }

}
