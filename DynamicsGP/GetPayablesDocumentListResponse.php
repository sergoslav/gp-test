<?php

class GetPayablesDocumentListResponse
{

    /**
     * @var ArrayOfPayablesDocumentSummary $GetPayablesDocumentListResult
     */
    protected $GetPayablesDocumentListResult = null;

    /**
     * @param ArrayOfPayablesDocumentSummary $GetPayablesDocumentListResult
     */
    public function __construct($GetPayablesDocumentListResult)
    {
      $this->GetPayablesDocumentListResult = $GetPayablesDocumentListResult;
    }

    /**
     * @return ArrayOfPayablesDocumentSummary
     */
    public function getGetPayablesDocumentListResult()
    {
      return $this->GetPayablesDocumentListResult;
    }

    /**
     * @param ArrayOfPayablesDocumentSummary $GetPayablesDocumentListResult
     * @return GetPayablesDocumentListResponse
     */
    public function setGetPayablesDocumentListResult($GetPayablesDocumentListResult)
    {
      $this->GetPayablesDocumentListResult = $GetPayablesDocumentListResult;
      return $this;
    }

}
