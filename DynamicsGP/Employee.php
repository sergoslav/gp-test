<?php

class Employee extends BusinessObject
{

    /**
     * @var ArrayOfEmployeeAddress $Addresses
     */
    protected $Addresses = null;

    /**
     * @var \DateTime $BenefitExpiration
     */
    protected $BenefitExpiration = null;

    /**
     * @var \DateTime $BenefitStartDate
     */
    protected $BenefitStartDate = null;

    /**
     * @var \DateTime $BirthDate
     */
    protected $BirthDate = null;

    /**
     * @var EmployeeClassKey $ClassKey
     */
    protected $ClassKey = null;

    /**
     * @var CompanyAddressKey $CompanyAddressKey
     */
    protected $CompanyAddressKey = null;

    /**
     * @var int $DayOfBirth
     */
    protected $DayOfBirth = null;

    /**
     * @var EmployeeAddressKey $DefaultAddressKey
     */
    protected $DefaultAddressKey = null;

    /**
     * @var CashAccountFromType $DefaultCashAccountFromType
     */
    protected $DefaultCashAccountFromType = null;

    /**
     * @var DepartmentKey $DepartmentKey
     */
    protected $DepartmentKey = null;

    /**
     * @var DivisionKey $DivisionKey
     */
    protected $DivisionKey = null;

    /**
     * @var boolean $DoesCalculateMinimumWageBalance
     */
    protected $DoesCalculateMinimumWageBalance = null;

    /**
     * @var \DateTime $EmployeeInactivatedDate
     */
    protected $EmployeeInactivatedDate = null;

    /**
     * @var EmployeeKey $EmployeeKey
     */
    protected $EmployeeKey = null;

    /**
     * @var \DateTime $EmploymentStartDate
     */
    protected $EmploymentStartDate = null;

    /**
     * @var EmploymentType $EmploymentType
     */
    protected $EmploymentType = null;

    /**
     * @var Ethnicity $Ethnicity
     */
    protected $Ethnicity = null;

    /**
     * @var string $FederalClass
     */
    protected $FederalClass = null;

    /**
     * @var GLAccountNumberKey $GLAccountKey
     */
    protected $GLAccountKey = null;

    /**
     * @var Gender $GenderCode
     */
    protected $GenderCode = null;

    /**
     * @var HRStatus $HRStatus
     */
    protected $HRStatus = null;

    /**
     * @var \DateTime $I9RenewDate
     */
    protected $I9RenewDate = null;

    /**
     * @var boolean $IsActive
     */
    protected $IsActive = null;

    /**
     * @var boolean $IsDisabled
     */
    protected $IsDisabled = null;

    /**
     * @var boolean $IsDisabledVeteran
     */
    protected $IsDisabledVeteran = null;

    /**
     * @var boolean $IsI9Verified
     */
    protected $IsI9Verified = null;

    /**
     * @var boolean $IsOtherVeteran
     */
    protected $IsOtherVeteran = null;

    /**
     * @var boolean $IsSmoker
     */
    protected $IsSmoker = null;

    /**
     * @var boolean $IsUnionEmployee
     */
    protected $IsUnionEmployee = null;

    /**
     * @var boolean $IsUnitedStatesCitizen
     */
    protected $IsUnitedStatesCitizen = null;

    /**
     * @var boolean $IsVeteran
     */
    protected $IsVeteran = null;

    /**
     * @var boolean $IsVietnamEraVeteran
     */
    protected $IsVietnamEraVeteran = null;

    /**
     * @var \DateTime $LastWorkedDate
     */
    protected $LastWorkedDate = null;

    /**
     * @var MaritalStatus $MaritalStatus
     */
    protected $MaritalStatus = null;

    /**
     * @var \DateTime $MilitaryDischargeDate
     */
    protected $MilitaryDischargeDate = null;

    /**
     * @var MoneyAmount $MinimumNetPay
     */
    protected $MinimumNetPay = null;

    /**
     * @var string $ModifiedBy
     */
    protected $ModifiedBy = null;

    /**
     * @var \DateTime $ModifiedDate
     */
    protected $ModifiedDate = null;

    /**
     * @var ISO8061Month $MonthOfBirth
     */
    protected $MonthOfBirth = null;

    /**
     * @var Name $Name
     */
    protected $Name = null;

    /**
     * @var PositionKey $PositionKey
     */
    protected $PositionKey = null;

    /**
     * @var PrimaryPayCodeKey $PrimaryPayCodeKey
     */
    protected $PrimaryPayCodeKey = null;

    /**
     * @var string $RateClass
     */
    protected $RateClass = null;

