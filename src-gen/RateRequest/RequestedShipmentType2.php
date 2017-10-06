<?php

namespace DHL\Express\Webservice\RateRequest;

use DHL\Express\Webservice\Billing2;
use DHL\Express\Webservice\Content2;
use DHL\Express\Webservice\ShipType2;
use DHL\Express\Webservice\NextBusinessDay2;
use DHL\Express\Webservice\PaymentInfo2;
use DHL\Express\Webservice\Services2;

class RequestedShipmentType2
{
    /**
     * @var string $DropOffType
     */
    protected $DropOffType = null;

    /**
     * @var NextBusinessDay2 $NextBusinessDay
     */
    protected $NextBusinessDay = null;

    /**
     * @var ShipType2 $Ship
     */
    protected $Ship = null;

    /**
     * @var PackagesType2 $Packages
     */
    protected $Packages = null;

    /**
     * @var ShipTimestamp2 $ShipTimestamp
     */
    protected $ShipTimestamp = null;

    /**
     * @var string $UnitOfMeasurement
     */
    protected $UnitOfMeasurement = null;

    /**
     * @var Content2 $Content
     */
    protected $Content = null;

    /**
     * @var DeclaredValue $DeclaredValue
     */
    protected $DeclaredValue = null;

    /**
     * @var DeclaredValueCurrencyCode $DeclaredValueCurrencyCode
     */
    protected $DeclaredValueCurrencyCode = null;

    /**
     * @var PaymentInfo2 $PaymentInfo
     */
    protected $PaymentInfo = null;

    /**
     * @var string $Account
     */
    protected $Account = null;

    /**
     * @var Billing2 $Billing
     */
    protected $Billing = null;

    /**
     * @var Services2 $SpecialServices
     */
    protected $SpecialServices = null;

    /**
     * @var RequestValueAddedServices $RequestValueAddedServices
     */
    protected $RequestValueAddedServices = null;

