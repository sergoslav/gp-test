<?php

class GetChangedPricingKeyList
{

    /**
     * @var PricingChangedKeyCriteria $criteria
     */
    protected $criteria = null;

    /**
     * @var Context $context
     */
    protected $context = null;

    /**
     * @param PricingChangedKeyCriteria $criteria
     * @param Context $context
     */
    public function __construct($criteria, $context)
    {
      $this->criteria = $criteria;
      $this->context = $context;
    }

    /**
     * @return PricingChangedKeyCriteria
     */
    public function getCriteria()
    {
      return $this->criteria;
    }

    /**
     * @param PricingChangedKeyCriteria $criteria
     * @return GetChangedPricingKeyList
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
     * @return GetChangedPricingKeyList
     */
    public function setContext($context)
    {
      $this->context = $context;
      return $this;
    }

}
