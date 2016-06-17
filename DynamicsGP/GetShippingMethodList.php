<?php

class GetShippingMethodList
{

    /**
     * @var ShippingMethodCriteria $criteria
     */
    protected $criteria = null;

    /**
     * @var Context $context
     */
    protected $context = null;

    /**
     * @param ShippingMethodCriteria $criteria
     * @param Context $context
     */
    public function __construct($criteria, $context)
    {
      $this->criteria = $criteria;
      $this->context = $context;
    }

    /**
     * @return ShippingMethodCriteria
     */
    public function getCriteria()
    {
      return $this->criteria;
    }

    /**
     * @param ShippingMethodCriteria $criteria
     * @return GetShippingMethodList
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
     * @return GetShippingMethodList
     */
    public function setContext($context)
    {
      $this->context = $context;
      return $this;
    }

}
