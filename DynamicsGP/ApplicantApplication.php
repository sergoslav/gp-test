<?php

class ApplicantApplication extends BusinessObject
{

    /**
     * @var ApplicantSequenceKey $ApplicantApplicationKey
     */
    protected $ApplicantApplicationKey = null;

    /**
     * @var ApplicationColor $Color
     */
    protected $Color = null;

    /**
     * @var string $CompanyCode
     */
    protected $CompanyCode = null;

    /**
     * @var \DateTime $DateApplied
     */
    protected $DateApplied = null;

    /**
     * @var boolean $DeleteOnUpdate
     */
    protected $DeleteOnUpdate = null;

    /**
     * @var DepartmentKey $DepartmentKey
     */
    protected $DepartmentKey = null;

    /**
     * @var DivisionKey $DivisionKey
     */
    protected $DivisionKey = null;

    /**
     * @var boolean $IsReplyLetterSent
     */
    protected $IsReplyLetterSent = null;

    /**
     * @var boolean $IsWillRelocate
     */
    protected $IsWillRelocate = null;

    /**
     * @var string $LastModifiedBy
     */
    protected $LastModifiedBy = null;

    /**
     * @var \DateTime $LastModifiedDate
     */
    protected $LastModifiedDate = null;

    /**
     * @var string $Location
     */
    protected $Location = null;

    /**
     * @var PositionKey $PositionKey
     */
    protected $PositionKey = null;

    /**
     * @var ApplicationReferenceInformation $ReferenceInformation
     */
    protected $ReferenceInformation = null;

    /**
     * @var ApplicationRejectionInformation $RejectionInfomation
     */
    protected $RejectionInfomation = null;

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
      parent::__construct();
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
     * @return ApplicantApplication
     */
    public function setApplicantApplicationKey($ApplicantApplicationKey)
    {
      $this->ApplicantApplicationKey = $ApplicantApplicationKey;
      return $this;
    }

    /**
     * @return ApplicationColor
     */
    public function getColor()
    {
      return $this->Color;
    }

    /**
     * @param ApplicationColor $Color
     * @return ApplicantApplication
     */
    public function setColor($Color)
    {
      $this->Color = $Color;
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
     * @return ApplicantApplication
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
     * @return ApplicantApplication
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
     * @return boolean
     */
    public function getDeleteOnUpdate()
    {
      return $this->DeleteOnUpdate;
    }

    /**
     * @param boolean $DeleteOnUpdate
     * @return ApplicantApplication
     */
    public function setDeleteOnUpdate($DeleteOnUpdate)
    {
      $this->DeleteOnUpdate = $DeleteOnUpdate;
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
     * @return ApplicantApplication
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
     * @return ApplicantApplication
     */
    public function setDivisionKey($DivisionKey)
    {
      $this->DivisionKey = $DivisionKey;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsReplyLetterSent()
    {
      return $this->IsReplyLetterSent;
    }

    /**
     * @param boolean $IsReplyLetterSent
     * @return ApplicantApplication
     */
    public function setIsReplyLetterSent($IsReplyLetterSent)
    {
      $this->IsReplyLetterSent = $IsReplyLetterSent;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsWillRelocate()
    {
      return $this->IsWillRelocate;
    }

    /**
     * @param boolean $IsWillRelocate
     * @return ApplicantApplication
     */
    public function setIsWillRelocate($IsWillRelocate)
    {
      $this->IsWillRelocate = $IsWillRelocate;
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
     * @return ApplicantApplication
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
     * @return ApplicantApplication
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
    public function getLocation()
    {
      return $this->Location;
    }

    /**
     * @param string $Location
     * @return ApplicantApplication
     */
    public function setLocation($Location)
    {
      $this->Location = $Location;
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
     * @return ApplicantApplication
     */
    public function setPositionKey($PositionKey)
    {
      $this->PositionKey = $PositionKey;
      return $this;
    }

    /**
     * @return ApplicationReferenceInformation
     */
    public function getReferenceInformation()
    {
      return $this->ReferenceInformation;
    }

    /**
     * @param ApplicationReferenceInformation $ReferenceInformation
     * @return ApplicantApplication
     */
    public function setReferenceInformation($ReferenceInformation)
    {
      $this->ReferenceInformation = $ReferenceInformation;
      return $this;
    }

    /**
     * @return ApplicationRejectionInformation
     */
    public function getRejectionInfomation()
    {
      return $this->RejectionInfomation;
    }

    /**
     * @param ApplicationRejectionInformation $RejectionInfomation
     * @return ApplicantApplication
     */
    public function setRejectionInfomation($RejectionInfomation)
    {
      $this->RejectionInfomation = $RejectionInfomation;
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
     * @return ApplicantApplication
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
     * @return ApplicantApplication
     */
    public function setStatus($Status)
    {
      $this->Status = $Status;
      return $this;
    }

}
