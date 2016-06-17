<?php

class UpdateItemVendor
{

    /**
     * @var ItemVendor $itemVendor
     */
    protected $itemVendor = null;

    /**
     * @var Context $context
     */
    protected $context = null;

    /**
     * @var Policy $policy
     */
    protected $policy = null;

    /**
     * @param ItemVendor $itemVendor
     * @param Context $context
     * @param Policy $policy
     */
    public function __construct($itemVendor, $context, $policy)
    {
      $this->itemVendor = $itemVendor;
      $this->context = $context;
      $this->policy = $policy;
    }

    /**
     * @return ItemVendor
     */
    public function getItemVendor()
    {
      return $this->itemVendor;
    }

    /**
     * @param ItemVendor $itemVendor
     * @return UpdateItemVendor
     */
    public function setItemVendor($itemVendor)
    {
      $this->itemVendor = $itemVendor;
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
     * @return UpdateItemVendor
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
     * @return UpdateItemVendor
     */
    public function setPolicy($policy)
    {
      $this->policy = $policy;
      return $this;
    }

}
