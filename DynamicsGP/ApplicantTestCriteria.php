<?php

class ApplicantTestCriteria extends Criteria
{

    /**
     * @var LikeRestrictionOfNullableOfint $ApplicantKeyId
     */
    protected $ApplicantKeyId = null;

    /**
     * @var BetweenRestrictionOfNullableOfdateTime $LastModifiedDate
     */
    protected $LastModifiedDate = null;

    /**
     * @var LikeRestrictionOfstring $Score
     */
    protected $Score = null;

    /**
     * @var LikeRestrictionOfstring $TestCodeKeyId
     */
    protected $TestCodeKeyId = null;

    /**
     * @var BetweenRestrictionOfNullableOfdateTime $TestDate
     */
    protected $TestDate = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return LikeRestrictionOfNullableOfint
     */
    public function getApplicantKeyId()
    {
      return $this->ApplicantKeyId;
    }

    /**
     * @param LikeRestrictionOfNullableOfint $ApplicantKeyId
     * @return ApplicantTestCriteria
     */
    public function setApplicantKeyId($ApplicantKeyId)
    {
      $this->ApplicantKeyId = $ApplicantKeyId;
      return $this;
    }

    /**
     * @return BetweenRestrictionOfNullableOfdateTime
     */
    public function getLastModifiedDate()
    {
      return $this->LastModifiedDate;
    }

    /**
     * @param BetweenRestrictionOfNullableOfdateTime $LastModifiedDate
     * @return ApplicantTestCriteria
     */
    public function setLastModifiedDate($LastModifiedDate)
    {
      $this->LastModifiedDate = $LastModifiedDate;
      return $this;
    }

    /**
     * @return LikeRestrictionOfstring
     */
    public function getScore()
    {
      return $this->Score;
    }

    /**
     * @param LikeRestrictionOfstring $Score
     * @return ApplicantTestCriteria
     */
    public function setScore($Score)
    {
      $this->Score = $Score;
      return $this;
    }

    /**
     * @return LikeRestrictionOfstring
     */
    public function getTestCodeKeyId()
    {
      return $this->TestCodeKeyId;
    }

    /**
     * @param LikeRestrictionOfstring $TestCodeKeyId
     * @return ApplicantTestCriteria
     */
    public function setTestCodeKeyId($TestCodeKeyId)
    {
      $this->TestCodeKeyId = $TestCodeKeyId;
      return $this;
    }

    /**
     * @return BetweenRestrictionOfNullableOfdateTime
     */
    public function getTestDate()
    {
      return $this->TestDate;
    }

    /**
     * @param BetweenRestrictionOfNullableOfdateTime $TestDate
     * @return ApplicantTestCriteria
     */
    public function setTestDate($TestDate)
    {
      $this->TestDate = $TestDate;
      return $this;
    }

}
