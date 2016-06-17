<?php

class CreateSalesOrder
{

    /**
     * @var SalesOrder $salesOrder
     */
    protected $salesOrder = null;

    /**
     * @var Context $context
     */
    protected $context = null;

    /**
     * @var Policy $policy
     */
    protected $policy = null;

    /**
     * @param SalesOrder $salesOrder
     * @param Context $context
     * @param Policy $policy
     */
    public function __construct($salesOrder, $context, $policy)
    {
      $this->salesOrder = $salesOrder;
      $this->context = $context;
      $this->policy = $policy;
    }

    /**
     * @return SalesOrder
     */
    public function getSalesOrder()
    {
      return $this->salesOrder;
    }

    /**
     * @param SalesOrder $salesOrder
     * @return CreateSalesOrder
     */
    public function setSalesOrder($salesOrder)
    {
      $this->salesOrder = $salesOrder;
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
     * @return CreateSalesOrder
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
     * @return CreateSalesOrder
     */
    public function setPolicy($policy)
    {
      $this->policy = $policy;
      return $this;
    }

}
