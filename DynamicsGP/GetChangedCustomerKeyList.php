<?php

class GetChangedCustomerKeyList
{

    /**
     * @var CustomerChangedKeyCriteria $criteria
     */
    protected $criteria = null;

    /**
     * @var Context $context
     */
    protected $context = null;

    /**
     * @param CustomerChangedKeyCriteria $criteria
     * @param Context $context
     */
    public function __construct($criteria, $context)
    {
      $this->criteria = $criteria;
      $this->context = $context;
    }

    /**
     * @return CustomerChangedKeyCriteria
     */
    public function getCriteria()
    {
      return $this->criteria;
    }

    /**
     * @param CustomerChangedKeyCriteria $criteria
     * @return GetChangedCustomerKeyList
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
     * @return GetChangedCustomerKeyList
     */
    public function setContext($context)
    {
      $this->context = $context;
      return $this;
    }

}
