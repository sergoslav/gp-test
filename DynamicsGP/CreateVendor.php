<?php

class CreateVendor
{

    /**
     * @var Vendor $vendor
     */
    protected $vendor = null;

    /**
     * @var Context $context
     */
    protected $context = null;

    /**
     * @var Policy $policy
     */
    protected $policy = null;

    /**
     * @param Vendor $vendor
     * @param Context $context
     * @param Policy $policy
     */
    public function __construct($vendor, $context, $policy)
    {
      $this->vendor = $vendor;
      $this->context = $context;
      $this->policy = $policy;
    }

    /**
     * @return Vendor
     */
    public function getVendor()
    {
      return $this->vendor;
    }

    /**
     * @param Vendor $vendor
     * @return CreateVendor
     */
    public function setVendor($vendor)
    {
      $this->vendor = $vendor;
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
     * @return CreateVendor
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
     * @return CreateVendor
     */
    public function setPolicy($policy)
    {
      $this->policy = $policy;
      return $this;
    }

}
