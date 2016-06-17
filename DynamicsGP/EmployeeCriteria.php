<?php

class EmployeeCriteria extends Criteria
{

    /**
     * @var LikeRestrictionOfstring $CompanyAddressId
     */
    protected $CompanyAddressId = null;

    /**
     * @var LikeRestrictionOfstring $DepartmentId
     */
    protected $DepartmentId = null;

    /**
     * @var LikeRestrictionOfstring $DivisionId
     */
    protected $DivisionId = null;

    /**
     * @var LikeRestrictionOfstring $EmployeeClassId
     */
    protected $EmployeeClassId = null;

    /**
     * @var LikeRestrictionOfstring $EmployeeKeyId
     */
    protected $EmployeeKeyId = null;

    /**
     * @var LikeRestrictionOfstring $FamilyName
     */
    protected $FamilyName = null;

    /**
     * @var LikeRestrictionOfstring $GivenName
     */
    protected $GivenName = null;

    /**
     * @var RestrictionOfNullableOfboolean $IsActive
     */
    protected $IsActive = null;

    /**
     * @var LikeRestrictionOfstring $PositionId
     */
    protected $PositionId = null;

    /**
     * @var EmployeeScope $Scope
     */
    protected $Scope = null;

    /**
     * @var LikeRestrictionOfstring $SupervisorId
     */
    protected $SupervisorId = null;

    /**
     * @var LikeRestrictionOfstring $WorkersCompensationId
     */
    protected $WorkersCompensationId = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return LikeRestrictionOfstring
     */
    public function getCompanyAddressId()
    {
      return $this->CompanyAddressId;
    }

    /**
     * @param LikeRestrictionOfstring $CompanyAddressId
     * @return EmployeeCriteria
     */
    public function setCompanyAddressId($CompanyAddressId)
    {
      $this->CompanyAddressId = $CompanyAddressId;
      return $this;
    }

    /**
     * @return LikeRestrictionOfstring
     */
    public function getDepartmentId()
    {
      return $this->DepartmentId;
    }

    /**
     * @param LikeRestrictionOfstring $DepartmentId
     * @return EmployeeCriteria
     */
    public function setDepartmentId($DepartmentId)
    {
      $this->DepartmentId = $DepartmentId;
      return $this;
    }

    /**
     * @return LikeRestrictionOfstring
     */
    public function getDivisionId()
    {
      return $this->DivisionId;
    }

    /**
     * @param LikeRestrictionOfstring $DivisionId
     * @return EmployeeCriteria
     */
    public function setDivisionId($DivisionId)
    {
      $this->DivisionId = $DivisionId;
      return $this;
    }

    /**
     * @return LikeRestrictionOfstring
     */
    public function getEmployeeClassId()
    {
      return $this->EmployeeClassId;
    }

    /**
     * @param LikeRestrictionOfstring $EmployeeClassId
     * @return EmployeeCriteria
     */
    public function setEmployeeClassId($EmployeeClassId)
    {
      $this->EmployeeClassId = $EmployeeClassId;
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
     * @return EmployeeCriteria
     */
    public function setEmployeeKeyId($EmployeeKeyId)
    {
      $this->EmployeeKeyId = $EmployeeKeyId;
      return $this;
    }

    /**
     * @return LikeRestrictionOfstring
     */
    public function getFamilyName()
    {
      return $this->FamilyName;
    }

    /**
     * @param LikeRestrictionOfstring $FamilyName
     * @return EmployeeCriteria
     */
    public function setFamilyName($FamilyName)
    {
      $this->FamilyName = $FamilyName;
      return $this;
    }

    /**
     * @return LikeRestrictionOfstring
     */
    public function getGivenName()
    {
      return $this->GivenName;
    }

    /**
     * @param LikeRestrictionOfstring $GivenName
     * @return EmployeeCriteria
     */
    public function setGivenName($GivenName)
    {
      $this->GivenName = $GivenName;
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
     * @return EmployeeCriteria
     */
    public function setIsActive($IsActive)
    {
      $this->IsActive = $IsActive;
      return $this;
    }

    /**
     * @return LikeRestrictionOfstring
     */
    public function getPositionId()
    {
      return $this->PositionId;
    }

    /**
     * @param LikeRestrictionOfstring $PositionId
     * @return EmployeeCriteria
     */
    public function setPositionId($PositionId)
    {
      $this->PositionId = $PositionId;
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
     * @return EmployeeCriteria
     */
    public function setScope($Scope)
    {
      $this->Scope = $Scope;
      return $this;
    }

    /**
     * @return LikeRestrictionOfstring
     */
    public function getSupervisorId()
    {
      return $this->SupervisorId;
    }

    /**
     * @param LikeRestrictionOfstring $SupervisorId
     * @return EmployeeCriteria
     */
    public function setSupervisorId($SupervisorId)
    {
      $this->SupervisorId = $SupervisorId;
      return $this;
    }

    /**
     * @return LikeRestrictionOfstring
     */
    public function getWorkersCompensationId()
    {
      return $this->WorkersCompensationId;
    }

    /**
     * @param LikeRestrictionOfstring $WorkersCompensationId
     * @return EmployeeCriteria
     */
    public function setWorkersCompensationId($WorkersCompensationId)
    {
      $this->WorkersCompensationId = $WorkersCompensationId;
      return $this;
    }

}
