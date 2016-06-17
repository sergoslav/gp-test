<?php

class GetPurchaseInvoiceList
{

    /**
     * @var PurchaseInvoiceCriteria $criteria
     */
    protected $criteria = null;

    /**
     * @var Context $context
     */
    protected $context = null;

    /**
     * @param PurchaseInvoiceCriteria $criteria
     * @param Context $context
     */
    public function __construct($criteria, $context)
    {
      $this->criteria = $criteria;
      $this->context = $context;
    }

    /**
     * @return PurchaseInvoiceCriteria
     */
    public function getCriteria()
    {
      return $this->criteria;
    }

    /**
     * @param PurchaseInvoiceCriteria $criteria
     * @return GetPurchaseInvoiceList
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
     * @return GetPurchaseInvoiceList
     */
    public function setContext($context)
    {
      $this->context = $context;
      return $this;
    }

}
