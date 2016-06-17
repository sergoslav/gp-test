<?php

class GetItemListResponse
{

    /**
     * @var ArrayOfItemSummary $GetItemListResult
     */
    protected $GetItemListResult = null;

    /**
     * @param ArrayOfItemSummary $GetItemListResult
     */
    public function __construct($GetItemListResult)
    {
      $this->GetItemListResult = $GetItemListResult;
    }

    /**
     * @return ArrayOfItemSummary
     */
    public function getGetItemListResult()
    {
      return $this->GetItemListResult;
    }

    /**
     * @param ArrayOfItemSummary $GetItemListResult
     * @return GetItemListResponse
     */
    public function setGetItemListResult($GetItemListResult)
    {
      $this->GetItemListResult = $GetItemListResult;
      return $this;
    }

}
