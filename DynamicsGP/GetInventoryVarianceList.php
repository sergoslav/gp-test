<?php

class GetInventoryVarianceList
{

    /**
     * @var InventoryVarianceCriteria $criteria
     */
    protected $criteria = null;

    /**
     * @var Context $context
     */
    protected $context = null;

    /**
     * @param InventoryVarianceCriteria $criteria
     * @param Context $context
     */
    public function __construct($criteria, $context)
    {
      $this->criteria = $criteria;
      $this->context = $context;
    }

    /**
     * @return InventoryVarianceCriteria
     */
    public function getCriteria()
    {
      return $this->criteria;
    }

    /**
     * @param InventoryVarianceCriteria $criteria
     * @return GetInventoryVarianceList
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
     * @return GetInventoryVarianceList
     */
    public function setContext($context)
    {
      $this->context = $context;
      return $this;
    }

}
