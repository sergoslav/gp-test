<?php

class GetSkillSetList
{

    /**
     * @var SkillSetCriteria $criteria
     */
    protected $criteria = null;

    /**
     * @var Context $context
     */
    protected $context = null;

    /**
     * @param SkillSetCriteria $criteria
     * @param Context $context
     */
    public function __construct($criteria, $context)
    {
      $this->criteria = $criteria;
      $this->context = $context;
    }

    /**
     * @return SkillSetCriteria
     */
    public function getCriteria()
    {
      return $this->criteria;
    }

    /**
     * @param SkillSetCriteria $criteria
     * @return GetSkillSetList
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
     * @return GetSkillSetList
     */
    public function setContext($context)
    {
      $this->context = $context;
      return $this;
    }

}
