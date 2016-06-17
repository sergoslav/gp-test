<?php

class GetVendorAddressList
{

    /**
     * @var VendorAddressCriteria $criteria
     */
    protected $criteria = null;

    /**
     * @var Context $context
     */
    protected $context = null;

    /**
     * @param VendorAddressCriteria $criteria
     * @param Context $context
     */
    public function __construct($criteria, $context)
    {
      $this->criteria = $criteria;
      $this->context = $context;
    }

    /**
     * @return VendorAddressCriteria
     */
    public function getCriteria()
    {
      return $this->criteria;
    }

    /**
     * @param VendorAddressCriteria $criteria
     * @return GetVendorAddressList
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
     * @return GetVendorAddressList
     */
    public function setContext($context)
    {
      $this->context = $context;
      return $this;
    }

}
