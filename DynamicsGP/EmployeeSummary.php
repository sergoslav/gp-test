<?php

class EmployeeSummary
{

    /**
     * @var EmployeeClassKey $ClassKey
     */
    protected $ClassKey = null;

    /**
     * @var CompanyAddressKey $CompanyAddressKey
     */
    protected $CompanyAddressKey = null;

    /**
     * @var DepartmentKey $DepartmentKey
     */
    protected $DepartmentKey = null;

    /**
     * @var DivisionKey $DivisionKey
     */
    protected $DivisionKey = null;

    /**
     * @var EmployeeKey $EmployeeKey
     */
    protected $EmployeeKey = null;

    /**
     * @var boolean $IsActive
     */
    protected $IsActive = null;

    /**
     * @var Name $Name
     */
    protected $Name = null;

    /**
     * @var PositionKey $PositionKey
     */
    protected $PositionKey = null;

    /**
     * @var SupervisorKey $SupervisorKey
     */
    protected $SupervisorKey = null;

    /**
     * @var WorkersCompensationKey $WorkersCompensationKey
     */
    protected $WorkersCompensationKey = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return EmployeeClassKey
     */
    public function getClassKey()
    {
      return $this->ClassKey;
    }

    /**
     * @param EmployeeClassKey $ClassKey
     * @return EmployeeSummary
     */
    public function setClassKey($ClassKey)
    {
      $this->ClassKey = $ClassKey;
      return $this;
    }

    /**
     * @return CompanyAddressKey
     */
    public function getCompanyAddressKey()
    {
      return $this->CompanyAddressKey;
    }

    /**
     * @param CompanyAddressKey $CompanyAddressKey
     * @return EmployeeSummary
     */
    public function setCompanyAddressKey($CompanyAddressKey)
    {
      $this->CompanyAddressKey = $CompanyAddressKey;
      return $this;
    }

    /**
     * @return DepartmentKey
     */
    public function getDepartmentKey()
    {
      return $this->DepartmentKey;
    }

    /**
     * @param DepartmentKey $DepartmentKey
     * @return EmployeeSummary
     */
    public function setDepartmentKey($DepartmentKey)
    {
      $this->DepartmentKey = $DepartmentKey;
      return $this;
    }

    /**
     * @return DivisionKey
     */
    public function getDivisionKey()
    {
      return $this->DivisionKey;
    }

    /**
     * @param DivisionKey $DivisionKey
     * @return EmployeeSummary
     */
    public function setDivisionKey($DivisionKey)
    {
      $this->DivisionKey = $DivisionKey;
      return $this;
    }

    /**
     * @return EmployeeKey
     */
    public function getEmployeeKey()
    {
      return $this->EmployeeKey;
    }

    /**
     * @param EmployeeKey $EmployeeKey
     * @return EmployeeSummary
     */
    public function setEmployeeKey($EmployeeKey)
    {
      $this->EmployeeKey = $EmployeeKey;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsActive()
    {
      return $this->IsActive;
    }

    /**
     * @param boolean $IsActive
     * @return EmployeeSummary
     */
    public function setIsActive($IsActive)
    {
      $this->IsActive = $IsActive;
      return $this;
    }

    /**
     * @return Name
     */
    public function getName()
    {
      return $this->Name;
    }

    /**
     * @param Name $Name
     * @return EmployeeSummary
     */
    public function setName($Name)
    {
      $this->Name = $Name;
      return $this;
    }

    /**
     * @return PositionKey
     */
    public function getPositionKey()
    {
      return $this->PositionKey;
    }

    /**
     * @param PositionKey $PositionKey
     * @return EmployeeSummary
     */
    public function setPositionKey($PositionKey)
    {
      $this->PositionKey = $PositionKey;
      return $this;
    }

    /**
     * @return SupervisorKey
     */
    public function getSupervisorKey()
    {
      return $this->SupervisorKey;
    }

    /**
     * @param SupervisorKey $SupervisorKey
     * @return EmployeeSummary
     */
    public function setSupervisorKey($SupervisorKey)
    {
      $this->SupervisorKey = $SupervisorKey;
      return $this;
    }

    /**
     * @return WorkersCompensationKey
     */
    public function getWorkersCompensationKey()
    {
      return $this->WorkersCompensationKey;
    }

    /**
     * @param WorkersCompensationKey $WorkersCompensationKey
     * @return EmployeeSummary
     */
    public function setWorkersCompensationKey($WorkersCompensationKey)
    {
      $this->WorkersCompensationKey = $WorkersCompensationKey;
      return $this;
    }

}
