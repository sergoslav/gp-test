<?php

class GetVendorPlannedOrderList
{

    /**
     * @var VendorPlannedOrderCriteria $criteria
     */
    protected $criteria = null;

    /**
     * @var Context $context
     */
    protected $context = null;

    /**
     * @param VendorPlannedOrderCriteria $criteria
     * @param Context $context
     */
    public function __construct($criteria, $context)
    {
      $this->criteria = $criteria;
      $this->context = $context;
    }

    /**
     * @return VendorPlannedOrderCriteria
     */
    public function getCriteria()
    {
      return $this->criteria;
    }

    /**
     * @param VendorPlannedOrderCriteria $criteria
     * @return GetVendorPlannedOrderList
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
     * @return GetVendorPlannedOrderList
     */
    public function setContext($context)
    {
      $this->context = $context;
      return $this;
    }

}
