<?php

class GetGLTransactionList
{

    /**
     * @var GLTransactionCriteria $criteria
     */
    protected $criteria = null;

    /**
     * @var Context $context
     */
    protected $context = null;

    /**
     * @param GLTransactionCriteria $criteria
     * @param Context $context
     */
    public function __construct($criteria, $context)
    {
      $this->criteria = $criteria;
      $this->context = $context;
    }

    /**
     * @return GLTransactionCriteria
     */
    public function getCriteria()
    {
      return $this->criteria;
    }

    /**
     * @param GLTransactionCriteria $criteria
     * @return GetGLTransactionList
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
     * @return GetGLTransactionList
     */
    public function setContext($context)
    {
      $this->context = $context;
      return $this;
    }

}
