<?php

class EmployeeAddressCriteria extends Criteria
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
     * @var LikeRestrictionOfstring $EmployeeAddressKeyId
     */
    protected $EmployeeAddressKeyId = null;

    /**
     * @var LikeRestrictionOfstring $EmployeeKeyId
     */
    protected $EmployeeKeyId = null;

    /**
     * @var LikeRestrictionOfstring $PhoneNumber
     */
    protected $PhoneNumber = null;

    /**
     * @var LikeRestrictionOfstring $PostalCode
     */
    protected $PostalCode = null;

    /**
     * @var EmployeeScope $Scope
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
     * @return EmployeeAddressCriteria
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
     * @return EmployeeAddressCriteria
     */
    public function setCity($City)
    {
      $this->City = $City;
      return $this;
    }

    /**
     * @return LikeRestrictionOfstring
     */
    public function getEmployeeAddressKeyId()
    {
      return $this->EmployeeAddressKeyId;
    }

    /**
     * @param LikeRestrictionOfstring $EmployeeAddressKeyId
     * @return EmployeeAddressCriteria
     */
    public function setEmployeeAddressKeyId($EmployeeAddressKeyId)
    {
      $this->EmployeeAddressKeyId = $EmployeeAddressKeyId;
      return $this;
    }

    /**
     * @return LikeRestrictionOfstring
     */
    public function getEmployeeKeyId()
    {
      return $this->EmployeeKeyId;
    }

    /**
     * @param LikeRestrictionOfstring $EmployeeKeyId
     * @return EmployeeAddressCriteria
     */
    public function setEmployeeKeyId($EmployeeKeyId)
    {
      $this->EmployeeKeyId = $EmployeeKeyId;
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
     * @return EmployeeAddressCriteria
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
     * @return EmployeeAddressCriteria
     */
    public function setPostalCode($PostalCode)
    {
      $this->PostalCode = $PostalCode;
      return $this;
    }

    /**
     * @return EmployeeScope
     */
    public function getScope()
    {
      return $this->Scope;
    }

    /**
     * @param EmployeeScope $Scope
     * @return EmployeeAddressCriteria
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
     * @return EmployeeAddressCriteria
     */
    public function setState($State)
    {
      $this->State = $State;
      return $this;
    }

}
