<?php

class ApplicantEducationCriteria extends Criteria
{

    /**
     * @var LikeRestrictionOfNullableOfint $ApplicantKeyId
     */
    protected $ApplicantKeyId = null;

    /**
     * @var LikeRestrictionOfstring $Degree
     */
    protected $Degree = null;

    /**
     * @var LikeRestrictionOfstring $GradePointAverage
     */
    protected $GradePointAverage = null;

    /**
     * @var BetweenRestrictionOfNullableOfdateTime $LastModifiedDate
     */
    protected $LastModifiedDate = null;

    /**
     * @var LikeRestrictionOfstring $Major
     */
    protected $Major = null;

    /**
     * @var LikeRestrictionOfstring $School
     */
    protected $School = null;

    /**
     * @var LikeRestrictionOfNullableOfint $SequenceKeyId
     */
    protected $SequenceKeyId = null;

    /**
     * @var LikeRestrictionOfstring $YearGraduated
     */
    protected $YearGraduated = null;

    
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
     * @return ApplicantEducationCriteria
     */
    public function setApplicantKeyId($ApplicantKeyId)
    {
      $this->ApplicantKeyId = $ApplicantKeyId;
      return $this;
    }

    /**
     * @return LikeRestrictionOfstring
     */
    public function getDegree()
    {
      return $this->Degree;
    }

    /**
     * @param LikeRestrictionOfstring $Degree
     * @return ApplicantEducationCriteria
     */
    public function setDegree($Degree)
    {
      $this->Degree = $Degree;
      return $this;
    }

    /**
     * @return LikeRestrictionOfstring
     */
    public function getGradePointAverage()
    {
      return $this->GradePointAverage;
    }

    /**
     * @param LikeRestrictionOfstring $GradePointAverage
     * @return ApplicantEducationCriteria
     */
    public function setGradePointAverage($GradePointAverage)
    {
      $this->GradePointAverage = $GradePointAverage;
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
     * @return ApplicantEducationCriteria
     */
    public function setLastModifiedDate($LastModifiedDate)
    {
      $this->LastModifiedDate = $LastModifiedDate;
      return $this;
    }

    /**
     * @return LikeRestrictionOfstring
     */
    public function getMajor()
    {
      return $this->Major;
    }

    /**
     * @param LikeRestrictionOfstring $Major
     * @return ApplicantEducationCriteria
     */
    public function setMajor($Major)
    {
      $this->Major = $Major;
      return $this;
    }

    /**
     * @return LikeRestrictionOfstring
     */
    public function getSchool()
    {
      return $this->School;
    }

    /**
     * @param LikeRestrictionOfstring $School
     * @return ApplicantEducationCriteria
     */
    public function setSchool($School)
    {
      $this->School = $School;
      return $this;
    }

    /**
     * @return LikeRestrictionOfNullableOfint
     */
    public function getSequenceKeyId()
    {
      return $this->SequenceKeyId;
    }

    /**
     * @param LikeRestrictionOfNullableOfint $SequenceKeyId
     * @return ApplicantEducationCriteria
     */
    public function setSequenceKeyId($SequenceKeyId)
    {
      $this->SequenceKeyId = $SequenceKeyId;
      return $this;
    }

    /**
     * @return LikeRestrictionOfstring
     */
    public function getYearGraduated()
    {
      return $this->YearGraduated;
    }

    /**
     * @param LikeRestrictionOfstring $YearGraduated
     * @return ApplicantEducationCriteria
     */
    public function setYearGraduated($YearGraduated)
    {
      $this->YearGraduated = $YearGraduated;
      return $this;
    }

}
