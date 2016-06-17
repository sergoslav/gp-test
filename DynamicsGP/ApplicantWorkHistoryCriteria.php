<?php

class ApplicantWorkHistoryCriteria extends Criteria
{

    /**
     * @var LikeRestrictionOfNullableOfint $ApplicantKeyId
     */
    protected $ApplicantKeyId = null;

    /**
     * @var LikeRestrictionOfstring $Employer
     */
    protected $Employer = null;

    /**
     * @var BetweenRestrictionOfNullableOfdateTime $LastModifiedDate
     */
    protected $LastModifiedDate = null;

    /**
     * @var BetweenRestrictionOfNullableOfdecimal $Wage
     */
    protected $Wage = null;

    /**
     * @var BetweenRestrictionOfstring $YearsOfExperience
     */
    protected $YearsOfExperience = null;

    
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
     * @return ApplicantWorkHistoryCriteria
     */
    public function setApplicantKeyId($ApplicantKeyId)
    {
      $this->ApplicantKeyId = $ApplicantKeyId;
      return $this;
    }

    /**
     * @return LikeRestrictionOfstring
     */
    public function getEmployer()
    {
      return $this->Employer;
    }

    /**
     * @param LikeRestrictionOfstring $Employer
     * @return ApplicantWorkHistoryCriteria
     */
    public function setEmployer($Employer)
    {
      $this->Employer = $Employer;
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
     * @return ApplicantWorkHistoryCriteria
     */
    public function setLastModifiedDate($LastModifiedDate)
    {
      $this->LastModifiedDate = $LastModifiedDate;
      return $this;
    }

    /**
     * @return BetweenRestrictionOfNullableOfdecimal
     */
    public function getWage()
    {
      return $this->Wage;
    }

    /**
     * @param BetweenRestrictionOfNullableOfdecimal $Wage
     * @return ApplicantWorkHistoryCriteria
     */
    public function setWage($Wage)
    {
      $this->Wage = $Wage;
      return $this;
    }

    /**
     * @return BetweenRestrictionOfstring
     */
    public function getYearsOfExperience()
    {
      return $this->YearsOfExperience;
    }

    /**
     * @param BetweenRestrictionOfstring $YearsOfExperience
     * @return ApplicantWorkHistoryCriteria
     */
    public function setYearsOfExperience($YearsOfExperience)
    {
      $this->YearsOfExperience = $YearsOfExperience;
      return $this;
    }

}
