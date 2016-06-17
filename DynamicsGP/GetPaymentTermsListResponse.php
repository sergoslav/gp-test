<?php

class GetPaymentTermsListResponse
{

    /**
     * @var ArrayOfPaymentTerms $GetPaymentTermsListResult
     */
    protected $GetPaymentTermsListResult = null;

    /**
     * @param ArrayOfPaymentTerms $GetPaymentTermsListResult
     */
    public function __construct($GetPaymentTermsListResult)
    {
      $this->GetPaymentTermsListResult = $GetPaymentTermsListResult;
    }

    /**
     * @return ArrayOfPaymentTerms
     */
    public function getGetPaymentTermsListResult()
    {
      return $this->GetPaymentTermsListResult;
    }

    /**
     * @param ArrayOfPaymentTerms $GetPaymentTermsListResult
     * @return GetPaymentTermsListResponse
     */
    public function setGetPaymentTermsListResult($GetPaymentTermsListResult)
    {
      $this->GetPaymentTermsListResult = $GetPaymentTermsListResult;
      return $this;
    }

}
