<?php

class VendorCriteria extends Criteria
{

    /**
     * @var LikeRestrictionOfstring $ClassId
     */
    protected $ClassId = null;

    /**
     * @var BetweenRestrictionOfNullableOfdateTime $CreatedDate
     */
    protected $CreatedDate = null;

    /**
     * @var BetweenRestrictionOfstring $Id
     */
    protected $Id = null;

    /**
     * @var RestrictionOfNullableOfboolean $IsActive
     */
    protected $IsActive = null;

    /**
     * @var RestrictionOfNullableOfboolean $IsOnHold
     */
    protected $IsOnHold = null;

    /**
     * @var RestrictionOfNullableOfboolean $IsOneTime
     */
    protected $IsOneTime = null;

    /**
     * @var BetweenRestrictionOfNullableOfdateTime $ModifiedDate
     */
    protected $ModifiedDate = null;

    /**
     * @var LikeRestrictionOfstring $Name
     */
    protected $Name = null;

    /**
     * @var LikeRestrictionOfstring $PhoneNumber
     */
    protected $PhoneNumber = null;

    /**
     * @var VendorScope $Scope
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
    public function getClassId()
    {
      return $this->ClassId;
    }

    /**
     * @param LikeRestrictionOfstring $ClassId
     * @return VendorCriteria
     */
    public function setClassId($ClassId)
    {
      $this->ClassId = $ClassId;
      return $this;
    }

    /**
     * @return BetweenRestrictionOfNullableOfdateTime
     */
    public function getCreatedDate()
    {
      return $this->CreatedDate;
    }

    /**
     * @param BetweenRestrictionOfNullableOfdateTime $CreatedDate
     * @return VendorCriteria
     */
    public function setCreatedDate($CreatedDate)
    {
      $this->CreatedDate = $CreatedDate;
      return $this;
    }

    /**
     * @return BetweenRestrictionOfstring
     */
    public function getId()
    {
      return $this->Id;
    }

    /**
     * @param BetweenRestrictionOfstring $Id
     * @return VendorCriteria
     */
    public function setId($Id)
    {
      $this->Id = $Id;
      return $this;
    }

    /**
     * @return RestrictionOfNullableOfboolean
     */
    public function getIsActive()
    {
      return $this->IsActive;
    }

    /**
     * @param RestrictionOfNullableOfboolean $IsActive
     * @return VendorCriteria
     */
    public function setIsActive($IsActive)
    {
      $this->IsActive = $IsActive;
      return $this;
    }

    /**
     * @return RestrictionOfNullableOfboolean
     */
    public function getIsOnHold()
    {
      return $this->IsOnHold;
    }

    /**
     * @param RestrictionOfNullableOfboolean $IsOnHold
     * @return VendorCriteria
     */
    public function setIsOnHold($IsOnHold)
    {
      $this->IsOnHold = $IsOnHold;
      return $this;
    }

    /**
     * @return RestrictionOfNullableOfboolean
     */
    public function getIsOneTime()
    {
      return $this->IsOneTime;
    }

    /**
     * @param RestrictionOfNullableOfboolean $IsOneTime
     * @return VendorCriteria
     */
    public function setIsOneTime($IsOneTime)
    {
      $this->IsOneTime = $IsOneTime;
      return $this;
    }

    /**
     * @return BetweenRestrictionOfNullableOfdateTime
     */
    public function getModifiedDate()
    {
      return $this->ModifiedDate;
    }

    /**
     * @param BetweenRestrictionOfNullableOfdateTime $ModifiedDate
     * @return VendorCriteria
     */
    public function setModifiedDate($ModifiedDate)
    {
      $this->ModifiedDate = $ModifiedDate;
      return $this;
    }

    /**
     * @return LikeRestrictionOfstring
     */
    public function getName()
    {
      return $this->Name;
    }

    /**
     * @param LikeRestrictionOfstring $Name
     * @return VendorCriteria
     */
    public function setName($Name)
    {
      $this->Name = $Name;
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
     * @return VendorCriteria
     */
    public function setPhoneNumber($PhoneNumber)
    {
      $this->PhoneNumber = $PhoneNumber;
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
     * @return VendorCriteria
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
     * @return VendorCriteria
     */
    public function setState($State)
    {
      $this->State = $State;
      return $this;
    }

}
