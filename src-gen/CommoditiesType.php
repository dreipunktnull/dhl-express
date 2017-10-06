<?php

namespace DHL\Express\Webservice;

class CommoditiesType
{

    /**
     * @var NumberOfPieces $NumberOfPieces
     */
    protected $NumberOfPieces = null;

    /**
     * @var string $Description
     */
    protected $Description = null;

    /**
     * @var CountryOfManufacture $CountryOfManufacture
     */
    protected $CountryOfManufacture = null;

    /**
     * @var Quantity $Quantity
     */
    protected $Quantity = null;

    /**
     * @var UnitPrice $UnitPrice
     */
    protected $UnitPrice = null;

    /**
     * @var CustomsValue $CustomsValue
     */
    protected $CustomsValue = null;

    /**
     * @param string $Description
     */
    public function __construct($Description)
    {
      $this->Description = $Description;
    }

    /**
     * @return NumberOfPieces
     */
    public function getNumberOfPieces()
    {
      return $this->NumberOfPieces;
    }

    /**
     * @param NumberOfPieces $NumberOfPieces
     * @return \DHL\Express\Webservice\CommoditiesType
     */
    public function setNumberOfPieces($NumberOfPieces)
    {
      $this->NumberOfPieces = $NumberOfPieces;
      return $this;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
      return $this->Description;
    }

    /**
     * @param string $Description
     * @return \DHL\Express\Webservice\CommoditiesType
     */
    public function setDescription($Description)
    {
      $this->Description = $Description;
      return $this;
    }

    /**
     * @return CountryOfManufacture
     */
    public function getCountryOfManufacture()
    {
      return $this->CountryOfManufacture;
    }

    /**
     * @param CountryOfManufacture $CountryOfManufacture
     * @return \DHL\Express\Webservice\CommoditiesType
     */
    public function setCountryOfManufacture($CountryOfManufacture)
    {
      $this->CountryOfManufacture = $CountryOfManufacture;
      return $this;
    }

    /**
     * @return Quantity
     */
    public function getQuantity()
    {
      return $this->Quantity;
    }

    /**
     * @param Quantity $Quantity
     * @return \DHL\Express\Webservice\CommoditiesType
     */
    public function setQuantity($Quantity)
    {
      $this->Quantity = $Quantity;
      return $this;
    }

    /**
     * @return UnitPrice
     */
    public function getUnitPrice()
    {
      return $this->UnitPrice;
    }

    /**
     * @param UnitPrice $UnitPrice
     * @return \DHL\Express\Webservice\CommoditiesType
     */
    public function setUnitPrice($UnitPrice)
    {
      $this->UnitPrice = $UnitPrice;
      return $this;
    }

    /**
     * @return CustomsValue
     */
    public function getCustomsValue()
    {
      return $this->CustomsValue;
    }

    /**
     * @param CustomsValue $CustomsValue
     * @return \DHL\Express\Webservice\CommoditiesType
     */
    public function setCustomsValue($CustomsValue)
    {
      $this->CustomsValue = $CustomsValue;
      return $this;
    }

}
