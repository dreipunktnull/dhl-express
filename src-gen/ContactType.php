<?php

namespace DHL\Express\Webservice;

class ContactType
{

    /**
     * @var string $PersonName
     */
    protected $PersonName = null;

    /**
     * @var string $CompanyName
     */
    protected $CompanyName = null;

    /**
     * @var string $PhoneNumber
     */
    protected $PhoneNumber = null;

    /**
     * @var string $EmailAddress
     */
    protected $EmailAddress = null;

    /**
     * @param string $PersonName
     * @param string $CompanyName
     * @param string $PhoneNumber
     */
    public function __construct($PersonName, $CompanyName, $PhoneNumber)
    {
      $this->PersonName = $PersonName;
      $this->CompanyName = $CompanyName;
      $this->PhoneNumber = $PhoneNumber;
    }

    /**
     * @return string
     */
    public function getPersonName()
    {
      return $this->PersonName;
    }

    /**
     * @param string $PersonName
     * @return \DHL\Express\Webservice\ContactType
     */
    public function setPersonName($PersonName)
    {
      $this->PersonName = $PersonName;
      return $this;
    }

    /**
     * @return string
     */
    public function getCompanyName()
    {
      return $this->CompanyName;
    }

    /**
     * @param string $CompanyName
     * @return \DHL\Express\Webservice\ContactType
     */
    public function setCompanyName($CompanyName)
    {
      $this->CompanyName = $CompanyName;
      return $this;
    }

    /**
     * @return string
     */
    public function getPhoneNumber()
    {
      return $this->PhoneNumber;
    }

    /**
     * @param string $PhoneNumber
     * @return \DHL\Express\Webservice\ContactType
     */
    public function setPhoneNumber($PhoneNumber)
    {
      $this->PhoneNumber = $PhoneNumber;
      return $this;
    }

    /**
     * @return string
     */
    public function getEmailAddress()
    {
      return $this->EmailAddress;
    }

    /**
     * @param string $EmailAddress
     * @return \DHL\Express\Webservice\ContactType
     */
    public function setEmailAddress($EmailAddress)
    {
      $this->EmailAddress = $EmailAddress;
      return $this;
    }

}
