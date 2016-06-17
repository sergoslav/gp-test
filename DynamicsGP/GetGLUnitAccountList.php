<?php

class GetGLUnitAccountList
{

    /**
     * @var GLUnitAccountCriteria $criteria
     */
    protected $criteria = null;

    /**
     * @var Context $context
     */
    protected $context = null;

    /**
     * @param GLUnitAccountCriteria $criteria
     * @param Context $context
     */
    public function __construct($criteria, $context)
    {
      $this->criteria = $criteria;
      $this->context = $context;
    }

    /**
     * @return GLUnitAccountCriteria
     */
    public function getCriteria()
    {
      return $this->criteria;
    }

    /**
     * @param GLUnitAccountCriteria $criteria
     * @return GetGLUnitAccountList
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
     * @return GetGLUnitAccountList
     */
    public function setContext($context)
    {
      $this->context = $context;
      return $this;
    }

}
