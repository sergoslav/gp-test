<?php

class SalesTerritoryCriteria extends Criteria
{

    /**
     * @var BetweenRestrictionOfNullableOfdateTime $CreatedDate
     */
    protected $CreatedDate = null;

    /**
     * @var LikeRestrictionOfstring $Id
     */
    protected $Id = null;

    /**
     * @var RestrictionOfNullableOfboolean $IsActive
     */
    protected $IsActive = null;

    /**
     * @var BetweenRestrictionOfNullableOfdateTime $ModifiedDate
     */
    protected $ModifiedDate = null;

    /**
     * @var LikeRestrictionOfstring $SalesManagerId
     */
    protected $SalesManagerId = null;

    /**
     * @var LikeRestrictionOfstring $SalesManagerLastName
     */
    protected $SalesManagerLastName = null;

    /**
     * @var LikeRestrictionOfstring $SalespersonId
     */
    protected $SalespersonId = null;

    /**
     * @var SalespersonScope $Scope
     */
    protected $Scope = null;

    
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
     * @return SalesTerritoryCriteria
     */
    public function setCreatedDate($CreatedDate)
    {
      $this->CreatedDate = $CreatedDate;
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
     * @return SalesTerritoryCriteria
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
     * @return SalesTerritoryCriteria
     */
    public function setIsActive($IsActive)
    {
      $this->IsActive = $IsActive;
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
     * @return SalesTerritoryCriteria
     */
    public function setModifiedDate($ModifiedDate)
    {
      $this->ModifiedDate = $ModifiedDate;
      return $this;
    }

    /**
     * @return LikeRestrictionOfstring
     */
    public function getSalesManagerId()
    {
      return $this->SalesManagerId;
    }

    /**
     * @param LikeRestrictionOfstring $SalesManagerId
     * @return SalesTerritoryCriteria
     */
    public function setSalesManagerId($SalesManagerId)
    {
      $this->SalesManagerId = $SalesManagerId;
      return $this;
    }

    /**
     * @return LikeRestrictionOfstring
     */
    public function getSalesManagerLastName()
    {
      return $this->SalesManagerLastName;
    }

    /**
     * @param LikeRestrictionOfstring $SalesManagerLastName
     * @return SalesTerritoryCriteria
     */
    public function setSalesManagerLastName($SalesManagerLastName)
    {
      $this->SalesManagerLastName = $SalesManagerLastName;
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
     * @return SalesTerritoryCriteria
     */
    public function setSalespersonId($SalespersonId)
    {
      $this->SalespersonId = $SalespersonId;
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
     * @return SalesTerritoryCriteria
     */
    public function setScope($Scope)
    {
      $this->Scope = $Scope;
      return $this;
    }

}
