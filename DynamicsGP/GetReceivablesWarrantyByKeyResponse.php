<?php

class GetReceivablesWarrantyByKeyResponse
{

    /**
     * @var ReceivablesWarranty $GetReceivablesWarrantyByKeyResult
     */
    protected $GetReceivablesWarrantyByKeyResult = null;

    /**
     * @param ReceivablesWarranty $GetReceivablesWarrantyByKeyResult
     */
    public function __construct($GetReceivablesWarrantyByKeyResult)
    {
      $this->GetReceivablesWarrantyByKeyResult = $GetReceivablesWarrantyByKeyResult;
    }

    /**
     * @return ReceivablesWarranty
     */
    public function getGetReceivablesWarrantyByKeyResult()
    {
      return $this->GetReceivablesWarrantyByKeyResult;
    }

    /**
     * @param ReceivablesWarranty $GetReceivablesWarrantyByKeyResult
     * @return GetReceivablesWarrantyByKeyResponse
     */
    public function setGetReceivablesWarrantyByKeyResult($GetReceivablesWarrantyByKeyResult)
    {
      $this->GetReceivablesWarrantyByKeyResult = $GetReceivablesWarrantyByKeyResult;
      return $this;
    }

}
