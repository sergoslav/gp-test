<?php

class HRRequisition extends BusinessObject
{

    /**
     * @var HRRequisitionAdvertisingList $AdvertisingList
     */
    protected $AdvertisingList = null;

    /**
     * @var int $ApplicantsApplied
     */
    protected $ApplicantsApplied = null;

    /**
     * @var int $ApplicantsInterviewed
     */
    protected $ApplicantsInterviewed = null;

    /**
     * @var string $CompanyCode
     */
    protected $CompanyCode = null;

    /**
     * @var DepartmentKey $DepartmentKey
     */
    protected $DepartmentKey = null;

    /**
     * @var DivisionKey $DivisionKey
     */
    protected $DivisionKey = null;

    /**
     * @var \DateTime $InternalCloseDate
     */
    protected $InternalCloseDate = null;

    /**
     * @var \DateTime $InternalPostDate
     */
    protected $InternalPostDate = null;

    /**
     * @var HRRequisitionPostingType $JobPostingType
     */
    protected $JobPostingType = null;

    /**
     * @var string $LastModifiedBy
     */
    protected $LastModifiedBy = null;

    /**
     * @var \DateTime $LastModifiedDate
     */
    protected $LastModifiedDate = null;

    /**
     * @var ManagerKey $ManagerKey
     */
    protected $ManagerKey = null;

    /**
     * @var \DateTime $OpeningDate
     */
    protected $OpeningDate = null;

    /**
     * @var PositionKey $PositionKey
     */
    protected $PositionKey = null;

    /**
     * @var int $PositionsAvailable
     */
    protected $PositionsAvailable = null;

    /**
     * @var int $PositionsFilled
     */
    protected $PositionsFilled = null;

    /**
     * @var string $Recruiter
     */
    protected $Recruiter = null;

    /**
     * @var HRRequisitionCosts $RequisitionCosts
     */
    protected $RequisitionCosts = null;

    /**
     * @var HRRequisitionNumberKey $RequisitionNumber
     */
    protected $RequisitionNumber = null;

    /**
     * @var HRRequisitionStatus $Status
     */
    protected $Status = null;

    /**
     * @var SupervisorKey $SupervisorKey
     */
    protected $SupervisorKey = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return HRRequisitionAdvertisingList
     */
    public function getAdvertisingList()
    {
      return $this->AdvertisingList;
    }

    /**
     * @param HRRequisitionAdvertisingList $AdvertisingList
     * @return HRRequisition
     */
    public function setAdvertisingList($AdvertisingList)
    {
      $this->AdvertisingList = $AdvertisingList;
      return $this;
    }

    /**
     * @return int
     */
    public function getApplicantsApplied()
    {
      return $this->ApplicantsApplied;
    }

    /**
     * @param int $ApplicantsApplied
     * @return HRRequisition
     */
    public function setApplicantsApplied($ApplicantsApplied)
    {
      $this->ApplicantsApplied = $ApplicantsApplied;
      return $this;
    }

    /**
     * @return int
     */
    public function getApplicantsInterviewed()
    {
      return $this->ApplicantsInterviewed;
    }

    /**
     * @param int $ApplicantsInterviewed
     * @return HRRequisition
     */
    public function setApplicantsInterviewed($ApplicantsInterviewed)
    {
      $this->ApplicantsInterviewed = $ApplicantsInterviewed;
      return $this;
    }

    /**
     * @return string
     */
    public function getCompanyCode()
    {
      return $this->CompanyCode;
    }

