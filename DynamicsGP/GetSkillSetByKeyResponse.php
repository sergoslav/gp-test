<?php

class GetSkillSetByKeyResponse
{

    /**
     * @var SkillSet $GetSkillSetByKeyResult
     */
    protected $GetSkillSetByKeyResult = null;

    /**
     * @param SkillSet $GetSkillSetByKeyResult
     */
    public function __construct($GetSkillSetByKeyResult)
    {
      $this->GetSkillSetByKeyResult = $GetSkillSetByKeyResult;
    }

    /**
     * @return SkillSet
     */
    public function getGetSkillSetByKeyResult()
    {
      return $this->GetSkillSetByKeyResult;
    }

    /**
     * @param SkillSet $GetSkillSetByKeyResult
     * @return GetSkillSetByKeyResponse
     */
    public function setGetSkillSetByKeyResult($GetSkillSetByKeyResult)
    {
      $this->GetSkillSetByKeyResult = $GetSkillSetByKeyResult;
      return $this;
    }

}
