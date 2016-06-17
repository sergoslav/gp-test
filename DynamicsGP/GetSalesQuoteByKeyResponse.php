<?php

class GetSalesQuoteByKeyResponse
{

    /**
     * @var SalesQuote $GetSalesQuoteByKeyResult
     */
    protected $GetSalesQuoteByKeyResult = null;

    /**
     * @param SalesQuote $GetSalesQuoteByKeyResult
     */
    public function __construct($GetSalesQuoteByKeyResult)
    {
      $this->GetSalesQuoteByKeyResult = $GetSalesQuoteByKeyResult;
    }

    /**
     * @return SalesQuote
     */
    public function getGetSalesQuoteByKeyResult()
    {
      return $this->GetSalesQuoteByKeyResult;
    }

    /**
     * @param SalesQuote $GetSalesQuoteByKeyResult
     * @return GetSalesQuoteByKeyResponse
     */
    public function setGetSalesQuoteByKeyResult($GetSalesQuoteByKeyResult)
    {
      $this->GetSalesQuoteByKeyResult = $GetSalesQuoteByKeyResult;
      return $this;
    }

}
