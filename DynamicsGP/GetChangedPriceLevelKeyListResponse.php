<?php

class GetChangedPriceLevelKeyListResponse
{

    /**
     * @var ArrayOfChangedPriceLevelKey $GetChangedPriceLevelKeyListResult
     */
    protected $GetChangedPriceLevelKeyListResult = null;

    /**
     * @param ArrayOfChangedPriceLevelKey $GetChangedPriceLevelKeyListResult
     */
    public function __construct($GetChangedPriceLevelKeyListResult)
    {
      $this->GetChangedPriceLevelKeyListResult = $GetChangedPriceLevelKeyListResult;
    }

    /**
     * @return ArrayOfChangedPriceLevelKey
     */
    public function getGetChangedPriceLevelKeyListResult()
    {
      return $this->GetChangedPriceLevelKeyListResult;
    }

    /**
     * @param ArrayOfChangedPriceLevelKey $GetChangedPriceLevelKeyListResult
     * @return GetChangedPriceLevelKeyListResponse
     */
    public function setGetChangedPriceLevelKeyListResult($GetChangedPriceLevelKeyListResult)
    {
      $this->GetChangedPriceLevelKeyListResult = $GetChangedPriceLevelKeyListResult;
      return $this;
    }

}
