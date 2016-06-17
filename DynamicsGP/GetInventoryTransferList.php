<?php

class GetInventoryTransferList
{

    /**
     * @var InventoryTransferCriteria $criteria
     */
    protected $criteria = null;

    /**
     * @var Context $context
     */
    protected $context = null;

    /**
     * @param InventoryTransferCriteria $criteria
     * @param Context $context
     */
    public function __construct($criteria, $context)
    {
      $this->criteria = $criteria;
      $this->context = $context;
    }

    /**
     * @return InventoryTransferCriteria
     */
    public function getCriteria()
    {
      return $this->criteria;
    }

    /**
     * @param InventoryTransferCriteria $criteria
     * @return GetInventoryTransferList
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
     * @return GetInventoryTransferList
     */
    public function setContext($context)
    {
      $this->context = $context;
      return $this;
    }

}
