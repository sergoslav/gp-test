<?php

class GetReceivablesServiceRepairListResponse
{

    /**
     * @var ArrayOfReceivablesServiceRepairSummary $GetReceivablesServiceRepairListResult
     */
    protected $GetReceivablesServiceRepairListResult = null;

    /**
     * @param ArrayOfReceivablesServiceRepairSummary $GetReceivablesServiceRepairListResult
     */
    public function __construct($GetReceivablesServiceRepairListResult)
    {
      $this->GetReceivablesServiceRepairListResult = $GetReceivablesServiceRepairListResult;
    }

    /**
     * @return ArrayOfReceivablesServiceRepairSummary
     */
    public function getGetReceivablesServiceRepairListResult()
    {
      return $this->GetReceivablesServiceRepairListResult;
    }

    /**
     * @param ArrayOfReceivablesServiceRepairSummary $GetReceivablesServiceRepairListResult
     * @return GetReceivablesServiceRepairListResponse
     */
    public function setGetReceivablesServiceRepairListResult($GetReceivablesServiceRepairListResult)
    {
      $this->GetReceivablesServiceRepairListResult = $GetReceivablesServiceRepairListResult;
      return $this;
    }

}
