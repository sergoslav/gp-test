<?php

class SkillSet extends BusinessObject
{

    /**
     * @var int $AvailableSkills
     */
    protected $AvailableSkills = null;

    /**
     * @var SkillSetKey $SkillSetKey
     */
    protected $SkillSetKey = null;

    /**
     * @var ArrayOfSkill $Skills
     */
    protected $Skills = null;

    
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
     * @return SkillSet
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
     * @return SkillSet
     */
    public function setSkillSetKey($SkillSetKey)
    {
      $this->SkillSetKey = $SkillSetKey;
      return $this;
    }

    /**
     * @return ArrayOfSkill
     */
    public function getSkills()
    {
      return $this->Skills;
    }

    /**
     * @param ArrayOfSkill $Skills
     * @return SkillSet
     */
    public function setSkills($Skills)
    {
      $this->Skills = $Skills;
      return $this;
    }

}
