<?php

class GetChangedShippingMethodKeyList
{

    /**
     * @var ShippingMethodChangedKeyCriteria $criteria
     */
    protected $criteria = null;

    /**
     * @var Context $context
     */
    protected $context = null;

    /**
     * @param ShippingMethodChangedKeyCriteria $criteria
     * @param Context $context
     */
    public function __construct($criteria, $context)
    {
      $this->criteria = $criteria;
      $this->context = $context;
    }

    /**
     * @return ShippingMethodChangedKeyCriteria
     */
    public function getCriteria()
    {
      return $this->criteria;
    }

    /**
     * @param ShippingMethodChangedKeyCriteria $criteria
     * @return GetChangedShippingMethodKeyList
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
     * @return GetChangedShippingMethodKeyList
     */
    public function setContext($context)
    {
      $this->context = $context;
      return $this;
    }

}
