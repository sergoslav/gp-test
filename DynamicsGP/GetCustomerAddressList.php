<?php

class GetCustomerAddressList
{

    /**
     * @var CustomerAddressCriteria $criteria
     */
    protected $criteria = null;

    /**
     * @var Context $context
     */
    protected $context = null;

    /**
     * @param CustomerAddressCriteria $criteria
     * @param Context $context
     */
    public function __construct($criteria, $context)
    {
      $this->criteria = $criteria;
      $this->context = $context;
    }

    /**
     * @return CustomerAddressCriteria
     */
    public function getCriteria()
    {
      return $this->criteria;
    }

    /**
     * @param CustomerAddressCriteria $criteria
     * @return GetCustomerAddressList
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
     * @return GetCustomerAddressList
     */
    public function setContext($context)
    {
      $this->context = $context;
      return $this;
    }

}
