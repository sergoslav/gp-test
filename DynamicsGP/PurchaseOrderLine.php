<?php

class PurchaseOrderLine extends BusinessObject
{

    /**
     * @var MoneyAmount $BackoutTaxAmount
     */
    protected $BackoutTaxAmount = null;

    /**
     * @var string $Comment
     */
    protected $Comment = null;

    /**
     * @var CommentKey $CommentKey
     */
    protected $CommentKey = null;

    /**
     * @var CostCategoryKey $CostCategoryKey
     */
    protected $CostCategoryKey = null;

    /**
     * @var \DateTime $DocumentDate
     */
    protected $DocumentDate = null;

    /**
     * @var MoneyAmount $ExtendedCost
     */
    protected $ExtendedCost = null;

    /**
     * @var FreeOnBoard $FreeOnBoard
     */
    protected $FreeOnBoard = null;

    /**
     * @var GLAccountNumberKey $InventoryGLAccountKey
     */
    protected $InventoryGLAccountKey = null;

    /**
     * @var boolean $IsCapitalItem
     */
    protected $IsCapitalItem = null;

    /**
     * @var boolean $IsNonInventory
     */
    protected $IsNonInventory = null;

    /**
     * @var string $ItemDescription
     */
    protected $ItemDescription = null;

    /**
     * @var ItemKey $ItemKey
     */
    protected $ItemKey = null;

    /**
     * @var ItemTaxScheduleKey $ItemTaxScheduleKey
     */
    protected $ItemTaxScheduleKey = null;

    /**
     * @var string $JobNumber
     */
    protected $JobNumber = null;

    /**
     * @var PurchaseTransactionLineKey $Key
     */
    protected $Key = null;

    /**
     * @var LandedCostGroupKey $LandedCostGroupKey
     */
    protected $LandedCostGroupKey = null;

    /**
     * @var PurchaseOrderLineOrigin $LineOrigin
     */
    protected $LineOrigin = null;

    /**
     * @var ProjectKey $ProjectKey
     */
    protected $ProjectKey = null;

    /**
     * @var \DateTime $PromisedDate
     */
    protected $PromisedDate = null;

    /**
     * @var \DateTime $PromisedShipDate
     */
    protected $PromisedShipDate = null;

    /**
     * @var Quantity $QuantityCanceled
     */
    protected $QuantityCanceled = null;

    /**
     * @var Quantity $QuantityOrdered
     */
    protected $QuantityOrdered = null;

    /**
     * @var \DateTime $ReleaseByDate
     */
    protected $ReleaseByDate = null;

    /**
     * @var \DateTime $ReleasedDate
     */
    protected $ReleasedDate = null;

    /**
     * @var string $RequestedBy
     */
    protected $RequestedBy = null;

    /**
     * @var \DateTime $RequestedDate
     */
    protected $RequestedDate = null;

    /**
     * @var BusinessAddress $ShipToAddress
     */
    protected $ShipToAddress = null;

    /**
     * @var AddressKey $ShipToAddressKey
     */
    protected $ShipToAddressKey = null;

    /**
     * @var ShippingMethodKey $ShippingMethodKey
     */
    protected $ShippingMethodKey = null;

    /**
     * @var string $SourceDocumentLineNumber
     */
    protected $SourceDocumentLineNumber = null;

    /**
     * @var string $SourceDocumentNumber
     */
    protected $SourceDocumentNumber = null;

    /**
     * @var PurchaseOrderStatus $Status
     */
    protected $Status = null;

    /**
     * @var MoneyAmount $TaxAmount
     */
    protected $TaxAmount = null;

    /**
     * @var PurchasingTaxBasis $TaxBasis
     */
    protected $TaxBasis = null;

    /**
     * @var ArrayOfPurchaseTax $Taxes
     */
    protected $Taxes = null;

    /**
     * @var MoneyAmount $UnitCost
     */
    protected $UnitCost = null;

