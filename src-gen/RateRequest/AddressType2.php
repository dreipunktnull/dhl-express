<?php

namespace DHL\Express\Webservice\RateRequest;

class AddressType2
{
    /**
     * @var string $StreetLines
     */
    protected $StreetLines = null;

    /**
     * @var string $StreetLines2
     */
    protected $StreetLines2 = null;

    /**
     * @var string $StreetLines3
     */
    protected $StreetLines3 = null;

    /**
     * @var string $StreetName
     */
    protected $StreetName = null;

    /**
     * @var string $StreetNumber
     */
    protected $StreetNumber = null;

    /**
     * @var string $City
     */
    protected $City = null;

    /**
     * @var string $StateOrProvinceCode
     */
    protected $StateOrProvinceCode = null;

    /**
     * @var string $PostalCode
     */
    protected $PostalCode = null;

    /**
     * @var string $CountryCode
     */
    protected $CountryCode = null;

    /**
     * @param string $City
     * @param string $PostalCode
     * @param string $CountryCode
     */
    public function __construct($City, $PostalCode, $CountryCode)
    {
        $this->City = $City;
        $this->PostalCode = $PostalCode;
        $this->CountryCode = $CountryCode;
    }

    /**
     * @return string
     */
    public function getStreetLines()
    {
        return $this->StreetLines;
    }

    /**
     * @param string $StreetLines
     * @return AddressType2
     */
    public function setStreetLines($StreetLines)
    {
        $this->StreetLines = $StreetLines;
        return $this;
    }

    /**
     * @return string
     */
    public function getStreetLines2()
    {
        return $this->StreetLines2;
    }

    /**
     * @param string $StreetLines2
     * @return AddressType2
     */
    public function setStreetLines2($StreetLines2)
    {
        $this->StreetLines2 = $StreetLines2;
        return $this;
    }

    /**
     * @return string
     */
    public function getStreetLines3()
    {
        return $this->StreetLines3;
    }

    /**
     * @param string $StreetLines3
     * @return AddressType2
     */
    public function setStreetLines3($StreetLines3)
    {
        $this->StreetLines3 = $StreetLines3;
        return $this;
    }

    /**
     * @return string
     */
    public function getStreetName()
    {
        return $this->StreetName;
    }

    /**
     * @param string $StreetName
     * @return AddressType2
     */
    public function setStreetName($StreetName)
    {
        $this->StreetName = $StreetName;
        return $this;
    }

    /**
     * @return string
     */
    public function getStreetNumber()
    {
        return $this->StreetNumber;
    }

    /**
     * @param string $StreetNumber
     * @return AddressType2
     */
    public function setStreetNumber($StreetNumber)
    {
        $this->StreetNumber = $StreetNumber;
        return $this;
    }

    /**
     * @return string
     */
    public function getCity()
    {
        return $this->City;
    }

    /**
     * @param string $City
     * @return AddressType2
     */
    public function setCity($City)
    {
        $this->City = $City;
        return $this;
    }

    /**
     * @return string
     */
    public function getStateOrProvinceCode()
    {
        return $this->StateOrProvinceCode;
    }

    /**
     * @param string $StateOrProvinceCode
     * @return AddressType2
     */
    public function setStateOrProvinceCode($StateOrProvinceCode)
    {
        $this->StateOrProvinceCode = $StateOrProvinceCode;
        return $this;
    }

    /**
     * @return string
     */
    public function getPostalCode()
    {
        return $this->PostalCode;
    }

    /**
     * @param string $PostalCode
     * @return AddressType2
     */
    public function setPostalCode($PostalCode)
    {
        $this->PostalCode = $PostalCode;
        return $this;
    }

    /**
     * @return string
     */
    public function getCountryCode()
    {
        return $this->CountryCode;
    }

    /**
     * @param string $CountryCode
     * @return AddressType2
     */
    public function setCountryCode($CountryCode)
    {
        $this->CountryCode = $CountryCode;
        return $this;
    }
}
