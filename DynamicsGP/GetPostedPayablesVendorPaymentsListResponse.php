<?php

class GetPostedPayablesVendorPaymentsListResponse
{

    /**
     * @var ArrayOfPostedPayablesVendorPaymentSummary $GetPostedPayablesVendorPaymentsListResult
     */
    protected $GetPostedPayablesVendorPaymentsListResult = null;

    /**
     * @param ArrayOfPostedPayablesVendorPaymentSummary $GetPostedPayablesVendorPaymentsListResult
     */
    public function __construct($GetPostedPayablesVendorPaymentsListResult)
    {
      $this->GetPostedPayablesVendorPaymentsListResult = $GetPostedPayablesVendorPaymentsListResult;
    }

    /**
     * @return ArrayOfPostedPayablesVendorPaymentSummary
     */
    public function getGetPostedPayablesVendorPaymentsListResult()
    {
      return $this->GetPostedPayablesVendorPaymentsListResult;
    }

    /**
     * @param ArrayOfPostedPayablesVendorPaymentSummary $GetPostedPayablesVendorPaymentsListResult
     * @return GetPostedPayablesVendorPaymentsListResponse
     */
    public function setGetPostedPayablesVendorPaymentsListResult($GetPostedPayablesVendorPaymentsListResult)
    {
      $this->GetPostedPayablesVendorPaymentsListResult = $GetPostedPayablesVendorPaymentsListResult;
      return $this;
    }

}
