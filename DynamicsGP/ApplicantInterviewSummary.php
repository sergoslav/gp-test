<?php

class ApplicantInterviewSummary
{

    /**
     * @var ApplicantInterviewTypeKey $ApplicantInterviewKey
     */
    protected $ApplicantInterviewKey = null;

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
     * @return ApplicantInterviewSummary
     */
    public function setApplicantInterviewKey($ApplicantInterviewKey)
    {
      $this->ApplicantInterviewKey = $ApplicantInterviewKey;
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
     * @return ApplicantInterviewSummary
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
     * @return ApplicantInterviewSummary
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
     * @return ApplicantInterviewSummary
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
     * @return PositionKey
     */
    public function getPositionKey()
    {
      return $this->PositionKey;
    }

    /**
     * @param PositionKey $PositionKey
     * @return ApplicantInterviewSummary
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
     * @return ApplicantInterviewSummary
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
     * @return ApplicantInterviewSummary
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
     * @return ApplicantInterviewSummary
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
     * @return ApplicantInterviewSummary
     */
    public function setWeightedScore($WeightedScore)
    {
      $this->WeightedScore = $WeightedScore;
      return $this;
    }

}
