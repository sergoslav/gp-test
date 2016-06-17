<?php

class GetReceivablesDocumentListResponse
{

    /**
     * @var ArrayOfReceivablesDocumentSummary $GetReceivablesDocumentListResult
     */
    protected $GetReceivablesDocumentListResult = null;

    /**
     * @param ArrayOfReceivablesDocumentSummary $GetReceivablesDocumentListResult
     */
    public function __construct($GetReceivablesDocumentListResult)
    {
      $this->GetReceivablesDocumentListResult = $GetReceivablesDocumentListResult;
    }

    /**
     * @return ArrayOfReceivablesDocumentSummary
     */
    public function getGetReceivablesDocumentListResult()
    {
      return $this->GetReceivablesDocumentListResult;
    }

    /**
     * @param ArrayOfReceivablesDocumentSummary $GetReceivablesDocumentListResult
     * @return GetReceivablesDocumentListResponse
     */
    public function setGetReceivablesDocumentListResult($GetReceivablesDocumentListResult)
    {
      $this->GetReceivablesDocumentListResult = $GetReceivablesDocumentListResult;
      return $this;
    }

}
