<?php

class GetPriceLevelList
{

    /**
     * @var PriceLevelCriteria $criteria
     */
    protected $criteria = null;

    /**
     * @var Context $context
     */
    protected $context = null;

    /**
     * @param PriceLevelCriteria $criteria
     * @param Context $context
     */
    public function __construct($criteria, $context)
    {
      $this->criteria = $criteria;
      $this->context = $context;
    }

    /**
     * @return PriceLevelCriteria
     */
    public function getCriteria()
    {
      return $this->criteria;
    }

    /**
     * @param PriceLevelCriteria $criteria
     * @return GetPriceLevelList
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
     * @return GetPriceLevelList
     */
    public function setContext($context)
    {
      $this->context = $context;
      return $this;
    }

}
