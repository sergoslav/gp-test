<?php

class GetReceivablesReturnListResponse
{

    /**
     * @var ArrayOfReceivablesReturnSummary $GetReceivablesReturnListResult
     */
    protected $GetReceivablesReturnListResult = null;

    /**
     * @param ArrayOfReceivablesReturnSummary $GetReceivablesReturnListResult
     */
    public function __construct($GetReceivablesReturnListResult)
    {
      $this->GetReceivablesReturnListResult = $GetReceivablesReturnListResult;
    }

    /**
     * @return ArrayOfReceivablesReturnSummary
     */
    public function getGetReceivablesReturnListResult()
    {
      return $this->GetReceivablesReturnListResult;
    }

    /**
     * @param ArrayOfReceivablesReturnSummary $GetReceivablesReturnListResult
     * @return GetReceivablesReturnListResponse
     */
    public function setGetReceivablesReturnListResult($GetReceivablesReturnListResult)
    {
      $this->GetReceivablesReturnListResult = $GetReceivablesReturnListResult;
      return $this;
    }

}
