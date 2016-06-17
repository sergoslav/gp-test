<?php

class GetReceivablesDebitMemoListResponse
{

    /**
     * @var ArrayOfReceivablesDebitMemoSummary $GetReceivablesDebitMemoListResult
     */
    protected $GetReceivablesDebitMemoListResult = null;

    /**
     * @param ArrayOfReceivablesDebitMemoSummary $GetReceivablesDebitMemoListResult
     */
    public function __construct($GetReceivablesDebitMemoListResult)
    {
      $this->GetReceivablesDebitMemoListResult = $GetReceivablesDebitMemoListResult;
    }

    /**
     * @return ArrayOfReceivablesDebitMemoSummary
     */
    public function getGetReceivablesDebitMemoListResult()
    {
      return $this->GetReceivablesDebitMemoListResult;
    }

    /**
     * @param ArrayOfReceivablesDebitMemoSummary $GetReceivablesDebitMemoListResult
     * @return GetReceivablesDebitMemoListResponse
     */
    public function setGetReceivablesDebitMemoListResult($GetReceivablesDebitMemoListResult)
    {
      $this->GetReceivablesDebitMemoListResult = $GetReceivablesDebitMemoListResult;
      return $this;
    }

}
