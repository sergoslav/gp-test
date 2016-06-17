<?php

class ApplicantSkillCriteria extends Criteria
{

    /**
     * @var LikeRestrictionOfNullableOfint $ApplicantKeyId
     */
    protected $ApplicantKeyId = null;

    /**
     * @var LikeRestrictionOfNullableOfint $Proficiency
     */
    protected $Proficiency = null;

    /**
     * @var LikeRestrictionOfstring $SkillKeyId
     */
    protected $SkillKeyId = null;

    
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
     * @return ApplicantSkillCriteria
     */
    public function setApplicantKeyId($ApplicantKeyId)
    {
      $this->ApplicantKeyId = $ApplicantKeyId;
      return $this;
    }

    /**
     * @return LikeRestrictionOfNullableOfint
     */
    public function getProficiency()
    {
      return $this->Proficiency;
    }

    /**
     * @param LikeRestrictionOfNullableOfint $Proficiency
     * @return ApplicantSkillCriteria
     */
    public function setProficiency($Proficiency)
    {
      $this->Proficiency = $Proficiency;
      return $this;
    }

    /**
     * @return LikeRestrictionOfstring
     */
    public function getSkillKeyId()
    {
      return $this->SkillKeyId;
    }

    /**
     * @param LikeRestrictionOfstring $SkillKeyId
     * @return ApplicantSkillCriteria
     */
    public function setSkillKeyId($SkillKeyId)
    {
      $this->SkillKeyId = $SkillKeyId;
      return $this;
    }

}
