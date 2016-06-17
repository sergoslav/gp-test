<?php

class Address extends AddressBase
{

    /**
     * @var string $CountryRegion
     */
    protected $CountryRegion = null;

    /**
     * @var PhoneNumber $Fax
     */
    protected $Fax = null;

    /**
     * @var PhoneNumber $Phone1
     */
    protected $Phone1 = null;

    /**
     * @var PhoneNumber $Phone2
     */
    protected $Phone2 = null;

    /**
     * @var PhoneNumber $Phone3
     */
    protected $Phone3 = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return string
     */
    public function getCountryRegion()
    {
      return $this->CountryRegion;
    }

    /**
     * @param string $CountryRegion
     * @return Address
     */
    public function setCountryRegion($CountryRegion)
    {
      $this->CountryRegion = $CountryRegion;
      return $this;
    }

    /**
     * @return PhoneNumber
     */
    public function getFax()
    {
      return $this->Fax;
    }

    /**
     * @param PhoneNumber $Fax
     * @return Address
     */
    public function setFax($Fax)
    {
      $this->Fax = $Fax;
      return $this;
    }

    /**
     * @return PhoneNumber
     */
    public function getPhone1()
    {
      return $this->Phone1;
    }

    /**
     * @param PhoneNumber $Phone1
     * @return Address
     */
    public function setPhone1($Phone1)
    {
      $this->Phone1 = $Phone1;
      return $this;
    }

    /**
     * @return PhoneNumber
     */
    public function getPhone2()
    {
      return $this->Phone2;
    }

    /**
     * @param PhoneNumber $Phone2
     * @return Address
     */
    public function setPhone2($Phone2)
    {
      $this->Phone2 = $Phone2;
      return $this;
    }

    /**
     * @return PhoneNumber
     */
    public function getPhone3()
    {
      return $this->Phone3;
    }

    /**
     * @param PhoneNumber $Phone3
     * @return Address
     */
    public function setPhone3($Phone3)
    {
      $this->Phone3 = $Phone3;
      return $this;
    }

}