    /**
     * @var string $ReasonEmployeeInactivated
     */
    protected $ReasonEmployeeInactivated = null;

    /**
     * @var Review $Review
     */
    protected $Review = null;

    /**
     * @var SUTAStateKey $SUTAStateKey
     */
    protected $SUTAStateKey = null;

    /**
     * @var SickTime $SickTime
     */
    protected $SickTime = null;

    /**
     * @var Spouse $Spouse
     */
    protected $Spouse = null;

    /**
     * @var string $Status
     */
    protected $Status = null;

    /**
     * @var SupervisorKey $SupervisorKey
     */
    protected $SupervisorKey = null;

    /**
     * @var string $TaxIdentifier
     */
    protected $TaxIdentifier = null;

    /**
     * @var UnionKey $UnionKey
     */
    protected $UnionKey = null;

    /**
     * @var string $UserDefined1
     */
    protected $UserDefined1 = null;

    /**
     * @var string $UserDefined2
     */
    protected $UserDefined2 = null;

    /**
     * @var Vacation $Vacation
     */
    protected $Vacation = null;

    /**
     * @var int $WorkHoursPerYear
     */
    protected $WorkHoursPerYear = null;

    /**
     * @var WorkersCompensationKey $WorkersCompensationKey
     */
    protected $WorkersCompensationKey = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return ArrayOfEmployeeAddress
     */
    public function getAddresses()
    {
      return $this->Addresses;
    }

