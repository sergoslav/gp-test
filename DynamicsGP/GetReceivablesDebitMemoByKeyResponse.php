<?php

class GetReceivablesDebitMemoByKeyResponse
{

    /**
     * @var ReceivablesDebitMemo $GetReceivablesDebitMemoByKeyResult
     */
    protected $GetReceivablesDebitMemoByKeyResult = null;

    /**
     * @param ReceivablesDebitMemo $GetReceivablesDebitMemoByKeyResult
     */
    public function __construct($GetReceivablesDebitMemoByKeyResult)
    {
      $this->GetReceivablesDebitMemoByKeyResult = $GetReceivablesDebitMemoByKeyResult;
    }

    /**
     * @return ReceivablesDebitMemo
     */
    public function getGetReceivablesDebitMemoByKeyResult()
    {
      return $this->GetReceivablesDebitMemoByKeyResult;
    }

    /**
     * @param ReceivablesDebitMemo $GetReceivablesDebitMemoByKeyResult
     * @return GetReceivablesDebitMemoByKeyResponse
     */
    public function setGetReceivablesDebitMemoByKeyResult($GetReceivablesDebitMemoByKeyResult)
    {
      $this->GetReceivablesDebitMemoByKeyResult = $GetReceivablesDebitMemoByKeyResult;
      return $this;
    }

}
