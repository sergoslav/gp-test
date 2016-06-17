<?php

class ApplicantTest extends BusinessObject
{

    /**
     * @var ApplicantTestKey $ApplicantTestKey
     */
    protected $ApplicantTestKey = null;

    /**
     * @var boolean $DeleteOnUpdate
     */
    protected $DeleteOnUpdate = null;

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
     * @var string $Score
     */
    protected $Score = null;

    /**
     * @var \DateTime $TestDate
     */
    protected $TestDate = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return ApplicantTestKey
     */
    public function getApplicantTestKey()
    {
      return $this->ApplicantTestKey;
    }

    /**
     * @param ApplicantTestKey $ApplicantTestKey
     * @return ApplicantTest
     */
    public function setApplicantTestKey($ApplicantTestKey)
    {
      $this->ApplicantTestKey = $ApplicantTestKey;
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
     * @return ApplicantTest
     */
    public function setDeleteOnUpdate($DeleteOnUpdate)
    {
      $this->DeleteOnUpdate = $DeleteOnUpdate;
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
     * @return ApplicantTest
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
     * @return ApplicantTest
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
     * @return ApplicantTest
     */
    public function setNotes($Notes)
    {
      $this->Notes = $Notes;
      return $this;
    }

    /**
     * @return string
     */
    public function getScore()
    {
      return $this->Score;
    }

    /**
     * @param string $Score
     * @return ApplicantTest
     */
    public function setScore($Score)
    {
      $this->Score = $Score;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getTestDate()
    {
      if ($this->TestDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->TestDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $TestDate
     * @return ApplicantTest
     */
    public function setTestDate(\DateTime $TestDate = null)
    {
      if ($TestDate == null) {
       $this->TestDate = null;
      } else {
        $this->TestDate = $TestDate->format(\DateTime::ATOM);
      }
      return $this;
    }

}
