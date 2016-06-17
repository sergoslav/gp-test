<?php

class GetSalesQuoteList
{

    /**
     * @var SalesQuoteCriteria $criteria
     */
    protected $criteria = null;

    /**
     * @var Context $context
     */
    protected $context = null;

    /**
     * @param SalesQuoteCriteria $criteria
     * @param Context $context
     */
    public function __construct($criteria, $context)
    {
      $this->criteria = $criteria;
      $this->context = $context;
    }

    /**
     * @return SalesQuoteCriteria
     */
    public function getCriteria()
    {
      return $this->criteria;
    }

    /**
     * @param SalesQuoteCriteria $criteria
     * @return GetSalesQuoteList
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
     * @return GetSalesQuoteList
     */
    public function setContext($context)
    {
      $this->context = $context;
      return $this;
    }

}
