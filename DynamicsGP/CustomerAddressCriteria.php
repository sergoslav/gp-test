<?php

class CustomerAddressCriteria extends Criteria
{

    /**
     * @var LikeRestrictionOfstring $Address
     */
    protected $Address = null;

    /**
     * @var LikeRestrictionOfstring $City
     */
    protected $City = null;

    /**
     * @var LikeRestrictionOfstring $CustomerAddressKeyId
     */
    protected $CustomerAddressKeyId = null;

    /**
     * @var LikeRestrictionOfstring $CustomerKeyId
     */
    protected $CustomerKeyId = null;

    /**
     * @var LikeRestrictionOfstring $PhoneNumber
     */
    protected $PhoneNumber = null;

    /**
     * @var LikeRestrictionOfstring $PostalCode
     */
    protected $PostalCode = null;

    /**
     * @var LikeRestrictionOfstring $SalesPersonKeyId
     */
    protected $SalesPersonKeyId = null;

    /**
     * @var LikeRestrictionOfstring $SalesTerritoryKeyId
     */
    protected $SalesTerritoryKeyId = null;

    /**
     * @var CustomerScope $Scope
     */
    protected $Scope = null;

    /**
     * @var LikeRestrictionOfstring $State
     */
    protected $State = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return LikeRestrictionOfstring
     */
    public function getAddress()
    {
      return $this->Address;
    }

    /**
     * @param LikeRestrictionOfstring $Address
     * @return CustomerAddressCriteria
     */
    public function setAddress($Address)
    {
      $this->Address = $Address;
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
     * @return CustomerAddressCriteria
     */
    public function setCity($City)
    {
      $this->City = $City;
      return $this;
    }

    /**
     * @return LikeRestrictionOfstring
     */
    public function getCustomerAddressKeyId()
    {
      return $this->CustomerAddressKeyId;
    }

    /**
     * @param LikeRestrictionOfstring $CustomerAddressKeyId
     * @return CustomerAddressCriteria
     */
    public function setCustomerAddressKeyId($CustomerAddressKeyId)
    {
      $this->CustomerAddressKeyId = $CustomerAddressKeyId;
      return $this;
    }

    /**
     * @return LikeRestrictionOfstring
     */
    public function getCustomerKeyId()
    {
      return $this->CustomerKeyId;
    }

    /**
     * @param LikeRestrictionOfstring $CustomerKeyId
     * @return CustomerAddressCriteria
     */
    public function setCustomerKeyId($CustomerKeyId)
    {
      $this->CustomerKeyId = $CustomerKeyId;
      return $this;
    }

    /**
     * @return LikeRestrictionOfstring
     */
    public function getPhoneNumber()
    {
      return $this->PhoneNumber;
    }

    /**
     * @param LikeRestrictionOfstring $PhoneNumber
     * @return CustomerAddressCriteria
     */
    public function setPhoneNumber($PhoneNumber)
    {
      $this->PhoneNumber = $PhoneNumber;
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
     * @return CustomerAddressCriteria
     */
    public function setPostalCode($PostalCode)
    {
      $this->PostalCode = $PostalCode;
      return $this;
    }

    /**
     * @return LikeRestrictionOfstring
     */
    public function getSalesPersonKeyId()
    {
      return $this->SalesPersonKeyId;
    }

    /**
     * @param LikeRestrictionOfstring $SalesPersonKeyId
     * @return CustomerAddressCriteria
     */
    public function setSalesPersonKeyId($SalesPersonKeyId)
    {
      $this->SalesPersonKeyId = $SalesPersonKeyId;
      return $this;
    }

    /**
     * @return LikeRestrictionOfstring
     */
    public function getSalesTerritoryKeyId()
    {
      return $this->SalesTerritoryKeyId;
    }

    /**
     * @param LikeRestrictionOfstring $SalesTerritoryKeyId
     * @return CustomerAddressCriteria
     */
    public function setSalesTerritoryKeyId($SalesTerritoryKeyId)
    {
      $this->SalesTerritoryKeyId = $SalesTerritoryKeyId;
      return $this;
    }

    /**
     * @return CustomerScope
     */
    public function getScope()
    {
      return $this->Scope;
    }

    /**
     * @param CustomerScope $Scope
     * @return CustomerAddressCriteria
     */
    public function setScope($Scope)
    {
      $this->Scope = $Scope;
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
     * @return CustomerAddressCriteria
     */
    public function setState($State)
    {
      $this->State = $State;
      return $this;
    }

}
