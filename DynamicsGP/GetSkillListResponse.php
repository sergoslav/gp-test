<?php

class GetSkillListResponse
{

    /**
     * @var ArrayOfSkill $GetSkillListResult
     */
    protected $GetSkillListResult = null;

    /**
     * @param ArrayOfSkill $GetSkillListResult
     */
    public function __construct($GetSkillListResult)
    {
      $this->GetSkillListResult = $GetSkillListResult;
    }

    /**
     * @return ArrayOfSkill
     */
    public function getGetSkillListResult()
    {
      return $this->GetSkillListResult;
    }

    /**
     * @param ArrayOfSkill $GetSkillListResult
     * @return GetSkillListResponse
     */
    public function setGetSkillListResult($GetSkillListResult)
    {
      $this->GetSkillListResult = $GetSkillListResult;
      return $this;
    }

}
