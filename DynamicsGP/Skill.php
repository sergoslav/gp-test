<?php

class Skill extends BusinessObject
{

    /**
     * @var Compensation $Compensation
     */
    protected $Compensation = null;

    /**
     * @var boolean $DeleteOnUpdate
     */
    protected $DeleteOnUpdate = null;

    /**
     * @var SkillKey $SkillKey
     */
    protected $SkillKey = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return Compensation
     */
    public function getCompensation()
    {
      return $this->Compensation;
    }

    /**
     * @param Compensation $Compensation
     * @return Skill
     */
    public function setCompensation($Compensation)
    {
      $this->Compensation = $Compensation;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getDeleteOnUpdate()
    {
      return $this->DeleteOnUpdate;
    }

    /**
     * @param boolean $DeleteOnUpdate
     * @return Skill
     */
    public function setDeleteOnUpdate($DeleteOnUpdate)
    {
      $this->DeleteOnUpdate = $DeleteOnUpdate;
      return $this;
    }

    /**
     * @return SkillKey
     */
    public function getSkillKey()
    {
      return $this->SkillKey;
    }

    /**
     * @param SkillKey $SkillKey
     * @return Skill
     */
    public function setSkillKey($SkillKey)
    {
      $this->SkillKey = $SkillKey;
      return $this;
    }

}
