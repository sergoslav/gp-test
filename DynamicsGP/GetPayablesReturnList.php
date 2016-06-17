<?php

class GetPayablesReturnList
{

    /**
     * @var PayablesReturnCriteria $criteria
     */
    protected $criteria = null;

    /**
     * @var Context $context
     */
    protected $context = null;

    /**
     * @param PayablesReturnCriteria $criteria
     * @param Context $context
     */
    public function __construct($criteria, $context)
    {
      $this->criteria = $criteria;
      $this->context = $context;
    }

    /**
     * @return PayablesReturnCriteria
     */
    public function getCriteria()
    {
      return $this->criteria;
    }

    /**
     * @param PayablesReturnCriteria $criteria
     * @return GetPayablesReturnList
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
     * @return GetPayablesReturnList
     */
    public function setContext($context)
    {
      $this->context = $context;
      return $this;
    }

}
