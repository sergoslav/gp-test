<?php

class GetChangedSalesInvoiceKeyList
{

    /**
     * @var SalesInvoiceChangedKeyCriteria $criteria
     */
    protected $criteria = null;

    /**
     * @var Context $context
     */
    protected $context = null;

    /**
     * @param SalesInvoiceChangedKeyCriteria $criteria
     * @param Context $context
     */
    public function __construct($criteria, $context)
    {
      $this->criteria = $criteria;
      $this->context = $context;
    }

    /**
     * @return SalesInvoiceChangedKeyCriteria
     */
    public function getCriteria()
    {
      return $this->criteria;
    }

    /**
     * @param SalesInvoiceChangedKeyCriteria $criteria
     * @return GetChangedSalesInvoiceKeyList
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
     * @return GetChangedSalesInvoiceKeyList
     */
    public function setContext($context)
    {
      $this->context = $context;
      return $this;
    }

}
