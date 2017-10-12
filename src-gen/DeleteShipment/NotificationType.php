<?php

namespace DHL\Express\Webservice\DeleteShipment;

class NotificationType
{
    /**
     * @var string $Message
     */
    protected $Message = null;

    /**
     * @var string $code
     */
    protected $code = null;

    /**
     * @param string $Message
     * @param string $code
     */
    public function __construct($Message, $code)
    {
        $this->Message = $Message;
        $this->code = $code;
    }

    /**
     * @return string
     */
    public function getMessage()
    {
        return $this->Message;
    }

    /**
     * @param string $Message
     * @return NotificationType
     */
    public function setMessage($Message)
    {
        $this->Message = $Message;
        return $this;
    }

    /**
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * @param string $code
     * @return NotificationType
     */
    public function setCode($code)
    {
        $this->code = $code;
        return $this;
    }
}
