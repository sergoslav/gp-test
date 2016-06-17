<?php

class CreateSalesReturn
{

    /**
     * @var SalesReturn $salesReturn
     */
    protected $salesReturn = null;

    /**
     * @var Context $context
     */
    protected $context = null;

    /**
     * @var Policy $policy
     */
    protected $policy = null;

    /**
     * @param SalesReturn $salesReturn
     * @param Context $context
     * @param Policy $policy
     */
    public function __construct($salesReturn, $context, $policy)
    {
      $this->salesReturn = $salesReturn;
      $this->context = $context;
      $this->policy = $policy;
    }

    /**
     * @return SalesReturn
     */
    public function getSalesReturn()
    {
      return $this->salesReturn;
    }

    /**
     * @param SalesReturn $salesReturn
     * @return CreateSalesReturn
     */
    public function setSalesReturn($salesReturn)
    {
      $this->salesReturn = $salesReturn;
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
     * @return CreateSalesReturn
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
     * @return CreateSalesReturn
     */
    public function setPolicy($policy)
    {
      $this->policy = $policy;
      return $this;
    }

}
