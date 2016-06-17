<?php

class GetReceivablesCreditMemoByKeyResponse
{

    /**
     * @var ReceivablesCreditMemo $GetReceivablesCreditMemoByKeyResult
     */
    protected $GetReceivablesCreditMemoByKeyResult = null;

    /**
     * @param ReceivablesCreditMemo $GetReceivablesCreditMemoByKeyResult
     */
    public function __construct($GetReceivablesCreditMemoByKeyResult)
    {
      $this->GetReceivablesCreditMemoByKeyResult = $GetReceivablesCreditMemoByKeyResult;
    }

    /**
     * @return ReceivablesCreditMemo
     */
    public function getGetReceivablesCreditMemoByKeyResult()
    {
      return $this->GetReceivablesCreditMemoByKeyResult;
    }

    /**
     * @param ReceivablesCreditMemo $GetReceivablesCreditMemoByKeyResult
     * @return GetReceivablesCreditMemoByKeyResponse
     */
    public function setGetReceivablesCreditMemoByKeyResult($GetReceivablesCreditMemoByKeyResult)
    {
      $this->GetReceivablesCreditMemoByKeyResult = $GetReceivablesCreditMemoByKeyResult;
      return $this;
    }

}
