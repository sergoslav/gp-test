<?php

class GetFeeByKeyResponse
{

    /**
     * @var Fee $GetFeeByKeyResult
     */
    protected $GetFeeByKeyResult = null;

    /**
     * @param Fee $GetFeeByKeyResult
     */
    public function __construct($GetFeeByKeyResult)
    {
      $this->GetFeeByKeyResult = $GetFeeByKeyResult;
    }

    /**
     * @return Fee
     */
    public function getGetFeeByKeyResult()
    {
      return $this->GetFeeByKeyResult;
    }

    /**
     * @param Fee $GetFeeByKeyResult
     * @return GetFeeByKeyResponse
     */
    public function setGetFeeByKeyResult($GetFeeByKeyResult)
    {
      $this->GetFeeByKeyResult = $GetFeeByKeyResult;
      return $this;
    }

}
