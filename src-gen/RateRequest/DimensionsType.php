<?php

namespace DHL\Express\Webservice\RateRequest;

class DimensionsType
{
    /**
     * @var int $Length
     */
    protected $Length = null;

    /**
     * @var int $Width
     */
    protected $Width = null;

    /**
     * @var int $Height
     */
    protected $Height = null;

    /**
     * @param int $Length
     * @param int $Width
     * @param int $Height
     */
    public function __construct($Length, $Width, $Height)
    {
        $this->Length = $Length;
        $this->Width = $Width;
        $this->Height = $Height;
    }

    /**
     * @return int
     */
    public function getLength()
    {
        return $this->Length;
    }

    /**
     * @param int $Length
     * @return DimensionsType
     */
    public function setLength($Length)
    {
        $this->Length = $Length;
        return $this;
    }

    /**
     * @return int
     */
    public function getWidth()
    {
        return $this->Width;
    }

    /**
     * @param int $Width
     * @return DimensionsType
     */
    public function setWidth($Width)
    {
        $this->Width = $Width;
        return $this;
    }

    /**
     * @return int
     */
    public function getHeight()
    {
        return $this->Height;
    }

    /**
     * @param int $Height
     * @return DimensionsType
     */
    public function setHeight($Height)
    {
        $this->Height = $Height;
        return $this;
    }
}
