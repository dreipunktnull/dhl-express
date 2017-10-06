<?php

namespace DHL\Express\Webservice\RateRequest;

use DHL\Express\Webservice\_x0040_number3;
use DHL\Express\Webservice\RateRequest\DimensionsType;
use DHL\Express\Webservice\RateRequest\WeightType;

class RequestedPackagesType2
{
    /**
     * @var WeightType $Weight
     */
    protected $Weight = null;

    /**
     * @var DimensionsType $Dimensions
     */
    protected $Dimensions = null;

    /**
     * @var _x0040_number3 $number
     */
    protected $number = null;

    /**
     * @param WeightType $Weight
     * @param DimensionsType $Dimensions
     * @param _x0040_number3 $number
     */
    public function __construct($Weight, $Dimensions, $number)
    {
      $this->Weight = $Weight;
      $this->Dimensions = $Dimensions;
      $this->number = $number;
    }

    /**
     * @return WeightType
     */
    public function getWeight()
    {
      return $this->Weight;
    }

    /**
     * @param WeightType $Weight
     * @return RequestedPackagesType2
     */
    public function setWeight($Weight)
    {
      $this->Weight = $Weight;
      return $this;
    }

    /**
     * @return DimensionsType
     */
    public function getDimensions()
    {
      return $this->Dimensions;
    }

    /**
     * @param DimensionsType $Dimensions
     * @return RequestedPackagesType2
     */
    public function setDimensions($Dimensions)
    {
      $this->Dimensions = $Dimensions;
      return $this;
    }

    /**
     * @return _x0040_number3
     */
    public function getNumber()
    {
      return $this->number;
    }

    /**
     * @param _x0040_number3 $number
     * @return RequestedPackagesType2
     */
    public function setNumber($number)
    {
      $this->number = $number;
      return $this;
    }

}
