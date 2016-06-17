<?php

class CreateCustomer
{

    /**
     * @var Customer $customer
     */
    protected $customer = null;

    /**
     * @var Context $context
     */
    protected $context = null;

    /**
     * @var Policy $policy
     */
    protected $policy = null;

    /**
     * @param Customer $customer
     * @param Context $context
     * @param Policy $policy
     */
    public function __construct($customer, $context, $policy)
    {
      $this->customer = $customer;
      $this->context = $context;
      $this->policy = $policy;
    }

    /**
     * @return Customer
     */
    public function getCustomer()
    {
      return $this->customer;
    }

    /**
     * @param Customer $customer
     * @return CreateCustomer
     */
    public function setCustomer($customer)
    {
      $this->customer = $customer;
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
     * @return CreateCustomer
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
     * @return CreateCustomer
     */
    public function setPolicy($policy)
    {
      $this->policy = $policy;
      return $this;
    }

}
