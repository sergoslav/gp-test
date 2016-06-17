<?php

class GetReceivablesFinanceChargeList
{

    /**
     * @var ReceivablesFinanceChargeCriteria $criteria
     */
    protected $criteria = null;

    /**
     * @var Context $context
     */
    protected $context = null;

    /**
     * @param ReceivablesFinanceChargeCriteria $criteria
     * @param Context $context
     */
    public function __construct($criteria, $context)
    {
      $this->criteria = $criteria;
      $this->context = $context;
    }

    /**
     * @return ReceivablesFinanceChargeCriteria
     */
    public function getCriteria()
    {
      return $this->criteria;
    }

    /**
     * @param ReceivablesFinanceChargeCriteria $criteria
     * @return GetReceivablesFinanceChargeList
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
     * @return GetReceivablesFinanceChargeList
     */
    public function setContext($context)
    {
      $this->context = $context;
      return $this;
    }

}
