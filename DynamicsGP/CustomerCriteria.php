<?php

class CustomerCriteria extends Criteria
{

    /**
     * @var LikeRestrictionOfstring $ClassId
     */
    protected $ClassId = null;

    /**
     * @var LikeRestrictionOfstring $CorporateAccountId
     */
    protected $CorporateAccountId = null;

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
     * @var BetweenRestrictionOfNullableOfdateTime $LastModifiedDate
     */
    protected $LastModifiedDate = null;

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
     * @var LikeRestrictionOfstring $SalespersonId
     */
    protected $SalespersonId = null;

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
    public function getClassId()
    {
      return $this->ClassId;
    }

    /**
     * @param LikeRestrictionOfstring $ClassId
     * @return CustomerCriteria
     */
    public function setClassId($ClassId)
    {
      $this->ClassId = $ClassId;
      return $this;
    }

    /**
     * @return LikeRestrictionOfstring
     */
    public function getCorporateAccountId()
    {
      return $this->CorporateAccountId;
    }

    /**
     * @param LikeRestrictionOfstring $CorporateAccountId
     * @return CustomerCriteria
     */
    public function setCorporateAccountId($CorporateAccountId)
    {
      $this->CorporateAccountId = $CorporateAccountId;
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
     * @return CustomerCriteria
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
     * @return CustomerCriteria
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
     * @return CustomerCriteria
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
     * @return CustomerCriteria
     */
    public function setIsOnHold($IsOnHold)
    {
      $this->IsOnHold = $IsOnHold;
      return $this;
    }

    /**
     * @return BetweenRestrictionOfNullableOfdateTime
     */
    public function getLastModifiedDate()
    {
      return $this->LastModifiedDate;
    }

    /**
     * @param BetweenRestrictionOfNullableOfdateTime $LastModifiedDate
     * @return CustomerCriteria
     */
    public function setLastModifiedDate($LastModifiedDate)
    {
      $this->LastModifiedDate = $LastModifiedDate;
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
     * @return CustomerCriteria
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
     * @return CustomerCriteria
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
     * @return CustomerCriteria
     */
    public function setPhoneNumber($PhoneNumber)
    {
      $this->PhoneNumber = $PhoneNumber;
      return $this;
    }

    /**
     * @return LikeRestrictionOfstring
     */
    public function getSalespersonId()
    {
      return $this->SalespersonId;
    }

    /**
     * @param LikeRestrictionOfstring $SalespersonId
     * @return CustomerCriteria
     */
    public function setSalespersonId($SalespersonId)
    {
      $this->SalespersonId = $SalespersonId;
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
     * @return CustomerCriteria
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
     * @return CustomerCriteria
     */
    public function setState($State)
    {
      $this->State = $State;
      return $this;
    }

}
