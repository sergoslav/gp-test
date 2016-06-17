<?php

class GetApplicantSkillListResponse
{

    /**
     * @var ArrayOfApplicantSkill $GetApplicantSkillListResult
     */
    protected $GetApplicantSkillListResult = null;

    /**
     * @param ArrayOfApplicantSkill $GetApplicantSkillListResult
     */
    public function __construct($GetApplicantSkillListResult)
    {
      $this->GetApplicantSkillListResult = $GetApplicantSkillListResult;
    }

    /**
     * @return ArrayOfApplicantSkill
     */
    public function getGetApplicantSkillListResult()
    {
      return $this->GetApplicantSkillListResult;
    }

    /**
     * @param ArrayOfApplicantSkill $GetApplicantSkillListResult
     * @return GetApplicantSkillListResponse
     */
    public function setGetApplicantSkillListResult($GetApplicantSkillListResult)
    {
      $this->GetApplicantSkillListResult = $GetApplicantSkillListResult;
      return $this;
    }

}
