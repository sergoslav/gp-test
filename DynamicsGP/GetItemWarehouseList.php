<?php

class GetItemWarehouseList
{

    /**
     * @var ItemWarehouseCriteria $criteria
     */
    protected $criteria = null;

    /**
     * @var Context $context
     */
    protected $context = null;

    /**
     * @param ItemWarehouseCriteria $criteria
     * @param Context $context
     */
    public function __construct($criteria, $context)
    {
      $this->criteria = $criteria;
      $this->context = $context;
    }

    /**
     * @return ItemWarehouseCriteria
     */
    public function getCriteria()
    {
      return $this->criteria;
    }

    /**
     * @param ItemWarehouseCriteria $criteria
     * @return GetItemWarehouseList
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
     * @return GetItemWarehouseList
     */
    public function setContext($context)
    {
      $this->context = $context;
      return $this;
    }

}
