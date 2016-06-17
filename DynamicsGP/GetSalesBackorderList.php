<?php

class GetSalesBackorderList
{

    /**
     * @var SalesBackorderCriteria $criteria
     */
    protected $criteria = null;

    /**
     * @var Context $context
     */
    protected $context = null;

    /**
     * @param SalesBackorderCriteria $criteria
     * @param Context $context
     */
    public function __construct($criteria, $context)
    {
      $this->criteria = $criteria;
      $this->context = $context;
    }

    /**
     * @return SalesBackorderCriteria
     */
    public function getCriteria()
    {
      return $this->criteria;
    }

    /**
     * @param SalesBackorderCriteria $criteria
     * @return GetSalesBackorderList
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
     * @return GetSalesBackorderList
     */
    public function setContext($context)
    {
      $this->context = $context;
      return $this;
    }

}
