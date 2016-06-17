<?php

class GetApplicantSkillByKeyResponse
{

    /**
     * @var ApplicantSkill $GetApplicantSkillByKeyResult
     */
    protected $GetApplicantSkillByKeyResult = null;

    /**
     * @param ApplicantSkill $GetApplicantSkillByKeyResult
     */
    public function __construct($GetApplicantSkillByKeyResult)
    {
      $this->GetApplicantSkillByKeyResult = $GetApplicantSkillByKeyResult;
    }

    /**
     * @return ApplicantSkill
     */
    public function getGetApplicantSkillByKeyResult()
    {
      return $this->GetApplicantSkillByKeyResult;
    }

    /**
     * @param ApplicantSkill $GetApplicantSkillByKeyResult
     * @return GetApplicantSkillByKeyResponse
     */
    public function setGetApplicantSkillByKeyResult($GetApplicantSkillByKeyResult)
    {
      $this->GetApplicantSkillByKeyResult = $GetApplicantSkillByKeyResult;
      return $this;
    }

}
