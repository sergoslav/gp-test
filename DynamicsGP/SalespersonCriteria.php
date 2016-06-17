<?php

class SalespersonCriteria extends Criteria
{

    /**
     * @var BetweenRestrictionOfNullableOfdateTime $CreatedDate
     */
    protected $CreatedDate = null;

    /**
     * @var LikeRestrictionOfstring $FirstName
     */
    protected $FirstName = null;

    /**
     * @var LikeRestrictionOfstring $Id
     */
    protected $Id = null;

    /**
     * @var RestrictionOfNullableOfboolean $IsActive
     */
    protected $IsActive = null;

    /**
     * @var LikeRestrictionOfstring $LastName
     */
    protected $LastName = null;

    /**
     * @var BetweenRestrictionOfNullableOfdateTime $ModifiedDate
     */
    protected $ModifiedDate = null;

    /**
     * @var SalespersonScope $Scope
     */
    protected $Scope = null;

    /**
     * @var LikeRestrictionOfstring $TerritoryId
     */
    protected $TerritoryId = null;

    
    public function __construct()
    {
      parent::__construct();
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
     * @return SalespersonCriteria
     */
    public function setCreatedDate($CreatedDate)
    {
      $this->CreatedDate = $CreatedDate;
      return $this;
    }

    /**
     * @return LikeRestrictionOfstring
     */
    public function getFirstName()
    {
      return $this->FirstName;
    }

    /**
     * @param LikeRestrictionOfstring $FirstName
     * @return SalespersonCriteria
     */
    public function setFirstName($FirstName)
    {
      $this->FirstName = $FirstName;
      return $this;
    }

    /**
     * @return LikeRestrictionOfstring
     */
    public function getId()
    {
      return $this->Id;
    }

    /**
     * @param LikeRestrictionOfstring $Id
     * @return SalespersonCriteria
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
     * @return SalespersonCriteria
     */
    public function setIsActive($IsActive)
    {
      $this->IsActive = $IsActive;
      return $this;
    }

    /**
     * @return LikeRestrictionOfstring
     */
    public function getLastName()
    {
      return $this->LastName;
    }

    /**
     * @param LikeRestrictionOfstring $LastName
     * @return SalespersonCriteria
     */
    public function setLastName($LastName)
    {
      $this->LastName = $LastName;
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
     * @return SalespersonCriteria
     */
    public function setModifiedDate($ModifiedDate)
    {
      $this->ModifiedDate = $ModifiedDate;
      return $this;
    }

    /**
     * @return SalespersonScope
     */
    public function getScope()
    {
      return $this->Scope;
    }

    /**
     * @param SalespersonScope $Scope
     * @return SalespersonCriteria
     */
    public function setScope($Scope)
    {
      $this->Scope = $Scope;
      return $this;
    }

    /**
     * @return LikeRestrictionOfstring
     */
    public function getTerritoryId()
    {
      return $this->TerritoryId;
    }

    /**
     * @param LikeRestrictionOfstring $TerritoryId
     * @return SalespersonCriteria
     */
    public function setTerritoryId($TerritoryId)
    {
      $this->TerritoryId = $TerritoryId;
      return $this;
    }

}
