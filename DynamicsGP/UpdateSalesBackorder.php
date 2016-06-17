<?php

class UpdateSalesBackorder
{

    /**
     * @var SalesBackorder $salesBackorder
     */
    protected $salesBackorder = null;

    /**
     * @var Context $context
     */
    protected $context = null;

    /**
     * @var Policy $policy
     */
    protected $policy = null;

    /**
     * @param SalesBackorder $salesBackorder
     * @param Context $context
     * @param Policy $policy
     */
    public function __construct($salesBackorder, $context, $policy)
    {
      $this->salesBackorder = $salesBackorder;
      $this->context = $context;
      $this->policy = $policy;
    }

    /**
     * @return SalesBackorder
     */
    public function getSalesBackorder()
    {
      return $this->salesBackorder;
    }

    /**
     * @param SalesBackorder $salesBackorder
     * @return UpdateSalesBackorder
     */
    public function setSalesBackorder($salesBackorder)
    {
      $this->salesBackorder = $salesBackorder;
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
     * @return UpdateSalesBackorder
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
     * @return UpdateSalesBackorder
     */
    public function setPolicy($policy)
    {
      $this->policy = $policy;
      return $this;
    }

}
