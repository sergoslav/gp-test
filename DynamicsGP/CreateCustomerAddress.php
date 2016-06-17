<?php

class CreateCustomerAddress
{

    /**
     * @var CustomerAddress $address
     */
    protected $address = null;

    /**
     * @var Context $context
     */
    protected $context = null;

    /**
     * @var Policy $policy
     */
    protected $policy = null;

    /**
     * @param CustomerAddress $address
     * @param Context $context
     * @param Policy $policy
     */
    public function __construct($address, $context, $policy)
    {
      $this->address = $address;
      $this->context = $context;
      $this->policy = $policy;
    }

    /**
     * @return CustomerAddress
     */
    public function getAddress()
    {
      return $this->address;
    }

    /**
     * @param CustomerAddress $address
     * @return CreateCustomerAddress
     */
    public function setAddress($address)
    {
      $this->address = $address;
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
     * @return CreateCustomerAddress
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
     * @return CreateCustomerAddress
     */
    public function setPolicy($policy)
    {
      $this->policy = $policy;
      return $this;
    }

}
