<?php

class GetInventoryAdjustmentList
{

    /**
     * @var InventoryAdjustmentCriteria $criteria
     */
    protected $criteria = null;

    /**
     * @var Context $context
     */
    protected $context = null;

    /**
     * @param InventoryAdjustmentCriteria $criteria
     * @param Context $context
     */
    public function __construct($criteria, $context)
    {
      $this->criteria = $criteria;
      $this->context = $context;
    }

    /**
     * @return InventoryAdjustmentCriteria
     */
    public function getCriteria()
    {
      return $this->criteria;
    }

    /**
     * @param InventoryAdjustmentCriteria $criteria
     * @return GetInventoryAdjustmentList
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
     * @return GetInventoryAdjustmentList
     */
    public function setContext($context)
    {
      $this->context = $context;
      return $this;
    }

}
