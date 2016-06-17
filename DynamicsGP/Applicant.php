<?php

class Applicant extends BusinessObject
{

    /**
     * @var ApplicantAddress $Address
     */
    protected $Address = null;

    /**
     * @var AgeCode $AgeCode
     */
    protected $AgeCode = null;

    /**
     * @var ApplicantKey $ApplicantKey
     */
    protected $ApplicantKey = null;

    /**
     * @var ApplicationColor $ApplicationColor
     */
    protected $ApplicationColor = null;

    /**
     * @var ApplicationStatus $ApplicationStatus
     */
    protected $ApplicationStatus = null;

    /**
     * @var ArrayOfApplicantApplication $Applications
     */
    protected $Applications = null;

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
     * @var Ethnicity $Ethnicity
     */
    protected $Ethnicity = null;

    /**
     * @var string $FirstName
     */
    protected $FirstName = null;

    /**
     * @var Gender $Gender
     */
    protected $Gender = null;

    /**
     * @var HRRequisitionNumberKey $HRRequisistionKey
     */
    protected $HRRequisistionKey = null;

    /**
     * @var ArrayOfApplicantInterview $Interviews
     */
    protected $Interviews = null;

    /**
     * @var boolean $IsDisabled
     */
    protected $IsDisabled = null;

    /**
     * @var boolean $IsDisabledVeteran
     */
    protected $IsDisabledVeteran = null;

    /**
     * @var boolean $IsOtherVeteran
     */
    protected $IsOtherVeteran = null;

    /**
     * @var boolean $IsReplyLetterSent
     */
    protected $IsReplyLetterSent = null;

    /**
     * @var boolean $IsVeteran
     */
    protected $IsVeteran = null;

    /**
     * @var boolean $IsVietnamEraVeteran
     */
    protected $IsVietnamEraVeteran = null;

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
     * @var string $LastName
     */
    protected $LastName = null;

    /**
     * @var string $Location
     */
    protected $Location = null;

    /**
     * @var string $MiddleName
     */
    protected $MiddleName = null;

    /**
     * @var PositionKey $PositionKey
     */
    protected $PositionKey = null;

    /**
     * @var ArrayOfApplicantWorkHistory $PreviousEmployers
     */
    protected $PreviousEmployers = null;

    /**
     * @var ApplicationReferenceInformation $ReferenceInformation
     */
    protected $ReferenceInformation = null;

    /**
     * @var ArrayOfApplicantReference $References
     */
    protected $References = null;

    /**
     * @var ApplicationRejectionInformation $RejectionInformation
     */
    protected $RejectionInformation = null;

    /**
     * @var ArrayOfApplicantEducation $Schools
     */
    protected $Schools = null;

    /**
     * @var SequenceKey $SequenceKey
     */
    protected $SequenceKey = null;

    /**
     * @var ArrayOfApplicantSkill $Skills
     */
    protected $Skills = null;

    /**
     * @var string $TaxIdentifier
     */
    protected $TaxIdentifier = null;

    /**
     * @var ArrayOfApplicantTest $Tests
     */
    protected $Tests = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return ApplicantAddress
     */
    public function getAddress()
    {
      return $this->Address;
    }

    /**
     * @param ApplicantAddress $Address
     * @return Applicant
     */
    public function setAddress($Address)
    {
      $this->Address = $Address;
      return $this;
    }

    /**
     * @return AgeCode
     */
    public function getAgeCode()
    {
      return $this->AgeCode;
    }

