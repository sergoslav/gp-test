<?php

class GetSalesTerritoryList
{

    /**
     * @var SalesTerritoryCriteria $criteria
     */
    protected $criteria = null;

    /**
     * @var Context $context
     */
    protected $context = null;

    /**
     * @param SalesTerritoryCriteria $criteria
     * @param Context $context
     */
    public function __construct($criteria, $context)
    {
      $this->criteria = $criteria;
      $this->context = $context;
    }

    /**
     * @return SalesTerritoryCriteria
     */
    public function getCriteria()
    {
      return $this->criteria;
    }

    /**
     * @param SalesTerritoryCriteria $criteria
     * @return GetSalesTerritoryList
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
     * @return GetSalesTerritoryList
     */
    public function setContext($context)
    {
      $this->context = $context;
      return $this;
    }

}
