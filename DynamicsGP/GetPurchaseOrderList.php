<?php

class GetPurchaseOrderList
{

    /**
     * @var PurchaseOrderCriteria $criteria
     */
    protected $criteria = null;

    /**
     * @var Context $context
     */
    protected $context = null;

    /**
     * @param PurchaseOrderCriteria $criteria
     * @param Context $context
     */
    public function __construct($criteria, $context)
    {
      $this->criteria = $criteria;
      $this->context = $context;
    }

    /**
     * @return PurchaseOrderCriteria
     */
    public function getCriteria()
    {
      return $this->criteria;
    }

    /**
     * @param PurchaseOrderCriteria $criteria
     * @return GetPurchaseOrderList
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
     * @return GetPurchaseOrderList
     */
    public function setContext($context)
    {
      $this->context = $context;
      return $this;
    }

}
