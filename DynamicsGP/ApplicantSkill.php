<?php

class ApplicantSkill extends BusinessObject
{

    /**
     * @var ApplicantSkillKey $ApplicantSkillKey
     */
    protected $ApplicantSkillKey = null;

    /**
     * @var string $Comments
     */
    protected $Comments = null;

    /**
     * @var boolean $DeleteOnUpdate
     */
    protected $DeleteOnUpdate = null;

    /**
     * @var int $Proficiency
     */
    protected $Proficiency = null;

    /**
     * @var int $SkillNumber
     */
    protected $SkillNumber = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return ApplicantSkillKey
     */
    public function getApplicantSkillKey()
    {
      return $this->ApplicantSkillKey;
    }

    /**
     * @param ApplicantSkillKey $ApplicantSkillKey
     * @return ApplicantSkill
     */
    public function setApplicantSkillKey($ApplicantSkillKey)
    {
      $this->ApplicantSkillKey = $ApplicantSkillKey;
      return $this;
    }

    /**
     * @return string
     */
    public function getComments()
    {
      return $this->Comments;
    }

    /**
     * @param string $Comments
     * @return ApplicantSkill
     */
    public function setComments($Comments)
    {
      $this->Comments = $Comments;
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
     * @return ApplicantSkill
     */
    public function setDeleteOnUpdate($DeleteOnUpdate)
    {
      $this->DeleteOnUpdate = $DeleteOnUpdate;
      return $this;
    }

    /**
     * @return int
     */
    public function getProficiency()
    {
      return $this->Proficiency;
    }

    /**
     * @param int $Proficiency
     * @return ApplicantSkill
     */
    public function setProficiency($Proficiency)
    {
      $this->Proficiency = $Proficiency;
      return $this;
    }

    /**
     * @return int
     */
    public function getSkillNumber()
    {
      return $this->SkillNumber;
    }

    /**
     * @param int $SkillNumber
     * @return ApplicantSkill
     */
    public function setSkillNumber($SkillNumber)
    {
      $this->SkillNumber = $SkillNumber;
      return $this;
    }

}
