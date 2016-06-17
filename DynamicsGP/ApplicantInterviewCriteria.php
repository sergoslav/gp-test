<?php

class ApplicantInterviewCriteria extends Criteria
{

    /**
     * @var LikeRestrictionOfNullableOfint $ApplicantKeyId
     */
    protected $ApplicantKeyId = null;

    /**
     * @var BetweenRestrictionOfNullableOfdateTime $DateApplied
     */
    protected $DateApplied = null;

    /**
     * @var LikeRestrictionOfstring $DepartmentKeyId
     */
    protected $DepartmentKeyId = null;

    /**
     * @var LikeRestrictionOfstring $DivisionKeyId
     */
    protected $DivisionKeyId = null;

    /**
     * @var BetweenRestrictionOfNullableOfdateTime $InterviewDate
     */
    protected $InterviewDate = null;

    /**
     * @var LikeRestrictionOfstring $InterviewTypeKeyId
     */
    protected $InterviewTypeKeyId = null;

    /**
     * @var LikeRestrictionOfstring $PositionKeyId
     */
    protected $PositionKeyId = null;

    
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
     * @return ApplicantInterviewCriteria
     */
    public function setApplicantKeyId($ApplicantKeyId)
    {
      $this->ApplicantKeyId = $ApplicantKeyId;
      return $this;
    }

    /**
     * @return BetweenRestrictionOfNullableOfdateTime
     */
    public function getDateApplied()
    {
      return $this->DateApplied;
    }

    /**
     * @param BetweenRestrictionOfNullableOfdateTime $DateApplied
     * @return ApplicantInterviewCriteria
     */
    public function setDateApplied($DateApplied)
    {
      $this->DateApplied = $DateApplied;
      return $this;
    }

    /**
     * @return LikeRestrictionOfstring
     */
    public function getDepartmentKeyId()
    {
      return $this->DepartmentKeyId;
    }

    /**
     * @param LikeRestrictionOfstring $DepartmentKeyId
     * @return ApplicantInterviewCriteria
     */
    public function setDepartmentKeyId($DepartmentKeyId)
    {
      $this->DepartmentKeyId = $DepartmentKeyId;
      return $this;
    }

    /**
     * @return LikeRestrictionOfstring
     */
    public function getDivisionKeyId()
    {
      return $this->DivisionKeyId;
    }

    /**
     * @param LikeRestrictionOfstring $DivisionKeyId
     * @return ApplicantInterviewCriteria
     */
    public function setDivisionKeyId($DivisionKeyId)
    {
      $this->DivisionKeyId = $DivisionKeyId;
      return $this;
    }

    /**
     * @return BetweenRestrictionOfNullableOfdateTime
     */
    public function getInterviewDate()
    {
      return $this->InterviewDate;
    }

    /**
     * @param BetweenRestrictionOfNullableOfdateTime $InterviewDate
     * @return ApplicantInterviewCriteria
     */
    public function setInterviewDate($InterviewDate)
    {
      $this->InterviewDate = $InterviewDate;
      return $this;
    }

    /**
     * @return LikeRestrictionOfstring
     */
    public function getInterviewTypeKeyId()
    {
      return $this->InterviewTypeKeyId;
    }

    /**
     * @param LikeRestrictionOfstring $InterviewTypeKeyId
     * @return ApplicantInterviewCriteria
     */
    public function setInterviewTypeKeyId($InterviewTypeKeyId)
    {
      $this->InterviewTypeKeyId = $InterviewTypeKeyId;
      return $this;
    }

    /**
     * @return LikeRestrictionOfstring
     */
    public function getPositionKeyId()
    {
      return $this->PositionKeyId;
    }

    /**
     * @param LikeRestrictionOfstring $PositionKeyId
     * @return ApplicantInterviewCriteria
     */
    public function setPositionKeyId($PositionKeyId)
    {
      $this->PositionKeyId = $PositionKeyId;
      return $this;
    }

}
