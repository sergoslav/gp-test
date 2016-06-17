<?php

class ApplicantApplicationSummary
{

    /**
     * @var ApplicantSequenceKey $ApplicantApplicationKey
     */
    protected $ApplicantApplicationKey = null;

    /**
     * @var string $CompanyCode
     */
    protected $CompanyCode = null;

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
     * @var PositionKey $PositionKey
     */
    protected $PositionKey = null;

    /**
     * @var HRRequisitionNumberKey $RequisitionKey
     */
    protected $RequisitionKey = null;

    /**
     * @var ApplicationStatus $Status
     */
    protected $Status = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ApplicantSequenceKey
     */
    public function getApplicantApplicationKey()
    {
      return $this->ApplicantApplicationKey;
    }

    /**
     * @param ApplicantSequenceKey $ApplicantApplicationKey
     * @return ApplicantApplicationSummary
     */
    public function setApplicantApplicationKey($ApplicantApplicationKey)
    {
      $this->ApplicantApplicationKey = $ApplicantApplicationKey;
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
     * @return ApplicantApplicationSummary
     */
    public function setCompanyCode($CompanyCode)
    {
      $this->CompanyCode = $CompanyCode;
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
     * @return ApplicantApplicationSummary
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
     * @return ApplicantApplicationSummary
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
     * @return ApplicantApplicationSummary
     */
    public function setDivisionKey($DivisionKey)
    {
      $this->DivisionKey = $DivisionKey;
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
     * @return ApplicantApplicationSummary
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
     * @return ApplicantApplicationSummary
     */
    public function setRequisitionKey($RequisitionKey)
    {
      $this->RequisitionKey = $RequisitionKey;
      return $this;
    }

    /**
     * @return ApplicationStatus
     */
    public function getStatus()
    {
      return $this->Status;
    }

    /**
     * @param ApplicationStatus $Status
     * @return ApplicantApplicationSummary
     */
    public function setStatus($Status)
    {
      $this->Status = $Status;
      return $this;
    }

}
