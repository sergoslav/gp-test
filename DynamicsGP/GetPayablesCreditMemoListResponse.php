<?php

class GetPayablesCreditMemoListResponse
{

    /**
     * @var ArrayOfPayablesCreditMemoSummary $GetPayablesCreditMemoListResult
     */
    protected $GetPayablesCreditMemoListResult = null;

    /**
     * @param ArrayOfPayablesCreditMemoSummary $GetPayablesCreditMemoListResult
     */
    public function __construct($GetPayablesCreditMemoListResult)
    {
      $this->GetPayablesCreditMemoListResult = $GetPayablesCreditMemoListResult;
    }

    /**
     * @return ArrayOfPayablesCreditMemoSummary
     */
    public function getGetPayablesCreditMemoListResult()
    {
      return $this->GetPayablesCreditMemoListResult;
    }

    /**
     * @param ArrayOfPayablesCreditMemoSummary $GetPayablesCreditMemoListResult
     * @return GetPayablesCreditMemoListResponse
     */
    public function setGetPayablesCreditMemoListResult($GetPayablesCreditMemoListResult)
    {
      $this->GetPayablesCreditMemoListResult = $GetPayablesCreditMemoListResult;
      return $this;
    }

}
