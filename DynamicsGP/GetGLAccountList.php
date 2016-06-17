<?php

class GetGLAccountList
{

    /**
     * @var GLAccountCriteria $criteria
     */
    protected $criteria = null;

    /**
     * @var Context $context
     */
    protected $context = null;

    /**
     * @param GLAccountCriteria $criteria
     * @param Context $context
     */
    public function __construct($criteria, $context)
    {
      $this->criteria = $criteria;
      $this->context = $context;
    }

    /**
     * @return GLAccountCriteria
     */
    public function getCriteria()
    {
      return $this->criteria;
    }

    /**
     * @param GLAccountCriteria $criteria
     * @return GetGLAccountList
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
     * @return GetGLAccountList
     */
    public function setContext($context)
    {
      $this->context = $context;
      return $this;
    }

}