    /**
     * @param AgeCode $AgeCode
     * @return Applicant
     */
    public function setAgeCode($AgeCode)
    {
      $this->AgeCode = $AgeCode;
      return $this;
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
     * @return Applicant
     */
    public function setApplicantKey($ApplicantKey)
    {
      $this->ApplicantKey = $ApplicantKey;
      return $this;
    }

    /**
     * @return ApplicationColor
     */
    public function getApplicationColor()
    {
      return $this->ApplicationColor;
    }

    /**
     * @param ApplicationColor $ApplicationColor
     * @return Applicant
     */
    public function setApplicationColor($ApplicationColor)
    {
      $this->ApplicationColor = $ApplicationColor;
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
     * @return Applicant
     */
    public function setApplicationStatus($ApplicationStatus)
    {
      $this->ApplicationStatus = $ApplicationStatus;
      return $this;
    }

    /**
     * @return ArrayOfApplicantApplication
     */
    public function getApplications()
    {
      return $this->Applications;
    }

    /**
     * @param ArrayOfApplicantApplication $Applications
     * @return Applicant
     */
    public function setApplications($Applications)
    {
      $this->Applications = $Applications;
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
     * @return Applicant
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
     * @return Applicant
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
     * @return Applicant
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
     * @return Applicant
     */
    public function setDivisionKey($DivisionKey)
    {
      $this->DivisionKey = $DivisionKey;
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
     * @return Applicant
     */
    public function setEthnicity($Ethnicity)
    {
      $this->Ethnicity = $Ethnicity;
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
     * @return Applicant
     */
    public function setFirstName($FirstName)
    {
      $this->FirstName = $FirstName;
      return $this;
    }

    /**
     * @return Gender
     */
    public function getGender()
    {
      return $this->Gender;
    }

    /**
     * @param Gender $Gender
     * @return Applicant
     */
    public function setGender($Gender)
    {
      $this->Gender = $Gender;
      return $this;
    }

    /**
     * @return HRRequisitionNumberKey
     */
    public function getHRRequisistionKey()
    {
      return $this->HRRequisistionKey;
    }

    /**
     * @param HRRequisitionNumberKey $HRRequisistionKey
     * @return Applicant
     */
    public function setHRRequisistionKey($HRRequisistionKey)
    {
      $this->HRRequisistionKey = $HRRequisistionKey;
      return $this;
    }

    /**
     * @return ArrayOfApplicantInterview
     */
    public function getInterviews()
    {
      return $this->Interviews;
    }

    /**
     * @param ArrayOfApplicantInterview $Interviews
     * @return Applicant
     */
    public function setInterviews($Interviews)
    {
      $this->Interviews = $Interviews;
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
     * @return Applicant
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
     * @return Applicant
     */
    public function setIsDisabledVeteran($IsDisabledVeteran)
    {
      $this->IsDisabledVeteran = $IsDisabledVeteran;
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
     * @return Applicant
     */
    public function setIsOtherVeteran($IsOtherVeteran)
    {
      $this->IsOtherVeteran = $IsOtherVeteran;
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
     * @return Applicant
     */
    public function setIsReplyLetterSent($IsReplyLetterSent)
    {
      $this->IsReplyLetterSent = $IsReplyLetterSent;
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
     * @return Applicant
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
     * @return Applicant
     */
    public function setIsVietnamEraVeteran($IsVietnamEraVeteran)
    {
      $this->IsVietnamEraVeteran = $IsVietnamEraVeteran;
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
     * @return Applicant
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
     * @return Applicant
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
     * @return Applicant
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
     * @return Applicant
     */
    public function setLastName($LastName)
    {
      $this->LastName = $LastName;
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
     * @return Applicant
     */
    public function setLocation($Location)
    {
      $this->Location = $Location;
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
     * @return Applicant
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
     * @return Applicant
     */
    public function setPositionKey($PositionKey)
    {
      $this->PositionKey = $PositionKey;
      return $this;
    }

    /**
     * @return ArrayOfApplicantWorkHistory
     */
    public function getPreviousEmployers()
    {
      return $this->PreviousEmployers;
    }

    /**
     * @param ArrayOfApplicantWorkHistory $PreviousEmployers
     * @return Applicant
     */
    public function setPreviousEmployers($PreviousEmployers)
    {
      $this->PreviousEmployers = $PreviousEmployers;
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
     * @return Applicant
     */
    public function setReferenceInformation($ReferenceInformation)
    {
      $this->ReferenceInformation = $ReferenceInformation;
      return $this;
    }

    /**
     * @return ArrayOfApplicantReference
     */
    public function getReferences()
    {
      return $this->References;
    }

    /**
     * @param ArrayOfApplicantReference $References
     * @return Applicant
     */
    public function setReferences($References)
    {
      $this->References = $References;
      return $this;
    }

    /**
     * @return ApplicationRejectionInformation
     */
    public function getRejectionInformation()
    {
      return $this->RejectionInformation;
    }

    /**
     * @param ApplicationRejectionInformation $RejectionInformation
     * @return Applicant
     */
    public function setRejectionInformation($RejectionInformation)
    {
      $this->RejectionInformation = $RejectionInformation;
      return $this;
    }

    /**
     * @return ArrayOfApplicantEducation
     */
    public function getSchools()
    {
      return $this->Schools;
    }

    /**
     * @param ArrayOfApplicantEducation $Schools
     * @return Applicant
     */
    public function setSchools($Schools)
    {
      $this->Schools = $Schools;
      return $this;
    }

    /**
     * @return SequenceKey
     */
    public function getSequenceKey()
    {
      return $this->SequenceKey;
    }

    /**
     * @param SequenceKey $SequenceKey
     * @return Applicant
     */
    public function setSequenceKey($SequenceKey)
    {
      $this->SequenceKey = $SequenceKey;
      return $this;
    }

    /**
     * @return ArrayOfApplicantSkill
     */
    public function getSkills()
    {
      return $this->Skills;
    }

    /**
     * @param ArrayOfApplicantSkill $Skills
     * @return Applicant
     */
    public function setSkills($Skills)
    {
      $this->Skills = $Skills;
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
     * @return Applicant
     */
    public function setTaxIdentifier($TaxIdentifier)
    {
      $this->TaxIdentifier = $TaxIdentifier;
      return $this;
    }

    /**
     * @return ArrayOfApplicantTest
     */
    public function getTests()
    {
      return $this->Tests;
    }

    /**
     * @param ArrayOfApplicantTest $Tests
     * @return Applicant
     */
    public function setTests($Tests)
    {
      $this->Tests = $Tests;
      return $this;
    }

}
