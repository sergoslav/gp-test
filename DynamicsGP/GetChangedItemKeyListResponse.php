<?php

class GetChangedItemKeyListResponse
{

    /**
     * @var ArrayOfChangedItemKey $GetChangedItemKeyListResult
     */
    protected $GetChangedItemKeyListResult = null;

    /**
     * @param ArrayOfChangedItemKey $GetChangedItemKeyListResult
     */
    public function __construct($GetChangedItemKeyListResult)
    {
      $this->GetChangedItemKeyListResult = $GetChangedItemKeyListResult;
    }

    /**
     * @return ArrayOfChangedItemKey
     */
    public function getGetChangedItemKeyListResult()
    {
      return $this->GetChangedItemKeyListResult;
    }

    /**
     * @param ArrayOfChangedItemKey $GetChangedItemKeyListResult
     * @return GetChangedItemKeyListResponse
     */
    public function setGetChangedItemKeyListResult($GetChangedItemKeyListResult)
    {
      $this->GetChangedItemKeyListResult = $GetChangedItemKeyListResult;
      return $this;
    }

}
