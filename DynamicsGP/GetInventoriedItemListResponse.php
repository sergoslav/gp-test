<?php

class GetInventoriedItemListResponse
{

    /**
     * @var ArrayOfInventoriedItemSummary $GetInventoriedItemListResult
     */
    protected $GetInventoriedItemListResult = null;

    /**
     * @param ArrayOfInventoriedItemSummary $GetInventoriedItemListResult
     */
    public function __construct($GetInventoriedItemListResult)
    {
      $this->GetInventoriedItemListResult = $GetInventoriedItemListResult;
    }

    /**
     * @return ArrayOfInventoriedItemSummary
     */
    public function getGetInventoriedItemListResult()
    {
      return $this->GetInventoriedItemListResult;
    }

    /**
     * @param ArrayOfInventoriedItemSummary $GetInventoriedItemListResult
     * @return GetInventoriedItemListResponse
     */
    public function setGetInventoriedItemListResult($GetInventoriedItemListResult)
    {
      $this->GetInventoriedItemListResult = $GetInventoriedItemListResult;
      return $this;
    }

}