    /**
     * @var string $UofM
     */
    protected $UofM = null;

    /**
     * @var string $VendorItemDescription
     */
    protected $VendorItemDescription = null;

    /**
     * @var string $VendorItemNumber
     */
    protected $VendorItemNumber = null;

    /**
     * @var WarehouseKey $WarehouseKey
     */
    protected $WarehouseKey = null;

    /**
     * @var TaxScheduleKey $WarehouseTaxScheduleKey
     */
    protected $WarehouseTaxScheduleKey = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return MoneyAmount
     */
    public function getBackoutTaxAmount()
    {
      return $this->BackoutTaxAmount;
    }

    /**
     * @param MoneyAmount $BackoutTaxAmount
     * @return PurchaseOrderLine
     */
    public function setBackoutTaxAmount($BackoutTaxAmount)
    {
      $this->BackoutTaxAmount = $BackoutTaxAmount;
      return $this;
    }

    /**
     * @return string
     */
    public function getComment()
    {
      return $this->Comment;
    }

    /**
     * @param string $Comment
     * @return PurchaseOrderLine
     */
    public function setComment($Comment)
    {
      $this->Comment = $Comment;
      return $this;
    }

    /**
     * @return CommentKey
     */
    public function getCommentKey()
    {
      return $this->CommentKey;
    }

    /**
     * @param CommentKey $CommentKey
     * @return PurchaseOrderLine
     */
    public function setCommentKey($CommentKey)
    {
      $this->CommentKey = $CommentKey;
      return $this;
    }

    /**
     * @return CostCategoryKey
     */
    public function getCostCategoryKey()
    {
      return $this->CostCategoryKey;
    }

