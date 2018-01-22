<?php

namespace DHL\Express\Webservice;

class docTypeRef_RequestedPackagesType
{
    /**
     * @var InsuredValue $InsuredValue
     */
    protected $InsuredValue = null;

    /**
     * @var string $Weight
     */
    protected $Weight = null;

    /**
     * @var docTypeRef_DimensionsType $Dimensions
     */
    protected $Dimensions = null;

    /**
     * @var string $CustomerReferences
     */
    protected $CustomerReferences = null;

    /**
     * @var string $number
     */
    protected $number = null;

    /**
     * @var null|string
     */
    protected $PackageContentDescription = null;

    /**
     * @param string $Weight
     * @param docTypeRef_DimensionsType $Dimensions
     * @param string $CustomerReferences
     * @param string $number
     * @param string $PackageContentDescription
     */
    public function __construct($Weight, $Dimensions, $CustomerReferences, $number, $PackageContentDescription = null)
    {
      $this->Weight = $Weight;
      $this->Dimensions = $Dimensions;
      $this->CustomerReferences = $CustomerReferences;
      $this->number = $number;
      $this->PackageContentDescription = $PackageContentDescription;
    }

    /**
     * @return InsuredValue
     */
    public function getInsuredValue()
    {
        return $this->InsuredValue;
    }

    /**
     * @param InsuredValue $InsuredValue
     * @return \DHL\Express\Webservice\docTypeRef_RequestedPackagesType
     */
    public function setInsuredValue($InsuredValue)
    {
      $this->InsuredValue = $InsuredValue;
      return $this;
    }

    /**
     * @return Weight
     */
    public function getWeight()
    {
      return $this->Weight;
    }

    /**
     * @param string $Weight
     * @return \DHL\Express\Webservice\docTypeRef_RequestedPackagesType
     */
    public function setWeight($Weight)
    {
      $this->Weight = $Weight;
      return $this;
    }

    /**
     * @return docTypeRef_DimensionsType
     */
    public function getDimensions()
    {
      return $this->Dimensions;
    }

    /**
     * @param docTypeRef_DimensionsType $Dimensions
     * @return \DHL\Express\Webservice\docTypeRef_RequestedPackagesType
     */
    public function setDimensions($Dimensions)
    {
      $this->Dimensions = $Dimensions;
      return $this;
    }

    /**
     * @return string
     */
    public function getCustomerReferences()
    {
      return $this->CustomerReferences;
    }

    /**
     * @param string $CustomerReferences
     * @return \DHL\Express\Webservice\docTypeRef_RequestedPackagesType
     */
    public function setCustomerReferences($CustomerReferences)
    {
      $this->CustomerReferences = $CustomerReferences;
      return $this;
    }

    /**
     * @return string
     */
    public function getNumber()
    {
      return $this->number;
    }

    /**
     * @param string $number
     * @return \DHL\Express\Webservice\docTypeRef_RequestedPackagesType
     */
    public function setNumber($number)
    {
      $this->number = $number;
      return $this;
    }

    /**
     * @return null|string
     */
    public function getPackageContentDescription()
    {
      return $this->PackageContentDescription;
    }

    /**
     * @param null|string $PackageContentDescription
     * @return \DHL\Express\Webservice\docTypeRef_RequestedPackagesType
     */
    public function setPackageContentDescription($PackageContentDescription = null)
    {
      $this->PackageContentDescription = $PackageContentDescription;
      return $this;
    }
}
