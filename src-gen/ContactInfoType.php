<?php

namespace DHL\Express\Webservice;

class ContactInfoType
{

    /**
     * @var ContactType $Contact
     */
    protected $Contact = null;

    /**
     * @var AddressType $Address
     */
    protected $Address = null;

    /**
     * @param ContactType $Contact
     * @param AddressType $Address
     */
    public function __construct($Contact, $Address)
    {
      $this->Contact = $Contact;
      $this->Address = $Address;
    }

    /**
     * @return ContactType
     */
    public function getContact()
    {
      return $this->Contact;
    }

    /**
     * @param ContactType $Contact
     * @return \DHL\Express\Webservice\ContactInfoType
     */
    public function setContact($Contact)
    {
      $this->Contact = $Contact;
      return $this;
    }

    /**
     * @return AddressType
     */
    public function getAddress()
    {
      return $this->Address;
    }

    /**
     * @param AddressType $Address
     * @return \DHL\Express\Webservice\ContactInfoType
     */
    public function setAddress($Address)
    {
      $this->Address = $Address;
      return $this;
    }

}
