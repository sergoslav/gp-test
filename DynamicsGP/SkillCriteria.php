<?php

class SkillCriteria extends Criteria
{

    /**
     * @var ListRestrictionOfNullableOfCompensationPeriod $CompensationPeriod
     */
    protected $CompensationPeriod = null;

    /**
     * @var LikeRestrictionOfstring $SkillKeyId
     */
    protected $SkillKeyId = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return ListRestrictionOfNullableOfCompensationPeriod
     */
    public function getCompensationPeriod()
    {
      return $this->CompensationPeriod;
    }

    /**
     * @param ListRestrictionOfNullableOfCompensationPeriod $CompensationPeriod
     * @return SkillCriteria
     */
    public function setCompensationPeriod($CompensationPeriod)
    {
      $this->CompensationPeriod = $CompensationPeriod;
      return $this;
    }

    /**
     * @return LikeRestrictionOfstring
     */
    public function getSkillKeyId()
    {
      return $this->SkillKeyId;
    }

    /**
     * @param LikeRestrictionOfstring $SkillKeyId
     * @return SkillCriteria
     */
    public function setSkillKeyId($SkillKeyId)
    {
      $this->SkillKeyId = $SkillKeyId;
      return $this;
    }

}
