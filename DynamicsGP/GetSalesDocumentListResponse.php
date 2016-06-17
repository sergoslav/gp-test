<?php

class GetSalesDocumentListResponse
{

    /**
     * @var ArrayOfSalesDocumentSummary $GetSalesDocumentListResult
     */
    protected $GetSalesDocumentListResult = null;

    /**
     * @param ArrayOfSalesDocumentSummary $GetSalesDocumentListResult
     */
    public function __construct($GetSalesDocumentListResult)
    {
      $this->GetSalesDocumentListResult = $GetSalesDocumentListResult;
    }

    /**
     * @return ArrayOfSalesDocumentSummary
     */
    public function getGetSalesDocumentListResult()
    {
      return $this->GetSalesDocumentListResult;
    }

    /**
     * @param ArrayOfSalesDocumentSummary $GetSalesDocumentListResult
     * @return GetSalesDocumentListResponse
     */
    public function setGetSalesDocumentListResult($GetSalesDocumentListResult)
    {
      $this->GetSalesDocumentListResult = $GetSalesDocumentListResult;
      return $this;
    }

}
