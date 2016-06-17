<?php

class GetItemClassListResponse
{

    /**
     * @var ArrayOfItemClass $GetItemClassListResult
     */
    protected $GetItemClassListResult = null;

    /**
     * @param ArrayOfItemClass $GetItemClassListResult
     */
    public function __construct($GetItemClassListResult)
    {
      $this->GetItemClassListResult = $GetItemClassListResult;
    }

    /**
     * @return ArrayOfItemClass
     */
    public function getGetItemClassListResult()
    {
      return $this->GetItemClassListResult;
    }

    /**
     * @param ArrayOfItemClass $GetItemClassListResult
     * @return GetItemClassListResponse
     */
    public function setGetItemClassListResult($GetItemClassListResult)
    {
      $this->GetItemClassListResult = $GetItemClassListResult;
      return $this;
    }

}
