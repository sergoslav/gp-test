<?php

class CreateSalesFulfillmentOrder
{

    /**
     * @var SalesFulfillmentOrder $salesFulfillmentOrder
     */
    protected $salesFulfillmentOrder = null;

    /**
     * @var Context $context
     */
    protected $context = null;

    /**
     * @var Policy $policy
     */
    protected $policy = null;

    /**
     * @param SalesFulfillmentOrder $salesFulfillmentOrder
     * @param Context $context
     * @param Policy $policy
     */
    public function __construct($salesFulfillmentOrder, $context, $policy)
    {
      $this->salesFulfillmentOrder = $salesFulfillmentOrder;
      $this->context = $context;
      $this->policy = $policy;
    }

    /**
     * @return SalesFulfillmentOrder
     */
    public function getSalesFulfillmentOrder()
    {
      return $this->salesFulfillmentOrder;
    }

    /**
     * @param SalesFulfillmentOrder $salesFulfillmentOrder
     * @return CreateSalesFulfillmentOrder
     */
    public function setSalesFulfillmentOrder($salesFulfillmentOrder)
    {
      $this->salesFulfillmentOrder = $salesFulfillmentOrder;
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
     * @return CreateSalesFulfillmentOrder
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
     * @return CreateSalesFulfillmentOrder
     */
    public function setPolicy($policy)
    {
      $this->policy = $policy;
      return $this;
    }

}
