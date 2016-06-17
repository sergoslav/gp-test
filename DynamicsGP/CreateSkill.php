<?php

class CreateSkill
{

    /**
     * @var Skill $businessObject
     */
    protected $businessObject = null;

    /**
     * @var Context $context
     */
    protected $context = null;

    /**
     * @var Policy $policy
     */
    protected $policy = null;

    /**
     * @param Skill $businessObject
     * @param Context $context
     * @param Policy $policy
     */
    public function __construct($businessObject, $context, $policy)
    {
      $this->businessObject = $businessObject;
      $this->context = $context;
      $this->policy = $policy;
    }

    /**
     * @return Skill
     */
    public function getBusinessObject()
    {
      return $this->businessObject;
    }

    /**
     * @param Skill $businessObject
     * @return CreateSkill
     */
    public function setBusinessObject($businessObject)
    {
      $this->businessObject = $businessObject;
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
     * @return CreateSkill
     */
    public function setContext($context)
    {
      $this->context = $context;
      return $this;
    }

    /**
     * @return Policy
     */
    public function getPolicy()
    {
      return $this->policy;
    }

    /**
     * @param Policy $policy
     * @return CreateSkill
     */
    public function setPolicy($policy)
    {
      $this->policy = $policy;
      return $this;
    }

}
