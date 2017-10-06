<?php

namespace DHL\Express\Webservice\RateRequest;

class WeightType
{
    /**
     * @var string $Value
     */
    protected $Value = null;

    /**
     * @param string $Value
     */
    public function __construct($Value)
    {
        $this->Value = $Value;
    }

    /**
     * @return string
     */
    public function getValue()
    {
        return $this->Value;
    }

    /**
     * @param string $Value
     * @return WeightType
     */
    public function setValue($Value)
    {
        $this->Value = $Value;

        return $this;
    }
}
