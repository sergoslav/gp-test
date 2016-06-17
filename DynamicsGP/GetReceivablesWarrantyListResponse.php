<?php

class GetReceivablesWarrantyListResponse
{

    /**
     * @var ArrayOfReceivablesWarrantySummary $GetReceivablesWarrantyListResult
     */
    protected $GetReceivablesWarrantyListResult = null;

    /**
     * @param ArrayOfReceivablesWarrantySummary $GetReceivablesWarrantyListResult
     */
    public function __construct($GetReceivablesWarrantyListResult)
    {
      $this->GetReceivablesWarrantyListResult = $GetReceivablesWarrantyListResult;
    }

    /**
     * @return ArrayOfReceivablesWarrantySummary
     */
    public function getGetReceivablesWarrantyListResult()
    {
      return $this->GetReceivablesWarrantyListResult;
    }

    /**
     * @param ArrayOfReceivablesWarrantySummary $GetReceivablesWarrantyListResult
     * @return GetReceivablesWarrantyListResponse
     */
    public function setGetReceivablesWarrantyListResult($GetReceivablesWarrantyListResult)
    {
      $this->GetReceivablesWarrantyListResult = $GetReceivablesWarrantyListResult;
      return $this;
    }

}