    /**
     * @param ArrayOfEmployeeAddress $Addresses
     * @return Employee
     */
    public function setAddresses($Addresses)
    {
      $this->Addresses = $Addresses;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getBenefitExpiration()
    {
      if ($this->BenefitExpiration == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->BenefitExpiration);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $BenefitExpiration
     * @return Employee
     */
    public function setBenefitExpiration(\DateTime $BenefitExpiration = null)
    {
      if ($BenefitExpiration == null) {
       $this->BenefitExpiration = null;
      } else {
        $this->BenefitExpiration = $BenefitExpiration->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getBenefitStartDate()
    {
      if ($this->BenefitStartDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->BenefitStartDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $BenefitStartDate
     * @return Employee
     */
    public function setBenefitStartDate(\DateTime $BenefitStartDate = null)
    {
      if ($BenefitStartDate == null) {
       $this->BenefitStartDate = null;
      } else {
        $this->BenefitStartDate = $BenefitStartDate->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getBirthDate()
    {
      if ($this->BirthDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->BirthDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $BirthDate
     * @return Employee
     */
    public function setBirthDate(\DateTime $BirthDate = null)
    {
      if ($BirthDate == null) {
       $this->BirthDate = null;
      } else {
        $this->BirthDate = $BirthDate->format(\DateTime::ATOM);
      }
      return $this;
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
     * @return Employee
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
     * @return Employee
     */
    public function setCompanyAddressKey($CompanyAddressKey)
    {
      $this->CompanyAddressKey = $CompanyAddressKey;
      return $this;
    }

    /**
     * @return int
     */
    public function getDayOfBirth()
    {
      return $this->DayOfBirth;
    }

    /**
     * @param int $DayOfBirth
     * @return Employee
     */
    public function setDayOfBirth($DayOfBirth)
    {
      $this->DayOfBirth = $DayOfBirth;
      return $this;
    }

    /**
     * @return EmployeeAddressKey
     */
    public function getDefaultAddressKey()
    {
      return $this->DefaultAddressKey;
    }

    /**
     * @param EmployeeAddressKey $DefaultAddressKey
     * @return Employee
     */
    public function setDefaultAddressKey($DefaultAddressKey)
    {
      $this->DefaultAddressKey = $DefaultAddressKey;
      return $this;
    }

    /**
     * @return CashAccountFromType
     */
    public function getDefaultCashAccountFromType()
    {
      return $this->DefaultCashAccountFromType;
    }

    /**
     * @param CashAccountFromType $DefaultCashAccountFromType
     * @return Employee
     */
    public function setDefaultCashAccountFromType($DefaultCashAccountFromType)
    {
      $this->DefaultCashAccountFromType = $DefaultCashAccountFromType;
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
     * @return Employee
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
     * @return Employee
     */
    public function setDivisionKey($DivisionKey)
    {
      $this->DivisionKey = $DivisionKey;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getDoesCalculateMinimumWageBalance()
    {
      return $this->DoesCalculateMinimumWageBalance;
    }

    /**
     * @param boolean $DoesCalculateMinimumWageBalance
     * @return Employee
     */
    public function setDoesCalculateMinimumWageBalance($DoesCalculateMinimumWageBalance)
    {
      $this->DoesCalculateMinimumWageBalance = $DoesCalculateMinimumWageBalance;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getEmployeeInactivatedDate()
    {
      if ($this->EmployeeInactivatedDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->EmployeeInactivatedDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $EmployeeInactivatedDate
     * @return Employee
     */
    public function setEmployeeInactivatedDate(\DateTime $EmployeeInactivatedDate = null)
    {
      if ($EmployeeInactivatedDate == null) {
       $this->EmployeeInactivatedDate = null;
      } else {
        $this->EmployeeInactivatedDate = $EmployeeInactivatedDate->format(\DateTime::ATOM);
      }
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
     * @return Employee
     */
    public function setEmployeeKey($EmployeeKey)
    {
      $this->EmployeeKey = $EmployeeKey;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getEmploymentStartDate()
    {
      if ($this->EmploymentStartDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->EmploymentStartDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $EmploymentStartDate
     * @return Employee
     */
    public function setEmploymentStartDate(\DateTime $EmploymentStartDate = null)
    {
      if ($EmploymentStartDate == null) {
       $this->EmploymentStartDate = null;
      } else {
        $this->EmploymentStartDate = $EmploymentStartDate->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return EmploymentType
     */
    public function getEmploymentType()
    {
      return $this->EmploymentType;
    }

    /**
     * @param EmploymentType $EmploymentType
     * @return Employee
     */
    public function setEmploymentType($EmploymentType)
    {
      $this->EmploymentType = $EmploymentType;
      return $this;
    }

    /**
     * @return Ethnicity
     */
    public function getEthnicity()
    {
      return $this->Ethnicity;
    }

    /**
     * @param Ethnicity $Ethnicity
     * @return Employee
     */
    public function setEthnicity($Ethnicity)
    {
      $this->Ethnicity = $Ethnicity;
      return $this;
    }

    /**
     * @return string
     */
    public function getFederalClass()
    {
      return $this->FederalClass;
    }

    /**
     * @param string $FederalClass
     * @return Employee
     */
    public function setFederalClass($FederalClass)
    {
      $this->FederalClass = $FederalClass;
      return $this;
    }

    /**
     * @return GLAccountNumberKey
     */
    public function getGLAccountKey()
    {
      return $this->GLAccountKey;
    }

    /**
     * @param GLAccountNumberKey $GLAccountKey
     * @return Employee
     */
    public function setGLAccountKey($GLAccountKey)
    {
      $this->GLAccountKey = $GLAccountKey;
      return $this;
    }

    /**
     * @return Gender
     */
    public function getGenderCode()
    {
      return $this->GenderCode;
    }

    /**
     * @param Gender $GenderCode
     * @return Employee
     */
    public function setGenderCode($GenderCode)
    {
      $this->GenderCode = $GenderCode;
      return $this;
    }

    /**
     * @return HRStatus
     */
    public function getHRStatus()
    {
      return $this->HRStatus;
    }

    /**
     * @param HRStatus $HRStatus
     * @return Employee
     */
    public function setHRStatus($HRStatus)
    {
      $this->HRStatus = $HRStatus;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getI9RenewDate()
    {
      if ($this->I9RenewDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->I9RenewDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $I9RenewDate
     * @return Employee
     */
    public function setI9RenewDate(\DateTime $I9RenewDate = null)
    {
      if ($I9RenewDate == null) {
       $this->I9RenewDate = null;
      } else {
        $this->I9RenewDate = $I9RenewDate->format(\DateTime::ATOM);
      }
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
     * @return Employee
     */
    public function setIsActive($IsActive)
    {
      $this->IsActive = $IsActive;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsDisabled()
    {
      return $this->IsDisabled;
    }

    /**
     * @param boolean $IsDisabled
     * @return Employee
     */
    public function setIsDisabled($IsDisabled)
    {
      $this->IsDisabled = $IsDisabled;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsDisabledVeteran()
    {
      return $this->IsDisabledVeteran;
    }

    /**
     * @param boolean $IsDisabledVeteran
     * @return Employee
     */
    public function setIsDisabledVeteran($IsDisabledVeteran)
    {
      $this->IsDisabledVeteran = $IsDisabledVeteran;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsI9Verified()
    {
      return $this->IsI9Verified;
    }

    /**
     * @param boolean $IsI9Verified
     * @return Employee
     */
    public function setIsI9Verified($IsI9Verified)
    {
      $this->IsI9Verified = $IsI9Verified;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsOtherVeteran()
    {
      return $this->IsOtherVeteran;
    }

    /**
     * @param boolean $IsOtherVeteran
     * @return Employee
     */
    public function setIsOtherVeteran($IsOtherVeteran)
    {
      $this->IsOtherVeteran = $IsOtherVeteran;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsSmoker()
    {
      return $this->IsSmoker;
    }

    /**
     * @param boolean $IsSmoker
     * @return Employee
     */
    public function setIsSmoker($IsSmoker)
    {
      $this->IsSmoker = $IsSmoker;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsUnionEmployee()
    {
      return $this->IsUnionEmployee;
    }

    /**
     * @param boolean $IsUnionEmployee
     * @return Employee
     */
    public function setIsUnionEmployee($IsUnionEmployee)
    {
      $this->IsUnionEmployee = $IsUnionEmployee;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsUnitedStatesCitizen()
    {
      return $this->IsUnitedStatesCitizen;
    }

    /**
     * @param boolean $IsUnitedStatesCitizen
     * @return Employee
     */
    public function setIsUnitedStatesCitizen($IsUnitedStatesCitizen)
    {
      $this->IsUnitedStatesCitizen = $IsUnitedStatesCitizen;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsVeteran()
    {
      return $this->IsVeteran;
    }

    /**
     * @param boolean $IsVeteran
     * @return Employee
     */
    public function setIsVeteran($IsVeteran)
    {
      $this->IsVeteran = $IsVeteran;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsVietnamEraVeteran()
    {
      return $this->IsVietnamEraVeteran;
    }

    /**
     * @param boolean $IsVietnamEraVeteran
     * @return Employee
     */
    public function setIsVietnamEraVeteran($IsVietnamEraVeteran)
    {
      $this->IsVietnamEraVeteran = $IsVietnamEraVeteran;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getLastWorkedDate()
    {
      if ($this->LastWorkedDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->LastWorkedDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $LastWorkedDate
     * @return Employee
     */
    public function setLastWorkedDate(\DateTime $LastWorkedDate = null)
    {
      if ($LastWorkedDate == null) {
       $this->LastWorkedDate = null;
      } else {
        $this->LastWorkedDate = $LastWorkedDate->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return MaritalStatus
     */
    public function getMaritalStatus()
    {
      return $this->MaritalStatus;
    }

    /**
     * @param MaritalStatus $MaritalStatus
     * @return Employee
     */
    public function setMaritalStatus($MaritalStatus)
    {
      $this->MaritalStatus = $MaritalStatus;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getMilitaryDischargeDate()
    {
      if ($this->MilitaryDischargeDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->MilitaryDischargeDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $MilitaryDischargeDate
     * @return Employee
     */
    public function setMilitaryDischargeDate(\DateTime $MilitaryDischargeDate = null)
    {
      if ($MilitaryDischargeDate == null) {
       $this->MilitaryDischargeDate = null;
      } else {
        $this->MilitaryDischargeDate = $MilitaryDischargeDate->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return MoneyAmount
     */
    public function getMinimumNetPay()
    {
      return $this->MinimumNetPay;
    }

    /**
     * @param MoneyAmount $MinimumNetPay
     * @return Employee
     */
    public function setMinimumNetPay($MinimumNetPay)
    {
      $this->MinimumNetPay = $MinimumNetPay;
      return $this;
    }

    /**
     * @return string
     */
    public function getModifiedBy()
    {
      return $this->ModifiedBy;
    }

    /**
     * @param string $ModifiedBy
     * @return Employee
     */
    public function setModifiedBy($ModifiedBy)
    {
      $this->ModifiedBy = $ModifiedBy;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getModifiedDate()
    {
      if ($this->ModifiedDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->ModifiedDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $ModifiedDate
     * @return Employee
     */
    public function setModifiedDate(\DateTime $ModifiedDate = null)
    {
      if ($ModifiedDate == null) {
       $this->ModifiedDate = null;
      } else {
        $this->ModifiedDate = $ModifiedDate->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return ISO8061Month
     */
    public function getMonthOfBirth()
    {
      return $this->MonthOfBirth;
    }

    /**
     * @param ISO8061Month $MonthOfBirth
     * @return Employee
     */
    public function setMonthOfBirth($MonthOfBirth)
    {
      $this->MonthOfBirth = $MonthOfBirth;
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
     * @return Employee
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
     * @return Employee
     */
    public function setPositionKey($PositionKey)
    {
      $this->PositionKey = $PositionKey;
      return $this;
    }

    /**
     * @return PrimaryPayCodeKey
     */
    public function getPrimaryPayCodeKey()
    {
      return $this->PrimaryPayCodeKey;
    }

    /**
     * @param PrimaryPayCodeKey $PrimaryPayCodeKey
     * @return Employee
     */
    public function setPrimaryPayCodeKey($PrimaryPayCodeKey)
    {
      $this->PrimaryPayCodeKey = $PrimaryPayCodeKey;
      return $this;
    }

    /**
     * @return string
     */
    public function getRateClass()
    {
      return $this->RateClass;
    }

    /**
     * @param string $RateClass
     * @return Employee
     */
    public function setRateClass($RateClass)
    {
      $this->RateClass = $RateClass;
      return $this;
    }

    /**
     * @return string
     */
    public function getReasonEmployeeInactivated()
    {
      return $this->ReasonEmployeeInactivated;
    }

    /**
     * @param string $ReasonEmployeeInactivated
     * @return Employee
     */
    public function setReasonEmployeeInactivated($ReasonEmployeeInactivated)
    {
      $this->ReasonEmployeeInactivated = $ReasonEmployeeInactivated;
      return $this;
    }

    /**
     * @return Review
     */
    public function getReview()
    {
      return $this->Review;
    }

    /**
     * @param Review $Review
     * @return Employee
     */
    public function setReview($Review)
    {
      $this->Review = $Review;
      return $this;
    }

    /**
     * @return SUTAStateKey
     */
    public function getSUTAStateKey()
    {
      return $this->SUTAStateKey;
    }

    /**
     * @param SUTAStateKey $SUTAStateKey
     * @return Employee
     */
    public function setSUTAStateKey($SUTAStateKey)
    {
      $this->SUTAStateKey = $SUTAStateKey;
      return $this;
    }

    /**
     * @return SickTime
     */
    public function getSickTime()
    {
      return $this->SickTime;
    }

    /**
     * @param SickTime $SickTime
     * @return Employee
     */
    public function setSickTime($SickTime)
    {
      $this->SickTime = $SickTime;
      return $this;
    }

    /**
     * @return Spouse
     */
    public function getSpouse()
    {
      return $this->Spouse;
    }

    /**
     * @param Spouse $Spouse
     * @return Employee
     */
    public function setSpouse($Spouse)
    {
      $this->Spouse = $Spouse;
      return $this;
    }

    /**
     * @return string
     */
    public function getStatus()
    {
      return $this->Status;
    }

    /**
     * @param string $Status
     * @return Employee
     */
    public function setStatus($Status)
    {
      $this->Status = $Status;
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
     * @return Employee
     */
    public function setSupervisorKey($SupervisorKey)
    {
      $this->SupervisorKey = $SupervisorKey;
      return $this;
    }

    /**
     * @return string
     */
    public function getTaxIdentifier()
    {
      return $this->TaxIdentifier;
    }

    /**
     * @param string $TaxIdentifier
     * @return Employee
     */
    public function setTaxIdentifier($TaxIdentifier)
    {
      $this->TaxIdentifier = $TaxIdentifier;
      return $this;
    }

    /**
     * @return UnionKey
     */
    public function getUnionKey()
    {
      return $this->UnionKey;
    }

    /**
     * @param UnionKey $UnionKey
     * @return Employee
     */
    public function setUnionKey($UnionKey)
    {
      $this->UnionKey = $UnionKey;
      return $this;
    }

    /**
     * @return string
     */
    public function getUserDefined1()
    {
      return $this->UserDefined1;
    }

    /**
     * @param string $UserDefined1
     * @return Employee
     */
    public function setUserDefined1($UserDefined1)
    {
      $this->UserDefined1 = $UserDefined1;
      return $this;
    }

    /**
     * @return string
     */
    public function getUserDefined2()
    {
      return $this->UserDefined2;
    }

    /**
     * @param string $UserDefined2
     * @return Employee
     */
    public function setUserDefined2($UserDefined2)
    {
      $this->UserDefined2 = $UserDefined2;
      return $this;
    }

    /**
     * @return Vacation
     */
    public function getVacation()
    {
      return $this->Vacation;
    }

    /**
     * @param Vacation $Vacation
     * @return Employee
     */
    public function setVacation($Vacation)
    {
      $this->Vacation = $Vacation;
      return $this;
    }

    /**
     * @return int
     */
    public function getWorkHoursPerYear()
    {
      return $this->WorkHoursPerYear;
    }

    /**
     * @param int $WorkHoursPerYear
     * @return Employee
     */
    public function setWorkHoursPerYear($WorkHoursPerYear)
    {
      $this->WorkHoursPerYear = $WorkHoursPerYear;
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
     * @return Employee
     */
    public function setWorkersCompensationKey($WorkersCompensationKey)
    {
      $this->WorkersCompensationKey = $WorkersCompensationKey;
      return $this;
    }

}
