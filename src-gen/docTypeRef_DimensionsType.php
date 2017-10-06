<?php

namespace DHL\Express\Webservice;

class docTypeRef_DimensionsType
{
    /**
     * @var string $Length
     */
    protected $Length = null;

    /**
     * @var string $Width
     */
    protected $Width = null;

    /**
     * @var string $Height
     */
    protected $Height = null;

    /**
     * @param string $Length
     * @param string $Width
     * @param string $Height
     */
    public function __construct($Length, $Width, $Height)
    {
      $this->Length = $Length;
      $this->Width = $Width;
      $this->Height = $Height;
    }

    /**
     * @return string
     */
    public function getLength()
    {
      return $this->Length;
    }

    /**
     * @param string $Length
     * @return \DHL\Express\Webservice\docTypeRef_DimensionsType
     */
    public function setLength($Length)
    {
      $this->Length = $Length;
      return $this;
    }

    /**
     * @return string
     */
    public function getWidth()
    {
      return $this->Width;
    }

    /**
     * @param string $Width
     * @return \DHL\Express\Webservice\docTypeRef_DimensionsType
     */
    public function setWidth($Width)
    {
      $this->Width = $Width;
      return $this;
    }

    /**
     * @return string
     */
    public function getHeight()
    {
      return $this->Height;
    }

    /**
     * @param string $Height
     * @return \DHL\Express\Webservice\docTypeRef_DimensionsType
     */
    public function setHeight($Height)
    {
      $this->Height = $Height;
      return $this;
    }
}
