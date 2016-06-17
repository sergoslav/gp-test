<?php

class GetCustomerList
{

    /**
     * @var CustomerCriteria $criteria
     */
    protected $criteria = null;

    /**
     * @var Context $context
     */
    protected $context = null;

    /**
     * @param CustomerCriteria $criteria
     * @param Context $context
     */
    public function __construct($criteria, $context)
    {
      $this->criteria = $criteria;
      $this->context = $context;
    }

    /**
     * @return CustomerCriteria
     */
    public function getCriteria()
    {
      return $this->criteria;
    }

    /**
     * @param CustomerCriteria $criteria
     * @return GetCustomerList
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
     * @return GetCustomerList
     */
    public function setContext($context)
    {
      $this->context = $context;
      return $this;
    }

}
