<?php

namespace DHL\Express\Webservice\DeleteShipment;

use DHL\Express\Webservice\docTypeRef_ClientDetailType;

class DeleteRequestType
{
    const REASON_PACKAGE_NOT_READY = '001';
    const REASON_RATES_TOO_HIGH = '002';
    const REASON_TRANSIT_TIME_TOO_SLOW = '003';
    const REASON_TAKE_TO_SERVICE_CENTER_OR_DROP_BOX = '004';
    const REASON_COMMITMENT_TIME_NOT_MET = '005';
    const REASON_REASON_NOT_GIVEN = '006';
    const REASON_OTHER = '007';
    const REASON_PICKUP_MODIFIED = '008';

    /**
     * @var docTypeRef_ClientDetailType $ClientDetail
     */
    protected $ClientDetail = null;

    /**
     * @var string $PickupDate
     */
    protected $PickupDate = null;

    /**
     * @var string $PickupCountry
     */
    protected $PickupCountry = null;

    /**
     * @var string $DispatchConfirmationNumber
     */
    protected $DispatchConfirmationNumber = null;

    /**
     * @var string $RequestorName
     */
    protected $RequestorName = null;

    /**
     * @var string $Reason
     */
    protected $Reason = null;

    /**
     * @param string $PickupDate Pickup date in 'Y-m-d' format.
     * @param string $PickupCountry
     * @param string $DispatchConfirmationNumber
     * @param string $RequestorName
     */
    public function __construct($PickupDate, $PickupCountry, $DispatchConfirmationNumber, $RequestorName)
    {
        $this->PickupDate = $PickupDate;
        $this->PickupCountry = $PickupCountry;
        $this->DispatchConfirmationNumber = $DispatchConfirmationNumber;
        $this->RequestorName = $RequestorName;
    }

    /**
     * @return docTypeRef_ClientDetailType
     */
    public function getClientDetail()
    {
        return $this->ClientDetail;
    }

    /**
     * @param docTypeRef_ClientDetailType $ClientDetail
     * @return DeleteRequestType
     */
    public function setClientDetail($ClientDetail)
    {
        $this->ClientDetail = $ClientDetail;
        return $this;
    }

    /**
     * @return string
     */
    public function getPickupDate()
    {
        return $this->PickupDate;
    }

    /**
     * @param string $PickupDate
     * @return DeleteRequestType
     */
    public function setPickupDate($PickupDate)
    {
        $this->PickupDate = $PickupDate;
        return $this;
    }

    /**
     * @return string
     */
    public function getPickupCountry()
    {
        return $this->PickupCountry;
    }

    /**
     * @param string $PickupCountry
     * @return DeleteRequestType
     */
    public function setPickupCountry($PickupCountry)
    {
        $this->PickupCountry = $PickupCountry;
        return $this;
    }

    /**
     * @return string
     */
    public function getDispatchConfirmationNumber()
    {
        return $this->DispatchConfirmationNumber;
    }

    /**
     * @param string $DispatchConfirmationNumber
     * @return DeleteRequestType
     */
    public function setDispatchConfirmationNumber($DispatchConfirmationNumber)
    {
        $this->DispatchConfirmationNumber = $DispatchConfirmationNumber;
        return $this;
    }

    /**
     * @return string
     */
    public function getRequestorName()
    {
        return $this->RequestorName;
    }

    /**
     * @param string $RequestorName
     * @return DeleteRequestType
     */
    public function setRequestorName($RequestorName)
    {
        $this->RequestorName = $RequestorName;
        return $this;
    }

    /**
     * @return string
     */
    public function getReason()
    {
        return $this->Reason;
    }

    /**
     * @param string $Reason
     * @return DeleteRequestType
     */
    public function setReason($Reason)
    {
        $this->Reason = $Reason;
        return $this;
    }
}
