<?php

class ApplicantWorkHistory extends BusinessObject
{

    /**
     * @var ApplicantWorkHistoryKey $ApplicantWorkHistoryKey
     */
    protected $ApplicantWorkHistoryKey = null;

    /**
     * @var CompensationPeriod $CompensationPeriod
     */
    protected $CompensationPeriod = null;

    /**
     * @var boolean $DeleteOnUpdate
     */
    protected $DeleteOnUpdate = null;

    /**
     * @var \DateTime $EndDate
     */
    protected $EndDate = null;

    /**
     * @var string $LastModifiedBy
     */
    protected $LastModifiedBy = null;

    /**
     * @var \DateTime $LastModifiedDate
     */
    protected $LastModifiedDate = null;

    /**
     * @var string $Notes
     */
    protected $Notes = null;

    /**
     * @var PositionKey $PositionKey
     */
    protected $PositionKey = null;

    /**
     * @var \DateTime $StartDate
     */
    protected $StartDate = null;

    /**
     * @var float $Wage
     */
    protected $Wage = null;

    /**
     * @var int $YearsOfExperience
     */
    protected $YearsOfExperience = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return ApplicantWorkHistoryKey
     */
    public function getApplicantWorkHistoryKey()
    {
      return $this->ApplicantWorkHistoryKey;
    }

    /**
     * @param ApplicantWorkHistoryKey $ApplicantWorkHistoryKey
     * @return ApplicantWorkHistory
     */
    public function setApplicantWorkHistoryKey($ApplicantWorkHistoryKey)
    {
      $this->ApplicantWorkHistoryKey = $ApplicantWorkHistoryKey;
      return $this;
    }

    /**
     * @return CompensationPeriod
     */
    public function getCompensationPeriod()
    {
      return $this->CompensationPeriod;
    }

    /**
     * @param CompensationPeriod $CompensationPeriod
     * @return ApplicantWorkHistory
     */
    public function setCompensationPeriod($CompensationPeriod)
    {
      $this->CompensationPeriod = $CompensationPeriod;
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
     * @return ApplicantWorkHistory
     */
    public function setDeleteOnUpdate($DeleteOnUpdate)
    {
      $this->DeleteOnUpdate = $DeleteOnUpdate;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getEndDate()
    {
      if ($this->EndDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->EndDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $EndDate
     * @return ApplicantWorkHistory
     */
    public function setEndDate(\DateTime $EndDate = null)
    {
      if ($EndDate == null) {
       $this->EndDate = null;
      } else {
        $this->EndDate = $EndDate->format(\DateTime::ATOM);
      }
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
     * @return ApplicantWorkHistory
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
     * @return ApplicantWorkHistory
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
    public function getNotes()
    {
      return $this->Notes;
    }

    /**
     * @param string $Notes
     * @return ApplicantWorkHistory
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
     * @return ApplicantWorkHistory
     */
    public function setPositionKey($PositionKey)
    {
      $this->PositionKey = $PositionKey;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getStartDate()
    {
      if ($this->StartDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->StartDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $StartDate
     * @return ApplicantWorkHistory
     */
    public function setStartDate(\DateTime $StartDate = null)
    {
      if ($StartDate == null) {
       $this->StartDate = null;
      } else {
        $this->StartDate = $StartDate->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return float
     */
    public function getWage()
    {
      return $this->Wage;
    }

    /**
     * @param float $Wage
     * @return ApplicantWorkHistory
     */
    public function setWage($Wage)
    {
      $this->Wage = $Wage;
      return $this;
    }

    /**
     * @return int
     */
    public function getYearsOfExperience()
    {
      return $this->YearsOfExperience;
    }

    /**
     * @param int $YearsOfExperience
     * @return ApplicantWorkHistory
     */
    public function setYearsOfExperience($YearsOfExperience)
    {
      $this->YearsOfExperience = $YearsOfExperience;
      return $this;
    }

}
