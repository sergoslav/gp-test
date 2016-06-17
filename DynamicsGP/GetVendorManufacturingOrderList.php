<?php

class GetVendorManufacturingOrderList
{

    /**
     * @var VendorManufacturingOrderCriteria $criteria
     */
    protected $criteria = null;

    /**
     * @var Context $context
     */
    protected $context = null;

    /**
     * @param VendorManufacturingOrderCriteria $criteria
     * @param Context $context
     */
    public function __construct($criteria, $context)
    {
      $this->criteria = $criteria;
      $this->context = $context;
    }

    /**
     * @return VendorManufacturingOrderCriteria
     */
    public function getCriteria()
    {
      return $this->criteria;
    }

    /**
     * @param VendorManufacturingOrderCriteria $criteria
     * @return GetVendorManufacturingOrderList
     */
    public function setCriteria($criteria)
    {
      $this->criteria = $criteria;
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
     * @return GetVendorManufacturingOrderList
     */
    public function setContext($context)
    {
      $this->context = $context;
      return $this;
    }

}
