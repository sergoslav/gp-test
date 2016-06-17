<?php

class CreateVendorAddress
{

    /**
     * @var VendorAddress $address
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
     * @param VendorAddress $address
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
     * @return VendorAddress
     */
    public function getAddress()
    {
      return $this->address;
    }

    /**
     * @param VendorAddress $address
     * @return CreateVendorAddress
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
     * @return CreateVendorAddress
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
     * @return CreateVendorAddress
     */
    public function setPolicy($policy)
    {
      $this->policy = $policy;
      return $this;
    }

}
