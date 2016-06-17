<?php

class WarehouseSummary
{

    /**
     * @var string $AddressLine1
     */
    protected $AddressLine1 = null;

    /**
     * @var string $City
     */
    protected $City = null;

    /**
     * @var string $CountryRegion
     */
    protected $CountryRegion = null;

    /**
     * @var string $Description
     */
    protected $Description = null;

    /**
     * @var WarehouseKey $Key
     */
    protected $Key = null;

    /**
     * @var string $PostalCode
     */
    protected $PostalCode = null;

    /**
     * @var string $State
     */
    protected $State = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getAddressLine1()
    {
      return $this->AddressLine1;
    }

    /**
     * @param string $AddressLine1
     * @return WarehouseSummary
     */
    public function setAddressLine1($AddressLine1)
    {
      $this->AddressLine1 = $AddressLine1;
      return $this;
    }

    /**
     * @return string
     */
    public function getCity()
    {
      return $this->City;
    }

    /**
     * @param string $City
     * @return WarehouseSummary
     */
    public function setCity($City)
    {
      $this->City = $City;
      return $this;
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
     * @return WarehouseSummary
     */
    public function setCountryRegion($CountryRegion)
    {
      $this->CountryRegion = $CountryRegion;
      return $this;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
      return $this->Description;
    }

    /**
     * @param string $Description
     * @return WarehouseSummary
     */
    public function setDescription($Description)
    {
      $this->Description = $Description;
      return $this;
    }

    /**
     * @return WarehouseKey
     */
    public function getKey()
    {
      return $this->Key;
    }

    /**
     * @param WarehouseKey $Key
     * @return WarehouseSummary
     */
    public function setKey($Key)
    {
      $this->Key = $Key;
      return $this;
    }

    /**
     * @return string
     */
    public function getPostalCode()
    {
      return $this->PostalCode;
    }

    /**
     * @param string $PostalCode
     * @return WarehouseSummary
     */
    public function setPostalCode($PostalCode)
    {
      $this->PostalCode = $PostalCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getState()
    {
      return $this->State;
    }

    /**
     * @param string $State
     * @return WarehouseSummary
     */
    public function setState($State)
    {
      $this->State = $State;
      return $this;
    }

}
