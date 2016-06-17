<?php

class GetServiceQuoteListResponse
{

    /**
     * @var ArrayOfServiceQuoteSummary $GetServiceQuoteListResult
     */
    protected $GetServiceQuoteListResult = null;

    /**
     * @param ArrayOfServiceQuoteSummary $GetServiceQuoteListResult
     */
    public function __construct($GetServiceQuoteListResult)
    {
      $this->GetServiceQuoteListResult = $GetServiceQuoteListResult;
    }

    /**
     * @return ArrayOfServiceQuoteSummary
     */
    public function getGetServiceQuoteListResult()
    {
      return $this->GetServiceQuoteListResult;
    }

    /**
     * @param ArrayOfServiceQuoteSummary $GetServiceQuoteListResult
     * @return GetServiceQuoteListResponse
     */
    public function setGetServiceQuoteListResult($GetServiceQuoteListResult)
    {
      $this->GetServiceQuoteListResult = $GetServiceQuoteListResult;
      return $this;
    }

}
