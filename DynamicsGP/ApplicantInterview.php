<?php

class ApplicantInterview extends BusinessObject
{

    /**
     * @var ApplicantInterviewTypeKey $ApplicantInterviewKey
     */
    protected $ApplicantInterviewKey = null;

    /**
     * @var string $CompanyCode
     */
    protected $CompanyCode = null;

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
     * @var \DateTime $EffectiveDate
     */
    protected $EffectiveDate = null;

    /**
     * @var ArrayOfApplicantInterviewItem $InterviewItems
     */
    protected $InterviewItems = null;

    /**
     * @var int $InterviewTypeCode
     */
    protected $InterviewTypeCode = null;

    /**
     * @var string $Notes
     */
    protected $Notes = null;

    /**
     * @var PositionKey $PositionKey
     */
    protected $PositionKey = null;

    /**
     * @var int $ReviewRange
     */
    protected $ReviewRange = null;

    /**
     * @var float $ReviewRating
     */
    protected $ReviewRating = null;

    /**
     * @var int $TotalWeight
     */
    protected $TotalWeight = null;

    /**
     * @var int $WeightedScore
     */
    protected $WeightedScore = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return ApplicantInterviewTypeKey
     */
    public function getApplicantInterviewKey()
    {
      return $this->ApplicantInterviewKey;
    }

    /**
     * @param ApplicantInterviewTypeKey $ApplicantInterviewKey
     * @return ApplicantInterview
     */
    public function setApplicantInterviewKey($ApplicantInterviewKey)
    {
      $this->ApplicantInterviewKey = $ApplicantInterviewKey;
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
     * @return ApplicantInterview
     */
    public function setCompanyCode($CompanyCode)
    {
      $this->CompanyCode = $CompanyCode;
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
     * @return ApplicantInterview
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
     * @return ApplicantInterview
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
     * @return ApplicantInterview
     */
    public function setDivisionKey($DivisionKey)
    {
      $this->DivisionKey = $DivisionKey;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getEffectiveDate()
    {
      if ($this->EffectiveDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->EffectiveDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $EffectiveDate
     * @return ApplicantInterview
     */
    public function setEffectiveDate(\DateTime $EffectiveDate = null)
    {
      if ($EffectiveDate == null) {
       $this->EffectiveDate = null;
      } else {
        $this->EffectiveDate = $EffectiveDate->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return ArrayOfApplicantInterviewItem
     */
    public function getInterviewItems()
    {
      return $this->InterviewItems;
    }

    /**
     * @param ArrayOfApplicantInterviewItem $InterviewItems
     * @return ApplicantInterview
     */
    public function setInterviewItems($InterviewItems)
    {
      $this->InterviewItems = $InterviewItems;
      return $this;
    }

    /**
     * @return int
     */
    public function getInterviewTypeCode()
    {
      return $this->InterviewTypeCode;
    }

    /**
     * @param int $InterviewTypeCode
     * @return ApplicantInterview
     */
    public function setInterviewTypeCode($InterviewTypeCode)
    {
      $this->InterviewTypeCode = $InterviewTypeCode;
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
     * @return ApplicantInterview
     */
    public function setNotes($Notes)
    {
      $this->Notes = $Notes;
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
     * @return ApplicantInterview
     */
    public function setPositionKey($PositionKey)
    {
      $this->PositionKey = $PositionKey;
      return $this;
    }

    /**
     * @return int
     */
    public function getReviewRange()
    {
      return $this->ReviewRange;
    }

    /**
     * @param int $ReviewRange
     * @return ApplicantInterview
     */
    public function setReviewRange($ReviewRange)
    {
      $this->ReviewRange = $ReviewRange;
      return $this;
    }

    /**
     * @return float
     */
    public function getReviewRating()
    {
      return $this->ReviewRating;
    }

    /**
     * @param float $ReviewRating
     * @return ApplicantInterview
     */
    public function setReviewRating($ReviewRating)
    {
      $this->ReviewRating = $ReviewRating;
      return $this;
    }

    /**
     * @return int
     */
    public function getTotalWeight()
    {
      return $this->TotalWeight;
    }

    /**
     * @param int $TotalWeight
     * @return ApplicantInterview
     */
    public function setTotalWeight($TotalWeight)
    {
      $this->TotalWeight = $TotalWeight;
      return $this;
    }

    /**
     * @return int
     */
    public function getWeightedScore()
    {
      return $this->WeightedScore;
    }

    /**
     * @param int $WeightedScore
     * @return ApplicantInterview
     */
    public function setWeightedScore($WeightedScore)
    {
      $this->WeightedScore = $WeightedScore;
      return $this;
    }

}
