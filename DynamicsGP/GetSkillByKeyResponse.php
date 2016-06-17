<?php

class GetSkillByKeyResponse
{

    /**
     * @var Skill $GetSkillByKeyResult
     */
    protected $GetSkillByKeyResult = null;

    /**
     * @param Skill $GetSkillByKeyResult
     */
    public function __construct($GetSkillByKeyResult)
    {
      $this->GetSkillByKeyResult = $GetSkillByKeyResult;
    }

    /**
     * @return Skill
     */
    public function getGetSkillByKeyResult()
    {
      return $this->GetSkillByKeyResult;
    }

    /**
     * @param Skill $GetSkillByKeyResult
     * @return GetSkillByKeyResponse
     */
    public function setGetSkillByKeyResult($GetSkillByKeyResult)
    {
      $this->GetSkillByKeyResult = $GetSkillByKeyResult;
      return $this;
    }

}