    /**
     * @param CostCategoryKey $CostCategoryKey
     * @return PurchaseOrderLine
     */
    public function setCostCategoryKey($CostCategoryKey)
    {
      $this->CostCategoryKey = $CostCategoryKey;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDocumentDate()
    {
      if ($this->DocumentDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->DocumentDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $DocumentDate
     * @return PurchaseOrderLine
     */
    public function setDocumentDate(\DateTime $DocumentDate = null)
    {
      if ($DocumentDate == null) {
       $this->DocumentDate = null;
      } else {
        $this->DocumentDate = $DocumentDate->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return MoneyAmount
     */
    public function getExtendedCost()
    {
      return $this->ExtendedCost;
    }

    /**
     * @param MoneyAmount $ExtendedCost
     * @return PurchaseOrderLine
     */
    public function setExtendedCost($ExtendedCost)
    {
      $this->ExtendedCost = $ExtendedCost;
      return $this;
    }

    /**
     * @return FreeOnBoard
     */
    public function getFreeOnBoard()
    {
      return $this->FreeOnBoard;
    }

    /**
     * @param FreeOnBoard $FreeOnBoard
     * @return PurchaseOrderLine
     */
    public function setFreeOnBoard($FreeOnBoard)
    {
      $this->FreeOnBoard = $FreeOnBoard;
      return $this;
    }

    /**
     * @return GLAccountNumberKey
     */
    public function getInventoryGLAccountKey()
    {
      return $this->InventoryGLAccountKey;
    }

    /**
     * @param GLAccountNumberKey $InventoryGLAccountKey
     * @return PurchaseOrderLine
     */
    public function setInventoryGLAccountKey($InventoryGLAccountKey)
    {
      $this->InventoryGLAccountKey = $InventoryGLAccountKey;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsCapitalItem()
    {
      return $this->IsCapitalItem;
    }

    /**
     * @param boolean $IsCapitalItem
     * @return PurchaseOrderLine
     */
    public function setIsCapitalItem($IsCapitalItem)
    {
      $this->IsCapitalItem = $IsCapitalItem;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsNonInventory()
    {
      return $this->IsNonInventory;
    }

    /**
     * @param boolean $IsNonInventory
     * @return PurchaseOrderLine
     */
    public function setIsNonInventory($IsNonInventory)
    {
      $this->IsNonInventory = $IsNonInventory;
      return $this;
    }

    /**
     * @return string
     */
    public function getItemDescription()
    {
      return $this->ItemDescription;
    }

    /**
     * @param string $ItemDescription
     * @return PurchaseOrderLine
     */
    public function setItemDescription($ItemDescription)
    {
      $this->ItemDescription = $ItemDescription;
      return $this;
    }

    /**
     * @return ItemKey
     */
    public function getItemKey()
    {
      return $this->ItemKey;
    }

    /**
     * @param ItemKey $ItemKey
     * @return PurchaseOrderLine
     */
    public function setItemKey($ItemKey)
    {
      $this->ItemKey = $ItemKey;
      return $this;
    }

    /**
     * @return ItemTaxScheduleKey
     */
    public function getItemTaxScheduleKey()
    {
      return $this->ItemTaxScheduleKey;
    }

    /**
     * @param ItemTaxScheduleKey $ItemTaxScheduleKey
     * @return PurchaseOrderLine
     */
    public function setItemTaxScheduleKey($ItemTaxScheduleKey)
    {
      $this->ItemTaxScheduleKey = $ItemTaxScheduleKey;
      return $this;
    }

    /**
     * @return string
     */
    public function getJobNumber()
    {
      return $this->JobNumber;
    }

    /**
     * @param string $JobNumber
     * @return PurchaseOrderLine
     */
    public function setJobNumber($JobNumber)
    {
      $this->JobNumber = $JobNumber;
      return $this;
    }

    /**
     * @return PurchaseTransactionLineKey
     */
    public function getKey()
    {
      return $this->Key;
    }

    /**
     * @param PurchaseTransactionLineKey $Key
     * @return PurchaseOrderLine
     */
    public function setKey($Key)
    {
      $this->Key = $Key;
      return $this;
    }

    /**
     * @return LandedCostGroupKey
     */
    public function getLandedCostGroupKey()
    {
      return $this->LandedCostGroupKey;
    }

    /**
     * @param LandedCostGroupKey $LandedCostGroupKey
     * @return PurchaseOrderLine
     */
    public function setLandedCostGroupKey($LandedCostGroupKey)
    {
      $this->LandedCostGroupKey = $LandedCostGroupKey;
      return $this;
    }

    /**
     * @return PurchaseOrderLineOrigin
     */
    public function getLineOrigin()
    {
      return $this->LineOrigin;
    }

    /**
     * @param PurchaseOrderLineOrigin $LineOrigin
     * @return PurchaseOrderLine
     */
    public function setLineOrigin($LineOrigin)
    {
      $this->LineOrigin = $LineOrigin;
      return $this;
    }

    /**
     * @return ProjectKey
     */
    public function getProjectKey()
    {
      return $this->ProjectKey;
    }

    /**
     * @param ProjectKey $ProjectKey
     * @return PurchaseOrderLine
     */
    public function setProjectKey($ProjectKey)
    {
      $this->ProjectKey = $ProjectKey;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getPromisedDate()
    {
      if ($this->PromisedDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->PromisedDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $PromisedDate
     * @return PurchaseOrderLine
     */
    public function setPromisedDate(\DateTime $PromisedDate = null)
    {
      if ($PromisedDate == null) {
       $this->PromisedDate = null;
      } else {
        $this->PromisedDate = $PromisedDate->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getPromisedShipDate()
    {
      if ($this->PromisedShipDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->PromisedShipDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $PromisedShipDate
     * @return PurchaseOrderLine
     */
    public function setPromisedShipDate(\DateTime $PromisedShipDate = null)
    {
      if ($PromisedShipDate == null) {
       $this->PromisedShipDate = null;
      } else {
        $this->PromisedShipDate = $PromisedShipDate->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return Quantity
     */
    public function getQuantityCanceled()
    {
      return $this->QuantityCanceled;
    }

    /**
     * @param Quantity $QuantityCanceled
     * @return PurchaseOrderLine
     */
    public function setQuantityCanceled($QuantityCanceled)
    {
      $this->QuantityCanceled = $QuantityCanceled;
      return $this;
    }

    /**
     * @return Quantity
     */
    public function getQuantityOrdered()
    {
      return $this->QuantityOrdered;
    }

    /**
     * @param Quantity $QuantityOrdered
     * @return PurchaseOrderLine
     */
    public function setQuantityOrdered($QuantityOrdered)
    {
      $this->QuantityOrdered = $QuantityOrdered;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getReleaseByDate()
    {
      if ($this->ReleaseByDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->ReleaseByDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $ReleaseByDate
     * @return PurchaseOrderLine
     */
    public function setReleaseByDate(\DateTime $ReleaseByDate = null)
    {
      if ($ReleaseByDate == null) {
       $this->ReleaseByDate = null;
      } else {
        $this->ReleaseByDate = $ReleaseByDate->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getReleasedDate()
    {
      if ($this->ReleasedDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->ReleasedDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $ReleasedDate
     * @return PurchaseOrderLine
     */
    public function setReleasedDate(\DateTime $ReleasedDate = null)
    {
      if ($ReleasedDate == null) {
       $this->ReleasedDate = null;
      } else {
        $this->ReleasedDate = $ReleasedDate->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return string
     */
    public function getRequestedBy()
    {
      return $this->RequestedBy;
    }

    /**
     * @param string $RequestedBy
     * @return PurchaseOrderLine
     */
    public function setRequestedBy($RequestedBy)
    {
      $this->RequestedBy = $RequestedBy;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getRequestedDate()
    {
      if ($this->RequestedDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->RequestedDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $RequestedDate
     * @return PurchaseOrderLine
     */
    public function setRequestedDate(\DateTime $RequestedDate = null)
    {
      if ($RequestedDate == null) {
       $this->RequestedDate = null;
      } else {
        $this->RequestedDate = $RequestedDate->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return BusinessAddress
     */
    public function getShipToAddress()
    {
      return $this->ShipToAddress;
    }

    /**
     * @param BusinessAddress $ShipToAddress
     * @return PurchaseOrderLine
     */
    public function setShipToAddress($ShipToAddress)
    {
      $this->ShipToAddress = $ShipToAddress;
      return $this;
    }

    /**
     * @return AddressKey
     */
    public function getShipToAddressKey()
    {
      return $this->ShipToAddressKey;
    }

    /**
     * @param AddressKey $ShipToAddressKey
     * @return PurchaseOrderLine
     */
    public function setShipToAddressKey($ShipToAddressKey)
    {
      $this->ShipToAddressKey = $ShipToAddressKey;
      return $this;
    }

    /**
     * @return ShippingMethodKey
     */
    public function getShippingMethodKey()
    {
      return $this->ShippingMethodKey;
    }

    /**
     * @param ShippingMethodKey $ShippingMethodKey
     * @return PurchaseOrderLine
     */
    public function setShippingMethodKey($ShippingMethodKey)
    {
      $this->ShippingMethodKey = $ShippingMethodKey;
      return $this;
    }

    /**
     * @return string
     */
    public function getSourceDocumentLineNumber()
    {
      return $this->SourceDocumentLineNumber;
    }

    /**
     * @param string $SourceDocumentLineNumber
     * @return PurchaseOrderLine
     */
    public function setSourceDocumentLineNumber($SourceDocumentLineNumber)
    {
      $this->SourceDocumentLineNumber = $SourceDocumentLineNumber;
      return $this;
    }

    /**
     * @return string
     */
    public function getSourceDocumentNumber()
    {
      return $this->SourceDocumentNumber;
    }

    /**
     * @param string $SourceDocumentNumber
     * @return PurchaseOrderLine
     */
    public function setSourceDocumentNumber($SourceDocumentNumber)
    {
      $this->SourceDocumentNumber = $SourceDocumentNumber;
      return $this;
    }

    /**
     * @return PurchaseOrderStatus
     */
    public function getStatus()
    {
      return $this->Status;
    }

    /**
     * @param PurchaseOrderStatus $Status
     * @return PurchaseOrderLine
     */
    public function setStatus($Status)
    {
      $this->Status = $Status;
      return $this;
    }

    /**
     * @return MoneyAmount
     */
    public function getTaxAmount()
    {
      return $this->TaxAmount;
    }

    /**
     * @param MoneyAmount $TaxAmount
     * @return PurchaseOrderLine
     */
    public function setTaxAmount($TaxAmount)
    {
      $this->TaxAmount = $TaxAmount;
      return $this;
    }

    /**
     * @return PurchasingTaxBasis
     */
    public function getTaxBasis()
    {
      return $this->TaxBasis;
    }

    /**
     * @param PurchasingTaxBasis $TaxBasis
     * @return PurchaseOrderLine
     */
    public function setTaxBasis($TaxBasis)
    {
      $this->TaxBasis = $TaxBasis;
      return $this;
    }

    /**
     * @return ArrayOfPurchaseTax
     */
    public function getTaxes()
    {
      return $this->Taxes;
    }

    /**
     * @param ArrayOfPurchaseTax $Taxes
     * @return PurchaseOrderLine
     */
    public function setTaxes($Taxes)
    {
      $this->Taxes = $Taxes;
      return $this;
    }

    /**
     * @return MoneyAmount
     */
    public function getUnitCost()
    {
      return $this->UnitCost;
    }

    /**
     * @param MoneyAmount $UnitCost
     * @return PurchaseOrderLine
     */
    public function setUnitCost($UnitCost)
    {
      $this->UnitCost = $UnitCost;
      return $this;
    }

    /**
     * @return string
     */
    public function getUofM()
    {
      return $this->UofM;
    }

    /**
     * @param string $UofM
     * @return PurchaseOrderLine
     */
    public function setUofM($UofM)
    {
      $this->UofM = $UofM;
      return $this;
    }

    /**
     * @return string
     */
    public function getVendorItemDescription()
    {
      return $this->VendorItemDescription;
    }

    /**
     * @param string $VendorItemDescription
     * @return PurchaseOrderLine
     */
    public function setVendorItemDescription($VendorItemDescription)
    {
      $this->VendorItemDescription = $VendorItemDescription;
      return $this;
    }

    /**
     * @return string
     */
    public function getVendorItemNumber()
    {
      return $this->VendorItemNumber;
    }

    /**
     * @param string $VendorItemNumber
     * @return PurchaseOrderLine
     */
    public function setVendorItemNumber($VendorItemNumber)
    {
      $this->VendorItemNumber = $VendorItemNumber;
      return $this;
    }

    /**
     * @return WarehouseKey
     */
    public function getWarehouseKey()
    {
      return $this->WarehouseKey;
    }

    /**
     * @param WarehouseKey $WarehouseKey
     * @return PurchaseOrderLine
     */
    public function setWarehouseKey($WarehouseKey)
    {
      $this->WarehouseKey = $WarehouseKey;
      return $this;
    }

    /**
     * @return TaxScheduleKey
     */
    public function getWarehouseTaxScheduleKey()
    {
      return $this->WarehouseTaxScheduleKey;
    }

    /**
     * @param TaxScheduleKey $WarehouseTaxScheduleKey
     * @return PurchaseOrderLine
     */
    public function setWarehouseTaxScheduleKey($WarehouseTaxScheduleKey)
    {
      $this->WarehouseTaxScheduleKey = $WarehouseTaxScheduleKey;
      return $this;
    }

}
