<?php

class SkillSetCriteria extends Criteria
{

    /**
     * @var LikeRestrictionOfstring $SkillSetKeyId
     */
    protected $SkillSetKeyId = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return LikeRestrictionOfstring
     */
    public function getSkillSetKeyId()
    {
      return $this->SkillSetKeyId;
    }

    /**
     * @param LikeRestrictionOfstring $SkillSetKeyId
     * @return SkillSetCriteria
     */
    public function setSkillSetKeyId($SkillSetKeyId)
    {
      $this->SkillSetKeyId = $SkillSetKeyId;
      return $this;
    }

}
