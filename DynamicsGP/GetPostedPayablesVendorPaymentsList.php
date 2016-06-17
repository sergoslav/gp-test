<?php

class GetPostedPayablesVendorPaymentsList
{

    /**
     * @var PostedPayablesVendorPaymentCriteria $criteria
     */
    protected $criteria = null;

    /**
     * @var Context $context
     */
    protected $context = null;

    /**
     * @param PostedPayablesVendorPaymentCriteria $criteria
     * @param Context $context
     */
    public function __construct($criteria, $context)
    {
      $this->criteria = $criteria;
      $this->context = $context;
    }

    /**
     * @return PostedPayablesVendorPaymentCriteria
     */
    public function getCriteria()
    {
      return $this->criteria;
    }

    /**
     * @param PostedPayablesVendorPaymentCriteria $criteria
     * @return GetPostedPayablesVendorPaymentsList
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
     * @return GetPostedPayablesVendorPaymentsList
     */
    public function setContext($context)
    {
      $this->context = $context;
      return $this;
    }

}
