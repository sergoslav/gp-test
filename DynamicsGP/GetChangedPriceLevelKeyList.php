<?php

class GetChangedPriceLevelKeyList
{

    /**
     * @var PriceLevelChangedKeyCriteria $criteria
     */
    protected $criteria = null;

    /**
     * @var Context $context
     */
    protected $context = null;

    /**
     * @param PriceLevelChangedKeyCriteria $criteria
     * @param Context $context
     */
    public function __construct($criteria, $context)
    {
      $this->criteria = $criteria;
      $this->context = $context;
    }

    /**
     * @return PriceLevelChangedKeyCriteria
     */
    public function getCriteria()
    {
      return $this->criteria;
    }

    /**
     * @param PriceLevelChangedKeyCriteria $criteria
     * @return GetChangedPriceLevelKeyList
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
     * @return GetChangedPriceLevelKeyList
     */
    public function setContext($context)
    {
      $this->context = $context;
      return $this;
    }

}