    /**
     *
     * ShipTimestamp:
     * Identifies the date and time the package is tendered. Both the date and time portions of the string are expected to be used. The date should not be a past date or a date more than 10 days in the future. The time is the local time of the shipment based on the shipper's time zone. The date component must be in the format: YYYY-MM-DD; the time component must be in the format: HH:MM:SS using a 24 hour clock. The date and time parts are separated by the letter T (e.g. 2006-06-26T17:00:00 GMT+01:00).
     *
     * UnitOfMeasurement:
     * SI=the preferred system of weights and measures for Italian trade and commerce; SU=the preferred system of weights and measures for U.S. trade and commerce; Weight unit: if Type is SI it can be KG (kilograms), if Type is SU it can be LB (pounds). Dimention unit: if Type is SI it can be CM, if Type is SU it can be IN (inch)
     *
     * @param string $DropOffType (see: DropOffType2)
     * @param ShipType2 $Ship
     * @param PackagesType2 $Packages
     * @param string $ShipTimestamp
     * @param string $UnitOfMeasurement
     */
    public function __construct($DropOffType, $Ship, $Packages, $ShipTimestamp, $UnitOfMeasurement)
    {
        $this->DropOffType = $DropOffType;
        $this->Ship = $Ship;
        $this->Packages = $Packages;
        $this->ShipTimestamp = $ShipTimestamp;
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
     * @return RequestedShipmentType2
     */
    public function setDropOffType($DropOffType)
    {
        $this->DropOffType = $DropOffType;
        return $this;
    }

    /**
     * @return NextBusinessDay2
     */
    public function getNextBusinessDay()
    {
        return $this->NextBusinessDay;
    }

    /**
     * @param NextBusinessDay2 $NextBusinessDay
     * @return RequestedShipmentType2
     */
    public function setNextBusinessDay($NextBusinessDay)
    {
        $this->NextBusinessDay = $NextBusinessDay;
        return $this;
    }

    /**
     * @return ShipType2
     */
    public function getShip()
    {
        return $this->Ship;
    }

    /**
     * @param ShipType2 $Ship
     * @return RequestedShipmentType2
     */
    public function setShip($Ship)
    {
        $this->Ship = $Ship;
        return $this;
    }

    /**
     * @return PackagesType2
     */
    public function getPackages()
    {
        return $this->Packages;
    }

    /**
     * @param PackagesType2 $Packages
     * @return RequestedShipmentType2
     */
    public function setPackages($Packages)
    {
        $this->Packages = $Packages;
        return $this;
    }

    /**
     * @return ShipTimestamp2
     */
    public function getShipTimestamp()
    {
        return $this->ShipTimestamp;
    }

    /**
     * @param ShipTimestamp2 $ShipTimestamp
     * @return RequestedShipmentType2
     */
    public function setShipTimestamp($ShipTimestamp)
    {
        $this->ShipTimestamp = $ShipTimestamp;
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
     * @return RequestedShipmentType2
     */
    public function setUnitOfMeasurement($UnitOfMeasurement)
    {
        $this->UnitOfMeasurement = $UnitOfMeasurement;
        return $this;
    }

    /**
     * @return Content2
     */
    public function getContent()
    {
        return $this->Content;
    }

    /**
     * @param Content2 $Content
     * @return RequestedShipmentType2
     */
    public function setContent($Content)
    {
        $this->Content = $Content;
        return $this;
    }

    /**
     * @return DeclaredValue
     */
    public function getDeclaredValue()
    {
        return $this->DeclaredValue;
    }

    /**
     * @param DeclaredValue $DeclaredValue
     * @return RequestedShipmentType2
     */
    public function setDeclaredValue($DeclaredValue)
    {
        $this->DeclaredValue = $DeclaredValue;
        return $this;
    }

    /**
     * @return DeclaredValueCurrencyCode
     */
    public function getDeclaredValueCurrencyCode()
    {
        return $this->DeclaredValueCurrencyCode;
    }

    /**
     * @param DeclaredValueCurrencyCode $DeclaredValueCurrencyCode
     * @return RequestedShipmentType2
     */
    public function setDeclaredValueCurrencyCode($DeclaredValueCurrencyCode)
    {
        $this->DeclaredValueCurrencyCode = $DeclaredValueCurrencyCode;
        return $this;
    }

    /**
     * @return PaymentInfo2
     */
    public function getPaymentInfo()
    {
        return $this->PaymentInfo;
    }

    /**
     * @param PaymentInfo2 $PaymentInfo
     * @return RequestedShipmentType2
     */
    public function setPaymentInfo($PaymentInfo)
    {
        $this->PaymentInfo = $PaymentInfo;
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
     * @param string $Account Account number
     * @return RequestedShipmentType2
     */
    public function setAccount($Account)
    {
        $this->Account = $Account;
        return $this;
    }

    /**
     * @return Billing2
     */
    public function getBilling()
    {
        return $this->Billing;
    }

    /**
     * @param Billing2 $Billing
     * @return RequestedShipmentType2
     */
    public function setBilling($Billing)
    {
        $this->Billing = $Billing;
        return $this;
    }

    /**
     * @return Services2
     */
    public function getSpecialServices()
    {
        return $this->SpecialServices;
    }

    /**
     * @param Services2 $SpecialServices
     * @return RequestedShipmentType2
     */
    public function setSpecialServices($SpecialServices)
    {
        $this->SpecialServices = $SpecialServices;
        return $this;
    }

    /**
     * @return RequestValueAddedServices
     */
    public function getRequestValueAddedServices()
    {
        return $this->RequestValueAddedServices;
    }

    /**
     * @param RequestValueAddedServices $RequestValueAddedServices
     * @return RequestedShipmentType2
     */
    public function setRequestValueAddedServices($RequestValueAddedServices)
    {
        $this->RequestValueAddedServices = $RequestValueAddedServices;
        return $this;
    }

}
