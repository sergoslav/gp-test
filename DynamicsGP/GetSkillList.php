<?php

class GetSkillList
{

    /**
     * @var SkillCriteria $criteria
     */
    protected $criteria = null;

    /**
     * @var Context $context
     */
    protected $context = null;

    /**
     * @param SkillCriteria $criteria
     * @param Context $context
     */
    public function __construct($criteria, $context)
    {
      $this->criteria = $criteria;
      $this->context = $context;
    }

    /**
     * @return SkillCriteria
     */
    public function getCriteria()
    {
      return $this->criteria;
    }

    /**
     * @param SkillCriteria $criteria
     * @return GetSkillList
     */
    public function setCriteria($criteria)
    {
      $this->criteria = $criteria;
      return $this;
    }

    /**
     * @return Context
     */
    public function getContext()
    {
      return $this->context;
    }

    /**
     * @param Context $context
     * @return GetSkillList
     */
    public function setContext($context)
    {
      $this->context = $context;
      return $this;
    }

}
