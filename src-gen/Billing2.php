<?php

namespace DHL\Express\Webservice;

class Billing2
{

    /**
     * @var Account2 $ShipperAccountNumber
     */
    protected $ShipperAccountNumber = null;

    /**
     * @var string $ShippingPaymentType
     */
    protected $ShippingPaymentType = null;

    /**
     * @var Account2 $BillingAccountNumber
     */
    protected $BillingAccountNumber = null;

    /**
     * @param Account2 $ShipperAccountNumber
     * @param string $ShippingPaymentType
     */
    public function __construct($ShipperAccountNumber, $ShippingPaymentType)
    {
      $this->ShipperAccountNumber = $ShipperAccountNumber;
      $this->ShippingPaymentType = $ShippingPaymentType;
    }

    /**
     * @return Account2
     */
    public function getShipperAccountNumber()
    {
      return $this->ShipperAccountNumber;
    }

    /**
     * @param Account2 $ShipperAccountNumber
     * @return \DHL\Express\Webservice\Billing2
     */
    public function setShipperAccountNumber($ShipperAccountNumber)
    {
      $this->ShipperAccountNumber = $ShipperAccountNumber;
      return $this;
    }

    /**
     * @return string
     */
    public function getShippingPaymentType()
    {
      return $this->ShippingPaymentType;
    }

    /**
     * @param string $ShippingPaymentType
     * @return \DHL\Express\Webservice\Billing2
     */
    public function setShippingPaymentType($ShippingPaymentType)
    {
      $this->ShippingPaymentType = $ShippingPaymentType;
      return $this;
    }

    /**
     * @return Account2
     */
    public function getBillingAccountNumber()
    {
      return $this->BillingAccountNumber;
    }

    /**
     * @param Account2 $BillingAccountNumber
     * @return \DHL\Express\Webservice\Billing2
     */
    public function setBillingAccountNumber($BillingAccountNumber)
    {
      $this->BillingAccountNumber = $BillingAccountNumber;
      return $this;
    }

}
