<?php

namespace DHL\Express\Webservice;

class RequestedShipmentType
{

    /**
     * @var ShipmentInfoType $ShipmentInfo
     */
    protected $ShipmentInfo = null;

    /**
     * @var string $ShipTimestamp
     */
    protected $ShipTimestamp = null;

    /**
     * @var PickupCutOffTime $PickupCutOffTime
     */
    protected $PickupCutOffTime = null;

    /**
     * @var PickupLocationCloseTime $PickupLocationCloseTime
     */
    protected $PickupLocationCloseTime = null;

    /**
     * @var string $SpecialPickupInstruction
     */
    protected $SpecialPickupInstruction = null;

    /**
     * @var PickupLocation $PickupLocation
     */
    protected $PickupLocation = null;

    /**
     * @var string $PaymentInfo
     */
    protected $PaymentInfo = null;

    /**
     * @var InternationDetailType $InternationalDetail
     */
    protected $InternationalDetail = null;

    /**
     * @var ShipType $Ship
     */
    protected $Ship = null;

    /**
     * @var docTypeRef_PackagesType $Packages
     */
    protected $Packages = null;

    /**
     * @var DangerousGoods $DangerousGoods
     */
    protected $DangerousGoods = null;

    /**
     * @var ManifestBypass $ManifestBypass
     */
    protected $ManifestBypass = null;

    /**
     * @param ShipmentInfoType $ShipmentInfo
     * @param string $ShipTimestamp
     * @param string $PaymentInfo
     * @param InternationDetailType $InternationalDetail
     * @param ShipType $Ship
     * @param docTypeRef_PackagesType $Packages
     */
    public function __construct($ShipmentInfo, $ShipTimestamp, $PaymentInfo, $InternationalDetail, $Ship, $Packages)
    {
      $this->ShipmentInfo = $ShipmentInfo;
      $this->ShipTimestamp = $ShipTimestamp;
      $this->PaymentInfo = $PaymentInfo;
      $this->InternationalDetail = $InternationalDetail;
      $this->Ship = $Ship;
      $this->Packages = $Packages;
    }

    /**
     * @return ShipmentInfoType
     */
    public function getShipmentInfo()
    {
      return $this->ShipmentInfo;
    }

    /**
     * @param ShipmentInfoType $ShipmentInfo
     * @return \DHL\Express\Webservice\RequestedShipmentType
     */
    public function setShipmentInfo($ShipmentInfo)
    {
      $this->ShipmentInfo = $ShipmentInfo;
      return $this;
    }

    /**
     * @return string
     */
    public function getShipTimestamp()
    {
      return $this->ShipTimestamp;
    }

    /**
     * @param string $ShipTimestamp
     * @return \DHL\Express\Webservice\RequestedShipmentType
     */
    public function setShipTimestamp($ShipTimestamp)
    {
      $this->ShipTimestamp = $ShipTimestamp;
      return $this;
    }

    /**
     * @return PickupCutOffTime
     */
    public function getPickupCutOffTime()
    {
      return $this->PickupCutOffTime;
    }

    /**
     * @param PickupCutOffTime $PickupCutOffTime
     * @return \DHL\Express\Webservice\RequestedShipmentType
     */
    public function setPickupCutOffTime($PickupCutOffTime)
    {
      $this->PickupCutOffTime = $PickupCutOffTime;
      return $this;
    }

    /**
     * @return PickupLocationCloseTime
     */
    public function getPickupLocationCloseTime()
    {
      return $this->PickupLocationCloseTime;
    }

    /**
     * @param PickupLocationCloseTime $PickupLocationCloseTime
     * @return \DHL\Express\Webservice\RequestedShipmentType
     */
    public function setPickupLocationCloseTime($PickupLocationCloseTime)
    {
      $this->PickupLocationCloseTime = $PickupLocationCloseTime;
      return $this;
    }

    /**
     * @return string
     */
    public function getSpecialPickupInstruction()
    {
      return $this->SpecialPickupInstruction;
    }

    /**
     * @param string $SpecialPickupInstruction
     * @return \DHL\Express\Webservice\RequestedShipmentType
     */
    public function setSpecialPickupInstruction($SpecialPickupInstruction)
    {
      $this->SpecialPickupInstruction = $SpecialPickupInstruction;
      return $this;
    }

    /**
     * @return PickupLocation
     */
    public function getPickupLocation()
    {
      return $this->PickupLocation;
    }

    /**
     * @param PickupLocation $PickupLocation
     * @return \DHL\Express\Webservice\RequestedShipmentType
     */
    public function setPickupLocation($PickupLocation)
    {
      $this->PickupLocation = $PickupLocation;
      return $this;
    }

    /**
     * @return string
     */
    public function getPaymentInfo()
    {
      return $this->PaymentInfo;
    }

    /**
     * @param string $PaymentInfo
     * @return \DHL\Express\Webservice\RequestedShipmentType
     */
    public function setPaymentInfo($PaymentInfo)
    {
      $this->PaymentInfo = $PaymentInfo;
      return $this;
    }

    /**
     * @return InternationDetailType
     */
    public function getInternationalDetail()
    {
      return $this->InternationalDetail;
    }

    /**
     * @param InternationDetailType $InternationalDetail
     * @return \DHL\Express\Webservice\RequestedShipmentType
     */
    public function setInternationalDetail($InternationalDetail)
    {
      $this->InternationalDetail = $InternationalDetail;
      return $this;
    }

    /**
     * @return ShipType
     */
    public function getShip()
    {
      return $this->Ship;
    }

    /**
     * @param ShipType $Ship
     * @return \DHL\Express\Webservice\RequestedShipmentType
     */
    public function setShip($Ship)
    {
      $this->Ship = $Ship;
      return $this;
    }

    /**
     * @return docTypeRef_PackagesType
     */
    public function getPackages()
    {
      return $this->Packages;
    }

    /**
     * @param docTypeRef_PackagesType $Packages
     * @return \DHL\Express\Webservice\RequestedShipmentType
     */
    public function setPackages($Packages)
    {
      $this->Packages = $Packages;
      return $this;
    }

    /**
     * @return DangerousGoods
     */
    public function getDangerousGoods()
    {
      return $this->DangerousGoods;
    }

    /**
     * @param DangerousGoods $DangerousGoods
     * @return \DHL\Express\Webservice\RequestedShipmentType
     */
    public function setDangerousGoods($DangerousGoods)
    {
      $this->DangerousGoods = $DangerousGoods;
      return $this;
    }

    /**
     * @return ManifestBypass
     */
    public function getManifestBypass()
    {
      return $this->ManifestBypass;
    }

    /**
     * @param ManifestBypass $ManifestBypass
     * @return \DHL\Express\Webservice\RequestedShipmentType
     */
    public function setManifestBypass($ManifestBypass)
    {
      $this->ManifestBypass = $ManifestBypass;
      return $this;
    }

}
