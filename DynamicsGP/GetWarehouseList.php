<?php

class GetWarehouseList
{

    /**
     * @var WarehouseCriteria $criteria
     */
    protected $criteria = null;

    /**
     * @var Context $context
     */
    protected $context = null;

    /**
     * @param WarehouseCriteria $criteria
     * @param Context $context
     */
    public function __construct($criteria, $context)
    {
      $this->criteria = $criteria;
      $this->context = $context;
    }

    /**
     * @return WarehouseCriteria
     */
    public function getCriteria()
    {
      return $this->criteria;
    }

    /**
     * @param WarehouseCriteria $criteria
     * @return GetWarehouseList
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
     * @return GetWarehouseList
     */
    public function setContext($context)
    {
      $this->context = $context;
      return $this;
    }

}
