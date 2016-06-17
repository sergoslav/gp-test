<?php

class CreateSalesItem
{

    /**
     * @var SalesItem $salesItem
     */
    protected $salesItem = null;

    /**
     * @var Context $context
     */
    protected $context = null;

    /**
     * @var Policy $policy
     */
    protected $policy = null;

    /**
     * @param SalesItem $salesItem
     * @param Context $context
     * @param Policy $policy
     */
    public function __construct($salesItem, $context, $policy)
    {
      $this->salesItem = $salesItem;
      $this->context = $context;
      $this->policy = $policy;
    }

    /**
     * @return SalesItem
     */
    public function getSalesItem()
    {
      return $this->salesItem;
    }

    /**
     * @param SalesItem $salesItem
     * @return CreateSalesItem
     */
    public function setSalesItem($salesItem)
    {
      $this->salesItem = $salesItem;
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
     * @return CreateSalesItem
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
     * @return CreateSalesItem
     */
    public function setPolicy($policy)
    {
      $this->policy = $policy;
      return $this;
    }

}
