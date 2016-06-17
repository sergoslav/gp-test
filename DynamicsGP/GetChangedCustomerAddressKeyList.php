<?php

class GetChangedCustomerAddressKeyList
{

    /**
     * @var CustomerAddressChangedKeyCriteria $criteria
     */
    protected $criteria = null;

    /**
     * @var Context $context
     */
    protected $context = null;

    /**
     * @param CustomerAddressChangedKeyCriteria $criteria
     * @param Context $context
     */
    public function __construct($criteria, $context)
    {
      $this->criteria = $criteria;
      $this->context = $context;
    }

    /**
     * @return CustomerAddressChangedKeyCriteria
     */
    public function getCriteria()
    {
      return $this->criteria;
    }

    /**
     * @param CustomerAddressChangedKeyCriteria $criteria
     * @return GetChangedCustomerAddressKeyList
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
     * @return GetChangedCustomerAddressKeyList
     */
    public function setContext($context)
    {
      $this->context = $context;
      return $this;
    }

}
