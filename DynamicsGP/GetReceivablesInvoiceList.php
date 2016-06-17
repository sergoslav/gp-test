<?php

class GetReceivablesInvoiceList
{

    /**
     * @var ReceivablesInvoiceCriteria $criteria
     */
    protected $criteria = null;

    /**
     * @var Context $context
     */
    protected $context = null;

    /**
     * @param ReceivablesInvoiceCriteria $criteria
     * @param Context $context
     */
    public function __construct($criteria, $context)
    {
      $this->criteria = $criteria;
      $this->context = $context;
    }

    /**
     * @return ReceivablesInvoiceCriteria
     */
    public function getCriteria()
    {
      return $this->criteria;
    }

    /**
     * @param ReceivablesInvoiceCriteria $criteria
     * @return GetReceivablesInvoiceList
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
     * @return GetReceivablesInvoiceList
     */
    public function setContext($context)
    {
      $this->context = $context;
      return $this;
    }

}
