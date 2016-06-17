<?php

class GetReceivablesCreditMemoListResponse
{

    /**
     * @var ArrayOfReceivablesCreditMemoSummary $GetReceivablesCreditMemoListResult
     */
    protected $GetReceivablesCreditMemoListResult = null;

    /**
     * @param ArrayOfReceivablesCreditMemoSummary $GetReceivablesCreditMemoListResult
     */
    public function __construct($GetReceivablesCreditMemoListResult)
    {
      $this->GetReceivablesCreditMemoListResult = $GetReceivablesCreditMemoListResult;
    }

    /**
     * @return ArrayOfReceivablesCreditMemoSummary
     */
    public function getGetReceivablesCreditMemoListResult()
    {
      return $this->GetReceivablesCreditMemoListResult;
    }

    /**
     * @param ArrayOfReceivablesCreditMemoSummary $GetReceivablesCreditMemoListResult
     * @return GetReceivablesCreditMemoListResponse
     */
    public function setGetReceivablesCreditMemoListResult($GetReceivablesCreditMemoListResult)
    {
      $this->GetReceivablesCreditMemoListResult = $GetReceivablesCreditMemoListResult;
      return $this;
    }

}
