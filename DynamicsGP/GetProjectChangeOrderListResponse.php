<?php

class GetProjectChangeOrderListResponse
{

    /**
     * @var ArrayOfProjectChangeOrderSummary $GetProjectChangeOrderListResult
     */
    protected $GetProjectChangeOrderListResult = null;

    /**
     * @param ArrayOfProjectChangeOrderSummary $GetProjectChangeOrderListResult
     */
    public function __construct($GetProjectChangeOrderListResult)
    {
      $this->GetProjectChangeOrderListResult = $GetProjectChangeOrderListResult;
    }

    /**
     * @return ArrayOfProjectChangeOrderSummary
     */
    public function getGetProjectChangeOrderListResult()
    {
      return $this->GetProjectChangeOrderListResult;
    }

    /**
     * @param ArrayOfProjectChangeOrderSummary $GetProjectChangeOrderListResult
     * @return GetProjectChangeOrderListResponse
     */
    public function setGetProjectChangeOrderListResult($GetProjectChangeOrderListResult)
    {
      $this->GetProjectChangeOrderListResult = $GetProjectChangeOrderListResult;
      return $this;
    }

}
