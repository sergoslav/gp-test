<?php

class GetPricingList
{

    /**
     * @var PricingCriteria $criteria
     */
    protected $criteria = null;

    /**
     * @var Context $context
     */
    protected $context = null;

    /**
     * @param PricingCriteria $criteria
     * @param Context $context
     */
    public function __construct($criteria, $context)
    {
      $this->criteria = $criteria;
      $this->context = $context;
    }

    /**
     * @return PricingCriteria
     */
    public function getCriteria()
    {
      return $this->criteria;
    }

    /**
     * @param PricingCriteria $criteria
     * @return GetPricingList
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
     * @return GetPricingList
     */
    public function setContext($context)
    {
      $this->context = $context;
      return $this;
    }

}
