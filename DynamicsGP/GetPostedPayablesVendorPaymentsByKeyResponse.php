<?php

class GetPostedPayablesVendorPaymentsByKeyResponse
{

    /**
     * @var PostedPayablesVendorPayment $GetPostedPayablesVendorPaymentsByKeyResult
     */
    protected $GetPostedPayablesVendorPaymentsByKeyResult = null;

    /**
     * @param PostedPayablesVendorPayment $GetPostedPayablesVendorPaymentsByKeyResult
     */
    public function __construct($GetPostedPayablesVendorPaymentsByKeyResult)
    {
      $this->GetPostedPayablesVendorPaymentsByKeyResult = $GetPostedPayablesVendorPaymentsByKeyResult;
    }

    /**
     * @return PostedPayablesVendorPayment
     */
    public function getGetPostedPayablesVendorPaymentsByKeyResult()
    {
      return $this->GetPostedPayablesVendorPaymentsByKeyResult;
    }

    /**
     * @param PostedPayablesVendorPayment $GetPostedPayablesVendorPaymentsByKeyResult
     * @return GetPostedPayablesVendorPaymentsByKeyResponse
     */
    public function setGetPostedPayablesVendorPaymentsByKeyResult($GetPostedPayablesVendorPaymentsByKeyResult)
    {
      $this->GetPostedPayablesVendorPaymentsByKeyResult = $GetPostedPayablesVendorPaymentsByKeyResult;
      return $this;
    }

}
