<?php

class GetChangedTaxScheduleDetailKeyListResponse
{

    /**
     * @var ArrayOfChangedTaxScheduleDetailKey $GetChangedTaxScheduleDetailKeyListResult
     */
    protected $GetChangedTaxScheduleDetailKeyListResult = null;

    /**
     * @param ArrayOfChangedTaxScheduleDetailKey $GetChangedTaxScheduleDetailKeyListResult
     */
    public function __construct($GetChangedTaxScheduleDetailKeyListResult)
    {
      $this->GetChangedTaxScheduleDetailKeyListResult = $GetChangedTaxScheduleDetailKeyListResult;
    }

    /**
     * @return ArrayOfChangedTaxScheduleDetailKey
     */
    public function getGetChangedTaxScheduleDetailKeyListResult()
    {
      return $this->GetChangedTaxScheduleDetailKeyListResult;
    }

    /**
     * @param ArrayOfChangedTaxScheduleDetailKey $GetChangedTaxScheduleDetailKeyListResult
     * @return GetChangedTaxScheduleDetailKeyListResponse
     */
    public function setGetChangedTaxScheduleDetailKeyListResult($GetChangedTaxScheduleDetailKeyListResult)
    {
      $this->GetChangedTaxScheduleDetailKeyListResult = $GetChangedTaxScheduleDetailKeyListResult;
      return $this;
    }

}
