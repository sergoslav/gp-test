<?php

class GetCashReceiptList
{

    /**
     * @var CashReceiptCriteria $criteria
     */
    protected $criteria = null;

    /**
     * @var Context $context
     */
    protected $context = null;

    /**
     * @param CashReceiptCriteria $criteria
     * @param Context $context
     */
    public function __construct($criteria, $context)
    {
      $this->criteria = $criteria;
      $this->context = $context;
    }

    /**
     * @return CashReceiptCriteria
     */
    public function getCriteria()
    {
      return $this->criteria;
    }

    /**
     * @param CashReceiptCriteria $criteria
     * @return GetCashReceiptList
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
     * @return GetCashReceiptList
     */
    public function setContext($context)
    {
      $this->context = $context;
      return $this;
    }

}
