<?php

class GetBatchListResponse
{

    /**
     * @var ArrayOfBatch $GetBatchListResult
     */
    protected $GetBatchListResult = null;

    /**
     * @param ArrayOfBatch $GetBatchListResult
     */
    public function __construct($GetBatchListResult)
    {
      $this->GetBatchListResult = $GetBatchListResult;
    }

    /**
     * @return ArrayOfBatch
     */
    public function getGetBatchListResult()
    {
      return $this->GetBatchListResult;
    }

    /**
     * @param ArrayOfBatch $GetBatchListResult
     * @return GetBatchListResponse
     */
    public function setGetBatchListResult($GetBatchListResult)
    {
      $this->GetBatchListResult = $GetBatchListResult;
      return $this;
    }

}
