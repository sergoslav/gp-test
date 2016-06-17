<?php

class GetVendorPlannedOrderByKey
{

    /**
     * @var PlannedOrderKey $key
     */
    protected $key = null;

    /**
     * @var Context $context
     */
    protected $context = null;

    /**
     * @param PlannedOrderKey $key
     * @param Context $context
     */
    public function __construct($key, $context)
    {
      $this->key = $key;
      $this->context = $context;
    }

    /**
     * @return PlannedOrderKey
     */
    public function getKey()
    {
      return $this->key;
    }

    /**
     * @param PlannedOrderKey $key
     * @return GetVendorPlannedOrderByKey
     */
    public function setKey($key)
    {
      $this->key = $key;
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
     * @return GetVendorPlannedOrderByKey
     */
    public function setContext($context)
    {
      $this->context = $context;
      return $this;
    }

}
