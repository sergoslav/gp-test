<?php

class GetGLFixedAllocationAccountList
{

    /**
     * @var GLFixedAllocationAccountCriteria $criteria
     */
    protected $criteria = null;

    /**
     * @var Context $context
     */
    protected $context = null;

    /**
     * @param GLFixedAllocationAccountCriteria $criteria
     * @param Context $context
     */
    public function __construct($criteria, $context)
    {
      $this->criteria = $criteria;
      $this->context = $context;
    }

    /**
     * @return GLFixedAllocationAccountCriteria
     */
    public function getCriteria()
    {
      return $this->criteria;
    }

    /**
     * @param GLFixedAllocationAccountCriteria $criteria
     * @return GetGLFixedAllocationAccountList
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
     * @return GetGLFixedAllocationAccountList
     */
    public function setContext($context)
    {
      $this->context = $context;
      return $this;
    }

}
