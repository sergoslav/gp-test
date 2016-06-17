<?php

class GetHRRequisitionByKeyResponse
{

    /**
     * @var HRRequisition $GetHRRequisitionByKeyResult
     */
    protected $GetHRRequisitionByKeyResult = null;

    /**
     * @param HRRequisition $GetHRRequisitionByKeyResult
     */
    public function __construct($GetHRRequisitionByKeyResult)
    {
      $this->GetHRRequisitionByKeyResult = $GetHRRequisitionByKeyResult;
    }

    /**
     * @return HRRequisition
     */
    public function getGetHRRequisitionByKeyResult()
    {
      return $this->GetHRRequisitionByKeyResult;
    }

    /**
     * @param HRRequisition $GetHRRequisitionByKeyResult
     * @return GetHRRequisitionByKeyResponse
     */
    public function setGetHRRequisitionByKeyResult($GetHRRequisitionByKeyResult)
    {
      $this->GetHRRequisitionByKeyResult = $GetHRRequisitionByKeyResult;
      return $this;
    }

}
