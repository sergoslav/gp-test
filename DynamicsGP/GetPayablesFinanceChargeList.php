<?php

class GetPayablesFinanceChargeList
{

    /**
     * @var PayablesFinanceChargeCriteria $criteria
     */
    protected $criteria = null;

    /**
     * @var Context $context
     */
    protected $context = null;

    /**
     * @param PayablesFinanceChargeCriteria $criteria
     * @param Context $context
     */
    public function __construct($criteria, $context)
    {
      $this->criteria = $criteria;
      $this->context = $context;
    }

    /**
     * @return PayablesFinanceChargeCriteria
     */
    public function getCriteria()
    {
      return $this->criteria;
    }

    /**
     * @param PayablesFinanceChargeCriteria $criteria
     * @return GetPayablesFinanceChargeList
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
     * @return GetPayablesFinanceChargeList
     */
    public function setContext($context)
    {
      $this->context = $context;
      return $this;
    }

}
