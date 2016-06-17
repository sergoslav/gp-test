<?php

class GetPayablesCreditMemoByKeyResponse
{

    /**
     * @var PayablesCreditMemo $GetPayablesCreditMemoByKeyResult
     */
    protected $GetPayablesCreditMemoByKeyResult = null;

    /**
     * @param PayablesCreditMemo $GetPayablesCreditMemoByKeyResult
     */
    public function __construct($GetPayablesCreditMemoByKeyResult)
    {
      $this->GetPayablesCreditMemoByKeyResult = $GetPayablesCreditMemoByKeyResult;
    }

    /**
     * @return PayablesCreditMemo
     */
    public function getGetPayablesCreditMemoByKeyResult()
    {
      return $this->GetPayablesCreditMemoByKeyResult;
    }

    /**
     * @param PayablesCreditMemo $GetPayablesCreditMemoByKeyResult
     * @return GetPayablesCreditMemoByKeyResponse
     */
    public function setGetPayablesCreditMemoByKeyResult($GetPayablesCreditMemoByKeyResult)
    {
      $this->GetPayablesCreditMemoByKeyResult = $GetPayablesCreditMemoByKeyResult;
      return $this;
    }

}
