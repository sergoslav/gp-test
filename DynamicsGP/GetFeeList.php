<?php

class GetFeeList
{

    /**
     * @var FeeCriteria $criteria
     */
    protected $criteria = null;

    /**
     * @var Context $context
     */
    protected $context = null;

    /**
     * @param FeeCriteria $criteria
     * @param Context $context
     */
    public function __construct($criteria, $context)
    {
      $this->criteria = $criteria;
      $this->context = $context;
    }

    /**
     * @return FeeCriteria
     */
    public function getCriteria()
    {
      return $this->criteria;
    }

    /**
     * @param FeeCriteria $criteria
     * @return GetFeeList
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
     * @return GetFeeList
     */
    public function setContext($context)
    {
      $this->context = $context;
      return $this;
    }

}
