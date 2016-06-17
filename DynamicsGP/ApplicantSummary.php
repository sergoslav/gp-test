<?php

class ApplicantSummary
{

    /**
     * @var ApplicantKey $ApplicantKey
     */
    protected $ApplicantKey = null;

    /**
     * @var ApplicationStatus $ApplicationStatus
     */
    protected $ApplicationStatus = null;

    /**
     * @var \DateTime $DateApplied
     */
    protected $DateApplied = null;

    /**
     * @var DepartmentKey $DepartmentKey
     */
    protected $DepartmentKey = null;

    /**
     * @var DivisionKey $DivisionKey
     */
    protected $DivisionKey = null;

    /**
     * @var string $FirstName
     */
    protected $FirstName = null;

    /**
     * @var \DateTime $LastModifiedDate
     */
    protected $LastModifiedDate = null;

    /**
     * @var string $LastName
     */
    protected $LastName = null;

    /**
     * @var string $MiddleName
     */
    protected $MiddleName = null;

    /**
     * @var PositionKey $PositionKey
     */
    protected $PositionKey = null;

    /**
     * @var HRRequisitionNumberKey $RequisitionKey
     */
    protected $RequisitionKey = null;

    /**
     * @var string $TaxIdentifier
     */
    protected $TaxIdentifier = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ApplicantKey
     */
    public function getApplicantKey()
    {
      return $this->ApplicantKey;
    }

    /**
     * @param ApplicantKey $ApplicantKey
     * @return ApplicantSummary
     */
    public function setApplicantKey($ApplicantKey)
    {
      $this->ApplicantKey = $ApplicantKey;
      return $this;
    }

    /**
     * @return ApplicationStatus
     */
    public function getApplicationStatus()
    {
      return $this->ApplicationStatus;
    }

    /**
     * @param ApplicationStatus $ApplicationStatus
     * @return ApplicantSummary
     */
    public function setApplicationStatus($ApplicationStatus)
    {
      $this->ApplicationStatus = $ApplicationStatus;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDateApplied()
    {
      if ($this->DateApplied == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->DateApplied);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $DateApplied
     * @return ApplicantSummary
     */
    public function setDateApplied(\DateTime $DateApplied = null)
    {
      if ($DateApplied == null) {
       $this->DateApplied = null;
      } else {
        $this->DateApplied = $DateApplied->format(\DateTime::ATOM);
      }
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
     * @return ApplicantSummary
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
     * @return ApplicantSummary
     */
    public function setDivisionKey($DivisionKey)
    {
      $this->DivisionKey = $DivisionKey;
      return $this;
    }

    /**
     * @return string
     */
    public function getFirstName()
    {
      return $this->FirstName;
    }

    /**
     * @param string $FirstName
     * @return ApplicantSummary
     */
    public function setFirstName($FirstName)
    {
      $this->FirstName = $FirstName;
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
     * @return ApplicantSummary
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
     * @return string
     */
    public function getLastName()
    {
      return $this->LastName;
    }

    /**
     * @param string $LastName
     * @return ApplicantSummary
     */
    public function setLastName($LastName)
    {
      $this->LastName = $LastName;
      return $this;
    }

    /**
     * @return string
     */
    public function getMiddleName()
    {
      return $this->MiddleName;
    }

    /**
     * @param string $MiddleName
     * @return ApplicantSummary
     */
    public function setMiddleName($MiddleName)
    {
      $this->MiddleName = $MiddleName;
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
     * @return ApplicantSummary
     */
    public function setPositionKey($PositionKey)
    {
      $this->PositionKey = $PositionKey;
      return $this;
    }

    /**
     * @return HRRequisitionNumberKey
     */
    public function getRequisitionKey()
    {
      return $this->RequisitionKey;
    }

    /**
     * @param HRRequisitionNumberKey $RequisitionKey
     * @return ApplicantSummary
     */
    public function setRequisitionKey($RequisitionKey)
    {
      $this->RequisitionKey = $RequisitionKey;
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
     * @return ApplicantSummary
     */
    public function setTaxIdentifier($TaxIdentifier)
    {
      $this->TaxIdentifier = $TaxIdentifier;
      return $this;
    }

}
