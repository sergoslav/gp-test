<?php

class ApplicantSkillKey extends ReferenceKey
{

    /**
     * @var ApplicantKey $ApplicantKey
     */
    protected $ApplicantKey = null;

    /**
     * @var SkillKey $SkillKey
     */
    protected $SkillKey = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return ApplicantKey
     */
    public function getApplicantKey()
    {
      return $this->ApplicantKey;
    }

    /**
     * @param ApplicantKey $ApplicantKey
     * @return ApplicantSkillKey
     */
    public function setApplicantKey($ApplicantKey)
    {
      $this->ApplicantKey = $ApplicantKey;
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
     * @return ApplicantSkillKey
     */
    public function setSkillKey($SkillKey)
    {
      $this->SkillKey = $SkillKey;
      return $this;
    }

}
