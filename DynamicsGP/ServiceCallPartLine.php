<?php

class ServiceCallPartLine extends ServicePartLine
{

    /**
     * @var boolean $ConsolidateOnPO
     */
    protected $ConsolidateOnPO = null;

    /**
     * @var boolean $IsOnReturnDocument
     */
    protected $IsOnReturnDocument = null;

    /**
     * @var boolean $IsOnTransfer
     */
    protected $IsOnTransfer = null;

    /**
     * @var ArrayOfServiceLot $LotDetails
     */
    protected $LotDetails = null;

    /**
     * @var PurchaseTransactionLineKey $PurchaseOrderLineKey
     */
    protected $PurchaseOrderLineKey = null;

    /**
     * @var Quantity $QuantityAllocated
     */
    protected $QuantityAllocated = null;

    /**
     * @var Quantity $QuantitySold
     */
    protected $QuantitySold = null;

    /**
     * @var ServiceLineKey $ReturnMaterialAuthorizationLineKey
     */
    protected $ReturnMaterialAuthorizationLineKey = null;

    /**
     * @var ArrayOfServiceSerial $SerialDetails
     */
    protected $SerialDetails = null;

    /**
     * @var MoneyAmount $TotalCost
     */
    protected $TotalCost = null;

    /**
     * @var WarehouseKey $TransferFromWarehouseKey
     */
    protected $TransferFromWarehouseKey = null;

    /**
     * @var ServiceLineKey $TransferLineKey
     */
    protected $TransferLineKey = null;

    /**
     * @var Quantity $TransferQuantity
     */
    protected $TransferQuantity = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return boolean
     */
    public function getConsolidateOnPO()
    {
      return $this->ConsolidateOnPO;
    }

    /**
     * @param boolean $ConsolidateOnPO
     * @return ServiceCallPartLine
     */
    public function setConsolidateOnPO($ConsolidateOnPO)
    {
      $this->ConsolidateOnPO = $ConsolidateOnPO;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsOnReturnDocument()
    {
      return $this->IsOnReturnDocument;
    }

    /**
     * @param boolean $IsOnReturnDocument
     * @return ServiceCallPartLine
     */
    public function setIsOnReturnDocument($IsOnReturnDocument)
    {
      $this->IsOnReturnDocument = $IsOnReturnDocument;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsOnTransfer()
    {
      return $this->IsOnTransfer;
    }

    /**
     * @param boolean $IsOnTransfer
     * @return ServiceCallPartLine
     */
    public function setIsOnTransfer($IsOnTransfer)
    {
      $this->IsOnTransfer = $IsOnTransfer;
      return $this;
    }

    /**
     * @return ArrayOfServiceLot
     */
    public function getLotDetails()
    {
      return $this->LotDetails;
    }

    /**
     * @param ArrayOfServiceLot $LotDetails
     * @return ServiceCallPartLine
     */
    public function setLotDetails($LotDetails)
    {
      $this->LotDetails = $LotDetails;
      return $this;
    }

    /**
     * @return PurchaseTransactionLineKey
     */
    public function getPurchaseOrderLineKey()
    {
      return $this->PurchaseOrderLineKey;
    }

    /**
     * @param PurchaseTransactionLineKey $PurchaseOrderLineKey
     * @return ServiceCallPartLine
     */
    public function setPurchaseOrderLineKey($PurchaseOrderLineKey)
    {
      $this->PurchaseOrderLineKey = $PurchaseOrderLineKey;
      return $this;
    }

    /**
     * @return Quantity
     */
    public function getQuantityAllocated()
    {
      return $this->QuantityAllocated;
    }

    /**
     * @param Quantity $QuantityAllocated
     * @return ServiceCallPartLine
     */
    public function setQuantityAllocated($QuantityAllocated)
    {
      $this->QuantityAllocated = $QuantityAllocated;
      return $this;
    }

    /**
     * @return Quantity
     */
    public function getQuantitySold()
    {
      return $this->QuantitySold;
    }

    /**
     * @param Quantity $QuantitySold
     * @return ServiceCallPartLine
     */
    public function setQuantitySold($QuantitySold)
    {
      $this->QuantitySold = $QuantitySold;
      return $this;
    }

    /**
     * @return ServiceLineKey
     */
    public function getReturnMaterialAuthorizationLineKey()
    {
      return $this->ReturnMaterialAuthorizationLineKey;
    }

    /**
     * @param ServiceLineKey $ReturnMaterialAuthorizationLineKey
     * @return ServiceCallPartLine
     */
    public function setReturnMaterialAuthorizationLineKey($ReturnMaterialAuthorizationLineKey)
    {
      $this->ReturnMaterialAuthorizationLineKey = $ReturnMaterialAuthorizationLineKey;
      return $this;
    }

    /**
     * @return ArrayOfServiceSerial
     */
    public function getSerialDetails()
    {
      return $this->SerialDetails;
    }

    /**
     * @param ArrayOfServiceSerial $SerialDetails
     * @return ServiceCallPartLine
     */
    public function setSerialDetails($SerialDetails)
    {
      $this->SerialDetails = $SerialDetails;
      return $this;
    }

    /**
     * @return MoneyAmount
     */
    public function getTotalCost()
    {
      return $this->TotalCost;
    }

    /**
     * @param MoneyAmount $TotalCost
     * @return ServiceCallPartLine
     */
    public function setTotalCost($TotalCost)
    {
      $this->TotalCost = $TotalCost;
      return $this;
    }

    /**
     * @return WarehouseKey
     */
    public function getTransferFromWarehouseKey()
    {
      return $this->TransferFromWarehouseKey;
    }

    /**
     * @param WarehouseKey $TransferFromWarehouseKey
     * @return ServiceCallPartLine
     */
    public function setTransferFromWarehouseKey($TransferFromWarehouseKey)
    {
      $this->TransferFromWarehouseKey = $TransferFromWarehouseKey;
      return $this;
    }

    /**
     * @return ServiceLineKey
     */
    public function getTransferLineKey()
    {
      return $this->TransferLineKey;
    }

    /**
     * @param ServiceLineKey $TransferLineKey
     * @return ServiceCallPartLine
     */
    public function setTransferLineKey($TransferLineKey)
    {
      $this->TransferLineKey = $TransferLineKey;
      return $this;
    }

    /**
     * @return Quantity
     */
    public function getTransferQuantity()
    {
      return $this->TransferQuantity;
    }

    /**
     * @param Quantity $TransferQuantity
     * @return ServiceCallPartLine
     */
    public function setTransferQuantity($TransferQuantity)
    {
      $this->TransferQuantity = $TransferQuantity;
      return $this;
    }

}
