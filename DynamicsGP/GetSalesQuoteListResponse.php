<?php

class GetSalesQuoteListResponse
{

    /**
     * @var ArrayOfSalesQuoteSummary $GetSalesQuoteListResult
     */
    protected $GetSalesQuoteListResult = null;

    /**
     * @param ArrayOfSalesQuoteSummary $GetSalesQuoteListResult
     */
    public function __construct($GetSalesQuoteListResult)
    {
      $this->GetSalesQuoteListResult = $GetSalesQuoteListResult;
    }

    /**
     * @return ArrayOfSalesQuoteSummary
     */
    public function getGetSalesQuoteListResult()
    {
      return $this->GetSalesQuoteListResult;
    }

    /**
     * @param ArrayOfSalesQuoteSummary $GetSalesQuoteListResult
     * @return GetSalesQuoteListResponse
     */
    public function setGetSalesQuoteListResult($GetSalesQuoteListResult)
    {
      $this->GetSalesQuoteListResult = $GetSalesQuoteListResult;
      return $this;
    }

}
