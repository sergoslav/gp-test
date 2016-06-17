<?php

class GetBatchByKeyResponse
{

    /**
     * @var Batch $GetBatchByKeyResult
     */
    protected $GetBatchByKeyResult = null;

    /**
     * @param Batch $GetBatchByKeyResult
     */
    public function __construct($GetBatchByKeyResult)
    {
      $this->GetBatchByKeyResult = $GetBatchByKeyResult;
    }

    /**
     * @return Batch
     */
    public function getGetBatchByKeyResult()
    {
      return $this->GetBatchByKeyResult;
    }

    /**
     * @param Batch $GetBatchByKeyResult
     * @return GetBatchByKeyResponse
     */
    public function setGetBatchByKeyResult($GetBatchByKeyResult)
    {
      $this->GetBatchByKeyResult = $GetBatchByKeyResult;
      return $this;
    }

}
