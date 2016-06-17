<?php

class ApplicantEducation extends BusinessObject
{

    /**
     * @var ApplicantSequenceKey $ApplicantEducationKey
     */
    protected $ApplicantEducationKey = null;

    /**
     * @var string $Degree
     */
    protected $Degree = null;

    /**
     * @var boolean $DeleteOnUpdate
     */
    protected $DeleteOnUpdate = null;

    /**
     * @var string $GPABase
     */
    protected $GPABase = null;

    /**
     * @var string $GradePointAverage
     */
    protected $GradePointAverage = null;

    /**
     * @var string $LastModifiedBy
     */
    protected $LastModifiedBy = null;

    /**
     * @var \DateTime $LastModifiedDate
     */
    protected $LastModifiedDate = null;

    /**
     * @var string $Major
     */
    protected $Major = null;

    /**
     * @var string $Notes
     */
    protected $Notes = null;

    /**
     * @var string $School
     */
    protected $School = null;

    /**
     * @var string $YearGraduated
     */
    protected $YearGraduated = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return ApplicantSequenceKey
     */
    public function getApplicantEducationKey()
    {
      return $this->ApplicantEducationKey;
    }

    /**
     * @param ApplicantSequenceKey $ApplicantEducationKey
     * @return ApplicantEducation
     */
    public function setApplicantEducationKey($ApplicantEducationKey)
    {
      $this->ApplicantEducationKey = $ApplicantEducationKey;
      return $this;
    }

    /**
     * @return string
     */
    public function getDegree()
    {
      return $this->Degree;
    }

    /**
     * @param string $Degree
     * @return ApplicantEducation
     */
    public function setDegree($Degree)
    {
      $this->Degree = $Degree;
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
     * @return ApplicantEducation
     */
    public function setDeleteOnUpdate($DeleteOnUpdate)
    {
      $this->DeleteOnUpdate = $DeleteOnUpdate;
      return $this;
    }

    /**
     * @return string
     */
    public function getGPABase()
    {
      return $this->GPABase;
    }

    /**
     * @param string $GPABase
     * @return ApplicantEducation
     */
    public function setGPABase($GPABase)
    {
      $this->GPABase = $GPABase;
      return $this;
    }

    /**
     * @return string
     */
    public function getGradePointAverage()
    {
      return $this->GradePointAverage;
    }

    /**
     * @param string $GradePointAverage
     * @return ApplicantEducation
     */
    public function setGradePointAverage($GradePointAverage)
    {
      $this->GradePointAverage = $GradePointAverage;
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
     * @return ApplicantEducation
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
     * @return ApplicantEducation
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
    public function getMajor()
    {
      return $this->Major;
    }

    /**
     * @param string $Major
     * @return ApplicantEducation
     */
    public function setMajor($Major)
    {
      $this->Major = $Major;
      return $this;
    }

    /**
     * @return string
     */
    public function getNotes()
    {
      return $this->Notes;
    }

    /**
     * @param string $Notes
     * @return ApplicantEducation
     */
    public function setNotes($Notes)
    {
      $this->Notes = $Notes;
      return $this;
    }

    /**
     * @return string
     */
    public function getSchool()
    {
      return $this->School;
    }

    /**
     * @param string $School
     * @return ApplicantEducation
     */
    public function setSchool($School)
    {
      $this->School = $School;
      return $this;
    }

    /**
     * @return string
     */
    public function getYearGraduated()
    {
      return $this->YearGraduated;
    }

    /**
     * @param string $YearGraduated
     * @return ApplicantEducation
     */
    public function setYearGraduated($YearGraduated)
    {
      $this->YearGraduated = $YearGraduated;
      return $this;
    }

}
