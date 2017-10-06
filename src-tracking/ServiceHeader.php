<?php

namespace DHL\Express\Webservice\Tracking;

class ServiceHeader
{
    /**
     * @var \DateTime $MessageTime
     */
    protected $MessageTime = null;

    /**
     * @var MessageReference $MessageReference
     */
    protected $MessageReference = null;

    /**
     * @param \DateTime $MessageTime
     * @param MessageReference $MessageReference
     */
    public function __construct(\DateTime $MessageTime, $MessageReference)
    {
        $this->MessageTime = $MessageTime->format(\DateTime::ATOM);
        $this->MessageReference = $MessageReference;
    }

    /**
     * @return \DateTime
     */
    public function getMessageTime()
    {
        if ($this->MessageTime == null) {
            return null;
        }

        try {
            return new \DateTime($this->MessageTime);
        } catch (\Exception $e) {
            return false;
        }
    }

    /**
     * @param \DateTime $MessageTime
     * @return \DHL\Express\Webservice\Tracking\ServiceHeader
     */
    public function setMessageTime(\DateTime $MessageTime)
    {
        $this->MessageTime = $MessageTime->format(\DateTime::ATOM);
        return $this;
    }

    /**
     * @return MessageReference
     */
    public function getMessageReference()
    {
        return $this->MessageReference;
    }

    /**
     * @param MessageReference $MessageReference
     * @return \DHL\Express\Webservice\Tracking\ServiceHeader
     */
    public function setMessageReference($MessageReference)
    {
        $this->MessageReference = $MessageReference;
        return $this;
    }

}
