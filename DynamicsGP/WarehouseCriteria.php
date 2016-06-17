<?php

class WarehouseCriteria extends Criteria
{

    /**
     * @var LikeRestrictionOfstring $AddressLine1
     */
    protected $AddressLine1 = null;

    /**
     * @var LikeRestrictionOfstring $City
     */
    protected $City = null;

    /**
     * @var LikeRestrictionOfstring $CountryRegion
     */
    protected $CountryRegion = null;

    /**
     * @var LikeRestrictionOfstring $Description
     */
    protected $Description = null;

    /**
     * @var LikeRestrictionOfstring $PostalCode
     */
    protected $PostalCode = null;

    /**
     * @var LikeRestrictionOfstring $State
     */
    protected $State = null;

    /**
     * @var LikeRestrictionOfstring $WarehouseId
     */
    protected $WarehouseId = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return LikeRestrictionOfstring
     */
    public function getAddressLine1()
    {
      return $this->AddressLine1;
    }

    /**
     * @param LikeRestrictionOfstring $AddressLine1
     * @return WarehouseCriteria
     */
    public function setAddressLine1($AddressLine1)
    {
      $this->AddressLine1 = $AddressLine1;
      return $this;
    }

    /**
     * @return LikeRestrictionOfstring
     */
    public function getCity()
    {
      return $this->City;
    }

    /**
     * @param LikeRestrictionOfstring $City
     * @return WarehouseCriteria
     */
    public function setCity($City)
    {
      $this->City = $City;
      return $this;
    }

    /**
     * @return LikeRestrictionOfstring
     */
    public function getCountryRegion()
    {
      return $this->CountryRegion;
    }

    /**
     * @param LikeRestrictionOfstring $CountryRegion
     * @return WarehouseCriteria
     */
    public function setCountryRegion($CountryRegion)
    {
      $this->CountryRegion = $CountryRegion;
      return $this;
    }

    /**
     * @return LikeRestrictionOfstring
     */
    public function getDescription()
    {
      return $this->Description;
    }

    /**
     * @param LikeRestrictionOfstring $Description
     * @return WarehouseCriteria
     */
    public function setDescription($Description)
    {
      $this->Description = $Description;
      return $this;
    }

    /**
     * @return LikeRestrictionOfstring
     */
    public function getPostalCode()
    {
      return $this->PostalCode;
    }

    /**
     * @param LikeRestrictionOfstring $PostalCode
     * @return WarehouseCriteria
     */
    public function setPostalCode($PostalCode)
    {
      $this->PostalCode = $PostalCode;
      return $this;
    }

    /**
     * @return LikeRestrictionOfstring
     */
    public function getState()
    {
      return $this->State;
    }

    /**
     * @param LikeRestrictionOfstring $State
     * @return WarehouseCriteria
     */
    public function setState($State)
    {
      $this->State = $State;
      return $this;
    }

    /**
     * @return LikeRestrictionOfstring
     */
    public function getWarehouseId()
    {
      return $this->WarehouseId;
    }

    /**
     * @param LikeRestrictionOfstring $WarehouseId
     * @return WarehouseCriteria
     */
    public function setWarehouseId($WarehouseId)
    {
      $this->WarehouseId = $WarehouseId;
      return $this;
    }

}
