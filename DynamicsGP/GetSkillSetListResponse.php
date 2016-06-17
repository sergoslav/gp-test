<?php

class GetSkillSetListResponse
{

    /**
     * @var ArrayOfSkillSetSummary $GetSkillSetListResult
     */
    protected $GetSkillSetListResult = null;

    /**
     * @param ArrayOfSkillSetSummary $GetSkillSetListResult
     */
    public function __construct($GetSkillSetListResult)
    {
      $this->GetSkillSetListResult = $GetSkillSetListResult;
    }

    /**
     * @return ArrayOfSkillSetSummary
     */
    public function getGetSkillSetListResult()
    {
      return $this->GetSkillSetListResult;
    }

    /**
     * @param ArrayOfSkillSetSummary $GetSkillSetListResult
     * @return GetSkillSetListResponse
     */
    public function setGetSkillSetListResult($GetSkillSetListResult)
    {
      $this->GetSkillSetListResult = $GetSkillSetListResult;
      return $this;
    }

}
