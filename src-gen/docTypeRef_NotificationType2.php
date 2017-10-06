<?php

namespace DHL\Express\Webservice;

class docTypeRef_NotificationType2
{

    /**
     * @var Message $Message
     */
    protected $Message = null;

    /**
     * @var _x0040_code2 $code
     */
    protected $code = null;

    /**
     * @param Message $Message
     * @param _x0040_code2 $code
     */
    public function __construct($Message, $code)
    {
      $this->Message = $Message;
      $this->code = $code;
    }

    /**
     * @return Message
     */
    public function getMessage()
    {
      return $this->Message;
    }

    /**
     * @param Message $Message
     * @return \DHL\Express\Webservice\docTypeRef_NotificationType2
     */
    public function setMessage($Message)
    {
      $this->Message = $Message;
      return $this;
    }

    /**
     * @return _x0040_code2
     */
    public function getCode()
    {
      return $this->code;
    }

    /**
     * @param _x0040_code2 $code
     * @return \DHL\Express\Webservice\docTypeRef_NotificationType2
     */
    public function setCode($code)
    {
      $this->code = $code;
      return $this;
    }

}
