<?php

class GetSalesReturnByKeyResponse
{

    /**
     * @var SalesReturn $GetSalesReturnByKeyResult
     */
    protected $GetSalesReturnByKeyResult = null;

    /**
     * @param SalesReturn $GetSalesReturnByKeyResult
     */
    public function __construct($GetSalesReturnByKeyResult)
    {
      $this->GetSalesReturnByKeyResult = $GetSalesReturnByKeyResult;
    }

    /**
     * @return SalesReturn
     */
    public function getGetSalesReturnByKeyResult()
    {
      return $this->GetSalesReturnByKeyResult;
    }

    /**
     * @param SalesReturn $GetSalesReturnByKeyResult
     * @return GetSalesReturnByKeyResponse
     */
    public function setGetSalesReturnByKeyResult($GetSalesReturnByKeyResult)
    {
      $this->GetSalesReturnByKeyResult = $GetSalesReturnByKeyResult;
      return $this;
    }

}