    /**
     * @param string $CompanyCode
     * @return HRRequisition
     */
    public function setCompanyCode($CompanyCode)
    {
      $this->CompanyCode = $CompanyCode;
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
     * @return HRRequisition
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
     * @return HRRequisition
     */
    public function setDivisionKey($DivisionKey)
    {
      $this->DivisionKey = $DivisionKey;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getInternalCloseDate()
    {
      if ($this->InternalCloseDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->InternalCloseDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $InternalCloseDate
     * @return HRRequisition
     */
    public function setInternalCloseDate(\DateTime $InternalCloseDate = null)
    {
      if ($InternalCloseDate == null) {
       $this->InternalCloseDate = null;
      } else {
        $this->InternalCloseDate = $InternalCloseDate->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getInternalPostDate()
    {
      if ($this->InternalPostDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->InternalPostDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $InternalPostDate
     * @return HRRequisition
     */
    public function setInternalPostDate(\DateTime $InternalPostDate = null)
    {
      if ($InternalPostDate == null) {
       $this->InternalPostDate = null;
      } else {
        $this->InternalPostDate = $InternalPostDate->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return HRRequisitionPostingType
     */
    public function getJobPostingType()
    {
      return $this->JobPostingType;
    }

    /**
     * @param HRRequisitionPostingType $JobPostingType
     * @return HRRequisition
     */
    public function setJobPostingType($JobPostingType)
    {
      $this->JobPostingType = $JobPostingType;
      return $this;
    }

    /**
     * @return string
     */
    public function getLastModifiedBy()
    {
      return $this->LastModifiedBy;
    }

    /**
     * @param string $LastModifiedBy
     * @return HRRequisition
     */
    public function setLastModifiedBy($LastModifiedBy)
    {
      $this->LastModifiedBy = $LastModifiedBy;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getLastModifiedDate()
    {
      if ($this->LastModifiedDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->LastModifiedDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $LastModifiedDate
     * @return HRRequisition
     */
    public function setLastModifiedDate(\DateTime $LastModifiedDate = null)
    {
      if ($LastModifiedDate == null) {
       $this->LastModifiedDate = null;
      } else {
        $this->LastModifiedDate = $LastModifiedDate->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return ManagerKey
     */
    public function getManagerKey()
    {
      return $this->ManagerKey;
    }

    /**
     * @param ManagerKey $ManagerKey
     * @return HRRequisition
     */
    public function setManagerKey($ManagerKey)
    {
      $this->ManagerKey = $ManagerKey;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getOpeningDate()
    {
      if ($this->OpeningDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->OpeningDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $OpeningDate
     * @return HRRequisition
     */
    public function setOpeningDate(\DateTime $OpeningDate = null)
    {
      if ($OpeningDate == null) {
       $this->OpeningDate = null;
      } else {
        $this->OpeningDate = $OpeningDate->format(\DateTime::ATOM);
      }
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
     * @return HRRequisition
     */
    public function setPositionKey($PositionKey)
    {
      $this->PositionKey = $PositionKey;
      return $this;
    }

    /**
     * @return int
     */
    public function getPositionsAvailable()
    {
      return $this->PositionsAvailable;
    }

    /**
     * @param int $PositionsAvailable
     * @return HRRequisition
     */
    public function setPositionsAvailable($PositionsAvailable)
    {
      $this->PositionsAvailable = $PositionsAvailable;
      return $this;
    }

    /**
     * @return int
     */
    public function getPositionsFilled()
    {
      return $this->PositionsFilled;
    }

    /**
     * @param int $PositionsFilled
     * @return HRRequisition
     */
    public function setPositionsFilled($PositionsFilled)
    {
      $this->PositionsFilled = $PositionsFilled;
      return $this;
    }

    /**
     * @return string
     */
    public function getRecruiter()
    {
      return $this->Recruiter;
    }

    /**
     * @param string $Recruiter
     * @return HRRequisition
     */
    public function setRecruiter($Recruiter)
    {
      $this->Recruiter = $Recruiter;
      return $this;
    }

    /**
     * @return HRRequisitionCosts
     */
    public function getRequisitionCosts()
    {
      return $this->RequisitionCosts;
    }

    /**
     * @param HRRequisitionCosts $RequisitionCosts
     * @return HRRequisition
     */
    public function setRequisitionCosts($RequisitionCosts)
    {
      $this->RequisitionCosts = $RequisitionCosts;
      return $this;
    }

    /**
     * @return HRRequisitionNumberKey
     */
    public function getRequisitionNumber()
    {
      return $this->RequisitionNumber;
    }

    /**
     * @param HRRequisitionNumberKey $RequisitionNumber
     * @return HRRequisition
     */
    public function setRequisitionNumber($RequisitionNumber)
    {
      $this->RequisitionNumber = $RequisitionNumber;
      return $this;
    }

    /**
     * @return HRRequisitionStatus
     */
    public function getStatus()
    {
      return $this->Status;
    }

    /**
     * @param HRRequisitionStatus $Status
     * @return HRRequisition
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
     * @return HRRequisition
     */
    public function setSupervisorKey($SupervisorKey)
    {
      $this->SupervisorKey = $SupervisorKey;
      return $this;
    }

}
