<?php

namespace DHL\Express\Webservice;

class ShipmentInfoType
{
    const CURRENCY_EUR = 'EUR';

    /**
     * @var string $DropOffType
     */
    protected $DropOffType = null;

    /**
     * @var RateRequestConfirmed $RateRequestConfirmed
     */
    protected $RateRequestConfirmed = null;

    /**
     * @var string $ServiceType
     */
    protected $ServiceType = null;

    /**
     * @var string $Account
     */
    protected $Account = null;

    /**
     * @var Billing $Billing
     */
    protected $Billing = null;

    /**
     * @var Services $SpecialServices
     */
    protected $SpecialServices = null;

    /**
     * @var string $Currency
     */
    protected $Currency = null;

    /**
     * @var string $UnitOfMeasurement
     */
    protected $UnitOfMeasurement = null;

    /**
     * @var ShipmentIdentificationNumber2 $ShipmentIdentificationNumber
     */
    protected $ShipmentIdentificationNumber = null;

    /**
     * @var PackagesCount $PackagesCount
     */
    protected $PackagesCount = null;

    /**
     * @var SendPackage $SendPackage
     */
    protected $SendPackage = null;

    /**
     * @var LabelType $LabelType
     */
    protected $LabelType = null;

    /**
     * @var LabelTemplate $LabelTemplate
     */
    protected $LabelTemplate = null;

    /**
     * @var boolean $PaperlessTradeEnabled
     */
    protected $PaperlessTradeEnabled = null;

    /**
     * @var base64Binary $PaperlessTradeImage
     */
    protected $PaperlessTradeImage = null;

    /**
     * @param string $DropOffType
     * @param string $ServiceType
     * @param string $Currency
     * @param string $UnitOfMeasurement
     */
    public function __construct($DropOffType, $ServiceType, $Currency, $UnitOfMeasurement)
    {
      $this->DropOffType = $DropOffType;
      $this->ServiceType = $ServiceType;
      $this->Currency = $Currency;
      $this->UnitOfMeasurement = $UnitOfMeasurement;
    }

    /**
     * @return string
     */
    public function getDropOffType()
    {
      return $this->DropOffType;
    }

    /**
     * @param string $DropOffType
     * @return \DHL\Express\Webservice\ShipmentInfoType
     */
    public function setDropOffType($DropOffType)
    {
      $this->DropOffType = $DropOffType;
      return $this;
    }

    /**
     * @return RateRequestConfirmed
     */
    public function getRateRequestConfirmed()
    {
      return $this->RateRequestConfirmed;
    }

    /**
     * @param RateRequestConfirmed $RateRequestConfirmed
     * @return \DHL\Express\Webservice\ShipmentInfoType
     */
    public function setRateRequestConfirmed($RateRequestConfirmed)
    {
      $this->RateRequestConfirmed = $RateRequestConfirmed;
      return $this;
    }

    /**
     * @return string
     */
    public function getServiceType()
    {
      return $this->ServiceType;
    }

    /**
     * @param string $ServiceType
     * @return \DHL\Express\Webservice\ShipmentInfoType
     */
    public function setServiceType($ServiceType)
    {
      $this->ServiceType = $ServiceType;
      return $this;
    }

    /**
     * @return string
     */
    public function getAccount()
    {
      return $this->Account;
    }

    /**
     * @param string $Account
     * @return \DHL\Express\Webservice\ShipmentInfoType
     */
    public function setAccount($Account)
    {
      $this->Account = $Account;
      return $this;
    }

    /**
     * @return Billing
     */
    public function getBilling()
    {
      return $this->Billing;
    }

    /**
     * @param Billing $Billing
     * @return \DHL\Express\Webservice\ShipmentInfoType
     */
    public function setBilling($Billing)
    {
      $this->Billing = $Billing;
      return $this;
    }

    /**
     * @return Services
     */
    public function getSpecialServices()
    {
      return $this->SpecialServices;
    }

    /**
     * @param Services $SpecialServices
     * @return \DHL\Express\Webservice\ShipmentInfoType
     */
    public function setSpecialServices($SpecialServices)
    {
      $this->SpecialServices = $SpecialServices;
      return $this;
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
     * @return \DHL\Express\Webservice\ShipmentInfoType
     */
    public function setCurrency($Currency)
    {
      $this->Currency = $Currency;
      return $this;
    }

    /**
     * @return string
     */
    public function getUnitOfMeasurement()
    {
      return $this->UnitOfMeasurement;
    }

    /**
     * @param string $UnitOfMeasurement
     * @return \DHL\Express\Webservice\ShipmentInfoType
     */
    public function setUnitOfMeasurement($UnitOfMeasurement)
    {
      $this->UnitOfMeasurement = $UnitOfMeasurement;
      return $this;
    }

    /**
     * @return ShipmentIdentificationNumber2
     */
    public function getShipmentIdentificationNumber()
    {
      return $this->ShipmentIdentificationNumber;
    }

    /**
     * @param ShipmentIdentificationNumber2 $ShipmentIdentificationNumber
     * @return \DHL\Express\Webservice\ShipmentInfoType
     */
    public function setShipmentIdentificationNumber($ShipmentIdentificationNumber)
    {
      $this->ShipmentIdentificationNumber = $ShipmentIdentificationNumber;
      return $this;
    }

    /**
     * @return PackagesCount
     */
    public function getPackagesCount()
    {
      return $this->PackagesCount;
    }

    /**
     * @param PackagesCount $PackagesCount
     * @return \DHL\Express\Webservice\ShipmentInfoType
     */
    public function setPackagesCount($PackagesCount)
    {
      $this->PackagesCount = $PackagesCount;
      return $this;
    }

    /**
     * @return SendPackage
     */
    public function getSendPackage()
    {
      return $this->SendPackage;
    }

    /**
     * @param SendPackage $SendPackage
     * @return \DHL\Express\Webservice\ShipmentInfoType
     */
    public function setSendPackage($SendPackage)
    {
      $this->SendPackage = $SendPackage;
      return $this;
    }

    /**
     * @return LabelType
     */
    public function getLabelType()
    {
      return $this->LabelType;
    }

    /**
     * @param LabelType $LabelType
     * @return \DHL\Express\Webservice\ShipmentInfoType
     */
    public function setLabelType($LabelType)
    {
      $this->LabelType = $LabelType;
      return $this;
    }

    /**
     * @return LabelTemplate
     */
    public function getLabelTemplate()
    {
      return $this->LabelTemplate;
    }

    /**
     * @param LabelTemplate $LabelTemplate
     * @return \DHL\Express\Webservice\ShipmentInfoType
     */
    public function setLabelTemplate($LabelTemplate)
    {
      $this->LabelTemplate = $LabelTemplate;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getPaperlessTradeEnabled()
    {
      return $this->PaperlessTradeEnabled;
    }

    /**
     * @param boolean $PaperlessTradeEnabled
     * @return \DHL\Express\Webservice\ShipmentInfoType
     */
    public function setPaperlessTradeEnabled($PaperlessTradeEnabled)
    {
      $this->PaperlessTradeEnabled = $PaperlessTradeEnabled;
      return $this;
    }

    /**
     * @return base64Binary
     */
    public function getPaperlessTradeImage()
    {
      return $this->PaperlessTradeImage;
    }

    /**
     * @param base64Binary $PaperlessTradeImage
     * @return \DHL\Express\Webservice\ShipmentInfoType
     */
    public function setPaperlessTradeImage($PaperlessTradeImage)
    {
      $this->PaperlessTradeImage = $PaperlessTradeImage;
      return $this;
    }

}
