<?php

class ServiceEquipmentAddress extends AddressBase
{

    /**
     * @var string $ContactPerson
     */
    protected $ContactPerson = null;

    /**
     * @var string $Country
     */
    protected $Country = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return string
     */
    public function getContactPerson()
    {
      return $this->ContactPerson;
    }

    /**
     * @param string $ContactPerson
     * @return ServiceEquipmentAddress
     */
    public function setContactPerson($ContactPerson)
    {
      $this->ContactPerson = $ContactPerson;
      return $this;
    }

    /**
     * @return string
     */
    public function getCountry()
    {
      return $this->Country;
    }

    /**
     * @param string $Country
     * @return ServiceEquipmentAddress
     */
    public function setCountry($Country)
    {
      $this->Country = $Country;
      return $this;
    }

}
