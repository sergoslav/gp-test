<?php

class GetServiceQuoteByKeyResponse
{

    /**
     * @var ServiceQuote $GetServiceQuoteByKeyResult
     */
    protected $GetServiceQuoteByKeyResult = null;

    /**
     * @param ServiceQuote $GetServiceQuoteByKeyResult
     */
    public function __construct($GetServiceQuoteByKeyResult)
    {
      $this->GetServiceQuoteByKeyResult = $GetServiceQuoteByKeyResult;
    }

    /**
     * @return ServiceQuote
     */
    public function getGetServiceQuoteByKeyResult()
    {
      return $this->GetServiceQuoteByKeyResult;
    }

    /**
     * @param ServiceQuote $GetServiceQuoteByKeyResult
     * @return GetServiceQuoteByKeyResponse
     */
    public function setGetServiceQuoteByKeyResult($GetServiceQuoteByKeyResult)
    {
      $this->GetServiceQuoteByKeyResult = $GetServiceQuoteByKeyResult;
      return $this;
    }

}
