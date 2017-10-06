<?php

namespace DHL\Express\Webservice;

class AddressType
{
    /**
     * @var string $StreetLines
     */
    protected $StreetLines = null;

    /**
     * @var string $StreetName
     */
    protected $StreetName = null;

    /**
     * @var string $StreetNumber
     */
    protected $StreetNumber = null;

    /**
     * @var string $StreetLines2
     */
    protected $StreetLines2 = null;

    /**
     * @var string $StreetLines3
     */
    protected $StreetLines3 = null;

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
     * @param string $StreetLines
     * @param string $City
     * @param string $PostalCode
     * @param string $CountryCode
     */
    public function __construct($StreetLines, $City, $PostalCode, $CountryCode)
    {
        $this->StreetLines = $StreetLines;
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
     * @return \DHL\Express\Webservice\AddressType
     */
    public function setStreetLines($StreetLines)
    {
        $this->StreetLines = $StreetLines;
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
     * @return \DHL\Express\Webservice\AddressType
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
     * @return \DHL\Express\Webservice\AddressType
     */
    public function setStreetNumber($StreetNumber)
    {
        $this->StreetNumber = $StreetNumber;
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
     * @return \DHL\Express\Webservice\AddressType
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
     * @return \DHL\Express\Webservice\AddressType
     */
    public function setStreetLines3($StreetLines3)
    {
        $this->StreetLines3 = $StreetLines3;
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
     * @return \DHL\Express\Webservice\AddressType
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
     * @return \DHL\Express\Webservice\AddressType
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
     * @return \DHL\Express\Webservice\AddressType
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
     * @return \DHL\Express\Webservice\AddressType
     */
    public function setCountryCode($CountryCode)
    {
        $this->CountryCode = $CountryCode;
        return $this;
    }
}
