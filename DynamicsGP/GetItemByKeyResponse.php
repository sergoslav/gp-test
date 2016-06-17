<?php

class GetItemByKeyResponse
{

    /**
     * @var Item $GetItemByKeyResult
     */
    protected $GetItemByKeyResult = null;

    /**
     * @param Item $GetItemByKeyResult
     */
    public function __construct($GetItemByKeyResult)
    {
      $this->GetItemByKeyResult = $GetItemByKeyResult;
    }

    /**
     * @return Item
     */
    public function getGetItemByKeyResult()
    {
      return $this->GetItemByKeyResult;
    }

    /**
     * @param Item $GetItemByKeyResult
     * @return GetItemByKeyResponse
     */
    public function setGetItemByKeyResult($GetItemByKeyResult)
    {
      $this->GetItemByKeyResult = $GetItemByKeyResult;
      return $this;
    }

}
