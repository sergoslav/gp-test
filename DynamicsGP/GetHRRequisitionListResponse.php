<?php

class GetHRRequisitionListResponse
{

    /**
     * @var ArrayOfHRRequisitionSummary $GetHRRequisitionListResult
     */
    protected $GetHRRequisitionListResult = null;

    /**
     * @param ArrayOfHRRequisitionSummary $GetHRRequisitionListResult
     */
    public function __construct($GetHRRequisitionListResult)
    {
      $this->GetHRRequisitionListResult = $GetHRRequisitionListResult;
    }

    /**
     * @return ArrayOfHRRequisitionSummary
     */
    public function getGetHRRequisitionListResult()
    {
      return $this->GetHRRequisitionListResult;
    }

    /**
     * @param ArrayOfHRRequisitionSummary $GetHRRequisitionListResult
     * @return GetHRRequisitionListResponse
     */
    public function setGetHRRequisitionListResult($GetHRRequisitionListResult)
    {
      $this->GetHRRequisitionListResult = $GetHRRequisitionListResult;
      return $this;
    }

}
