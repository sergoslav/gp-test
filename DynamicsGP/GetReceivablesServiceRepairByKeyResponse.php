<?php

class GetReceivablesServiceRepairByKeyResponse
{

    /**
     * @var ReceivablesServiceRepair $GetReceivablesServiceRepairByKeyResult
     */
    protected $GetReceivablesServiceRepairByKeyResult = null;

    /**
     * @param ReceivablesServiceRepair $GetReceivablesServiceRepairByKeyResult
     */
    public function __construct($GetReceivablesServiceRepairByKeyResult)
    {
      $this->GetReceivablesServiceRepairByKeyResult = $GetReceivablesServiceRepairByKeyResult;
    }

    /**
     * @return ReceivablesServiceRepair
     */
    public function getGetReceivablesServiceRepairByKeyResult()
    {
      return $this->GetReceivablesServiceRepairByKeyResult;
    }

    /**
     * @param ReceivablesServiceRepair $GetReceivablesServiceRepairByKeyResult
     * @return GetReceivablesServiceRepairByKeyResponse
     */
    public function setGetReceivablesServiceRepairByKeyResult($GetReceivablesServiceRepairByKeyResult)
    {
      $this->GetReceivablesServiceRepairByKeyResult = $GetReceivablesServiceRepairByKeyResult;
      return $this;
    }

}
