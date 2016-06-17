<?php

class SkillSetSummary extends BusinessObjectSummary
{

    /**
     * @var int $AvailableSkills
     */
    protected $AvailableSkills = null;

    /**
     * @var SkillSetKey $SkillSetKey
     */
    protected $SkillSetKey = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return int
     */
    public function getAvailableSkills()
    {
      return $this->AvailableSkills;
    }

    /**
     * @param int $AvailableSkills
     * @return SkillSetSummary
     */
    public function setAvailableSkills($AvailableSkills)
    {
      $this->AvailableSkills = $AvailableSkills;
      return $this;
    }

    /**
     * @return SkillSetKey
     */
    public function getSkillSetKey()
    {
      return $this->SkillSetKey;
    }

    /**
     * @param SkillSetKey $SkillSetKey
     * @return SkillSetSummary
     */
    public function setSkillSetKey($SkillSetKey)
    {
      $this->SkillSetKey = $SkillSetKey;
      return $this;
    }

}
