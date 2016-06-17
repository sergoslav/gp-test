<?php

class VendorAddressCriteria extends Criteria
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
     * @var LikeRestrictionOfstring $PhoneNumber
     */
    protected $PhoneNumber = null;

    /**
     * @var LikeRestrictionOfstring $PostalCode
     */
    protected $PostalCode = null;

    /**
     * @var VendorScope $Scope
     */
    protected $Scope = null;

    /**
     * @var LikeRestrictionOfstring $State
     */
    protected $State = null;

    /**
     * @var LikeRestrictionOfstring $VendorAddressKeyId
     */
    protected $VendorAddressKeyId = null;

    /**
     * @var LikeRestrictionOfstring $VendorKeyId
     */
    protected $VendorKeyId = null;

    
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
     * @return VendorAddressCriteria
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
     * @return VendorAddressCriteria
     */
    public function setCity($City)
    {
      $this->City = $City;
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
     * @return VendorAddressCriteria
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
     * @return VendorAddressCriteria
     */
    public function setPostalCode($PostalCode)
    {
      $this->PostalCode = $PostalCode;
      return $this;
    }

    /**
     * @return VendorScope
     */
    public function getScope()
    {
      return $this->Scope;
    }

    /**
     * @param VendorScope $Scope
     * @return VendorAddressCriteria
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
     * @return VendorAddressCriteria
     */
    public function setState($State)
    {
      $this->State = $State;
      return $this;
    }

    /**
     * @return LikeRestrictionOfstring
     */
    public function getVendorAddressKeyId()
    {
      return $this->VendorAddressKeyId;
    }

    /**
     * @param LikeRestrictionOfstring $VendorAddressKeyId
     * @return VendorAddressCriteria
     */
    public function setVendorAddressKeyId($VendorAddressKeyId)
    {
      $this->VendorAddressKeyId = $VendorAddressKeyId;
      return $this;
    }

    /**
     * @return LikeRestrictionOfstring
     */
    public function getVendorKeyId()
    {
      return $this->VendorKeyId;
    }

    /**
     * @param LikeRestrictionOfstring $VendorKeyId
     * @return VendorAddressCriteria
     */
    public function setVendorKeyId($VendorKeyId)
    {
      $this->VendorKeyId = $VendorKeyId;
      return $this;
    }

}
