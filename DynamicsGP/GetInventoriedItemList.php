<?php

class GetInventoriedItemList
{

    /**
     * @var InventoriedItemCriteria $criteria
     */
    protected $criteria = null;

    /**
     * @var Context $context
     */
    protected $context = null;

    /**
     * @param InventoriedItemCriteria $criteria
     * @param Context $context
     */
    public function __construct($criteria, $context)
    {
      $this->criteria = $criteria;
      $this->context = $context;
    }

    /**
     * @return InventoriedItemCriteria
     */
    public function getCriteria()
    {
      return $this->criteria;
    }

    /**
     * @param InventoriedItemCriteria $criteria
     * @return GetInventoriedItemList
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
     * @return GetInventoriedItemList
     */
    public function setContext($context)
    {
      $this->context = $context;
      return $this;
    }

}
