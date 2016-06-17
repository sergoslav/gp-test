<?php

class GetGLPostingAccountList
{

    /**
     * @var GLPostingAccountCriteria $criteria
     */
    protected $criteria = null;

    /**
     * @var Context $context
     */
    protected $context = null;

    /**
     * @param GLPostingAccountCriteria $criteria
     * @param Context $context
     */
    public function __construct($criteria, $context)
    {
      $this->criteria = $criteria;
      $this->context = $context;
    }

    /**
     * @return GLPostingAccountCriteria
     */
    public function getCriteria()
    {
      return $this->criteria;
    }

    /**
     * @param GLPostingAccountCriteria $criteria
     * @return GetGLPostingAccountList
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
     * @return GetGLPostingAccountList
     */
    public function setContext($context)
    {
      $this->context = $context;
      return $this;
    }

}
