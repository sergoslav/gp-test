<?php

class UpdateSalesInvoice
{

    /**
     * @var SalesInvoice $salesInvoice
     */
    protected $salesInvoice = null;

    /**
     * @var Context $context
     */
    protected $context = null;

    /**
     * @var Policy $policy
     */
    protected $policy = null;

    /**
     * @param SalesInvoice $salesInvoice
     * @param Context $context
     * @param Policy $policy
     */
    public function __construct($salesInvoice, $context, $policy)
    {
      $this->salesInvoice = $salesInvoice;
      $this->context = $context;
      $this->policy = $policy;
    }

    /**
     * @return SalesInvoice
     */
    public function getSalesInvoice()
    {
      return $this->salesInvoice;
    }

    /**
     * @param SalesInvoice $salesInvoice
     * @return UpdateSalesInvoice
     */
    public function setSalesInvoice($salesInvoice)
    {
      $this->salesInvoice = $salesInvoice;
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
     * @return UpdateSalesInvoice
     */
    public function setContext($context)
    {
      $this->context = $context;
      return $this;
    }

    /**
     * @return Policy
     */
    public function getPolicy()
    {
      return $this->policy;
    }

    /**
     * @param Policy $policy
     * @return UpdateSalesInvoice
     */
    public function setPolicy($policy)
    {
      $this->policy = $policy;
      return $this;
    }

}
