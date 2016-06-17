<?php

class GetServiceQuoteList
{

    /**
     * @var ServiceQuoteCriteria $criteria
     */
    protected $criteria = null;

    /**
     * @var Context $context
     */
    protected $context = null;

    /**
     * @param ServiceQuoteCriteria $criteria
     * @param Context $context
     */
    public function __construct($criteria, $context)
    {
      $this->criteria = $criteria;
      $this->context = $context;
    }

    /**
     * @return ServiceQuoteCriteria
     */
    public function getCriteria()
    {
      return $this->criteria;
    }

    /**
     * @param ServiceQuoteCriteria $criteria
     * @return GetServiceQuoteList
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
     * @return GetServiceQuoteList
     */
    public function setContext($context)
    {
      $this->context = $context;
      return $this;
    }

}
