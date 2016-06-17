<?php

class GetCustomerReceivablesSummaryList
{

    /**
     * @var CustomerReceivablesSummaryCriteria $criteria
     */
    protected $criteria = null;

    /**
     * @var Context $context
     */
    protected $context = null;

    /**
     * @param CustomerReceivablesSummaryCriteria $criteria
     * @param Context $context
     */
    public function __construct($criteria, $context)
    {
      $this->criteria = $criteria;
      $this->context = $context;
    }

    /**
     * @return CustomerReceivablesSummaryCriteria
     */
    public function getCriteria()
    {
      return $this->criteria;
    }

    /**
     * @param CustomerReceivablesSummaryCriteria $criteria
     * @return GetCustomerReceivablesSummaryList
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
     * @return GetCustomerReceivablesSummaryList
     */
    public function setContext($context)
    {
      $this->context = $context;
      return $this;
    }

}
