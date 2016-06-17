<?php

class GetItemVendorList
{

    /**
     * @var ItemVendorCriteria $criteria
     */
    protected $criteria = null;

    /**
     * @var Context $context
     */
    protected $context = null;

    /**
     * @param ItemVendorCriteria $criteria
     * @param Context $context
     */
    public function __construct($criteria, $context)
    {
      $this->criteria = $criteria;
      $this->context = $context;
    }

    /**
     * @return ItemVendorCriteria
     */
    public function getCriteria()
    {
      return $this->criteria;
    }

    /**
     * @param ItemVendorCriteria $criteria
     * @return GetItemVendorList
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
     * @return GetItemVendorList
     */
    public function setContext($context)
    {
      $this->context = $context;
      return $this;
    }

}
