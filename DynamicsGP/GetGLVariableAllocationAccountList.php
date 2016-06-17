<?php

class GetGLVariableAllocationAccountList
{

    /**
     * @var GLVariableAllocationAccountCriteria $criteria
     */
    protected $criteria = null;

    /**
     * @var Context $context
     */
    protected $context = null;

    /**
     * @param GLVariableAllocationAccountCriteria $criteria
     * @param Context $context
     */
    public function __construct($criteria, $context)
    {
      $this->criteria = $criteria;
      $this->context = $context;
    }

    /**
     * @return GLVariableAllocationAccountCriteria
     */
    public function getCriteria()
    {
      return $this->criteria;
    }

    /**
     * @param GLVariableAllocationAccountCriteria $criteria
     * @return GetGLVariableAllocationAccountList
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
     * @return GetGLVariableAllocationAccountList
     */
    public function setContext($context)
    {
      $this->context = $context;
      return $this;
    }

}
