<?php

class GetBankListResponse
{

    /**
     * @var ArrayOfBank $GetBankListResult
     */
    protected $GetBankListResult = null;

    /**
     * @param ArrayOfBank $GetBankListResult
     */
    public function __construct($GetBankListResult)
    {
      $this->GetBankListResult = $GetBankListResult;
    }

    /**
     * @return ArrayOfBank
     */
    public function getGetBankListResult()
    {
      return $this->GetBankListResult;
    }

    /**
     * @param ArrayOfBank $GetBankListResult
     * @return GetBankListResponse
     */
    public function setGetBankListResult($GetBankListResult)
    {
      $this->GetBankListResult = $GetBankListResult;
      return $this;
    }

}
