<?php

class GetSalespersonListResponse
{

    /**
     * @var ArrayOfSalespersonSummary $GetSalespersonListResult
     */
    protected $GetSalespersonListResult = null;

    /**
     * @param ArrayOfSalespersonSummary $GetSalespersonListResult
     */
    public function __construct($GetSalespersonListResult)
    {
      $this->GetSalespersonListResult = $GetSalespersonListResult;
    }

    /**
     * @return ArrayOfSalespersonSummary
     */
    public function getGetSalespersonListResult()
    {
      return $this->GetSalespersonListResult;
    }

    /**
     * @param ArrayOfSalespersonSummary $GetSalespersonListResult
     * @return GetSalespersonListResponse
     */
    public function setGetSalespersonListResult($GetSalespersonListResult)
    {
      $this->GetSalespersonListResult = $GetSalespersonListResult;
      return $this;
    }

}
