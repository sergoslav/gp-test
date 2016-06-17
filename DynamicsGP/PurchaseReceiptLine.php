<?php

class PurchaseReceiptLine extends BusinessObject
{

    /**
     * @var \DateTime $ActualShipDate
     */
    protected $ActualShipDate = null;

    /**
     * @var string $BillOfLadingNumber
     */
    protected $BillOfLadingNumber = null;

    /**
     * @var ArrayOfPurchaseBinDetail $Bins
     */
    protected $Bins = null;

    /**
     * @var CostCategoryKey $CostCategoryKey
     */
    protected $CostCategoryKey = null;

    /**
     * @var MoneyAmount $ExtendedCost
     */
    protected $ExtendedCost = null;

    /**
     * @var GLAccountNumberKey $InventoryGLAccountKey
     */
    protected $InventoryGLAccountKey = null;

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
     * @var PurchaseTransactionLineKey $Key
     */
    protected $Key = null;

    /**
     * @var LandedCostGroupKey $LandedCostGroupKey
     */
    protected $LandedCostGroupKey = null;

    /**
     * @var ArrayOfPurchaseLotDetail $Lots
     */
    protected $Lots = null;

    /**
     * @var ProjectKey $ProjectKey
     */
    protected $ProjectKey = null;

    /**
     * @var PurchaseTransactionKey $PurchaseOrderKey
     */
    protected $PurchaseOrderKey = null;

    /**
     * @var PurchaseTransactionLineKey $PurchaseOrderLineKey
     */
    protected $PurchaseOrderLineKey = null;

    /**
     * @var Quantity $QuantityRejected
     */
    protected $QuantityRejected = null;

    /**
     * @var Quantity $QuantityShipped
     */
    protected $QuantityShipped = null;

    /**
     * @var ArrayOfPurchaseSerialDetail $Serials
     */
    protected $Serials = null;

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

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return \DateTime
     */
    public function getActualShipDate()
    {
      if ($this->ActualShipDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->ActualShipDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $ActualShipDate
     * @return PurchaseReceiptLine
     */
    public function setActualShipDate(\DateTime $ActualShipDate = null)
    {
      if ($ActualShipDate == null) {
       $this->ActualShipDate = null;
      } else {
        $this->ActualShipDate = $ActualShipDate->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return string
     */
    public function getBillOfLadingNumber()
    {
      return $this->BillOfLadingNumber;
    }

    /**
     * @param string $BillOfLadingNumber
     * @return PurchaseReceiptLine
     */
    public function setBillOfLadingNumber($BillOfLadingNumber)
    {
      $this->BillOfLadingNumber = $BillOfLadingNumber;
      return $this;
    }

    /**
     * @return ArrayOfPurchaseBinDetail
     */
    public function getBins()
    {
      return $this->Bins;
    }

    /**
     * @param ArrayOfPurchaseBinDetail $Bins
     * @return PurchaseReceiptLine
     */
    public function setBins($Bins)
    {
      $this->Bins = $Bins;
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
     * @return PurchaseReceiptLine
     */
    public function setCostCategoryKey($CostCategoryKey)
    {
      $this->CostCategoryKey = $CostCategoryKey;
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
     * @return PurchaseReceiptLine
     */
    public function setExtendedCost($ExtendedCost)
    {
      $this->ExtendedCost = $ExtendedCost;
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
     * @return PurchaseReceiptLine
     */
    public function setInventoryGLAccountKey($InventoryGLAccountKey)
    {
      $this->InventoryGLAccountKey = $InventoryGLAccountKey;
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
     * @return PurchaseReceiptLine
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
     * @return PurchaseReceiptLine
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
     * @return PurchaseReceiptLine
     */
    public function setItemKey($ItemKey)
    {
      $this->ItemKey = $ItemKey;
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
     * @return PurchaseReceiptLine
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
     * @return PurchaseReceiptLine
     */
    public function setLandedCostGroupKey($LandedCostGroupKey)
    {
      $this->LandedCostGroupKey = $LandedCostGroupKey;
      return $this;
    }

    /**
     * @return ArrayOfPurchaseLotDetail
     */
    public function getLots()
    {
      return $this->Lots;
    }

    /**
     * @param ArrayOfPurchaseLotDetail $Lots
     * @return PurchaseReceiptLine
     */
    public function setLots($Lots)
    {
      $this->Lots = $Lots;
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
     * @return PurchaseReceiptLine
     */
    public function setProjectKey($ProjectKey)
    {
      $this->ProjectKey = $ProjectKey;
      return $this;
    }

    /**
     * @return PurchaseTransactionKey
     */
    public function getPurchaseOrderKey()
    {
      return $this->PurchaseOrderKey;
    }

    /**
     * @param PurchaseTransactionKey $PurchaseOrderKey
     * @return PurchaseReceiptLine
     */
    public function setPurchaseOrderKey($PurchaseOrderKey)
    {
      $this->PurchaseOrderKey = $PurchaseOrderKey;
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
     * @return PurchaseReceiptLine
     */
    public function setPurchaseOrderLineKey($PurchaseOrderLineKey)
    {
      $this->PurchaseOrderLineKey = $PurchaseOrderLineKey;
      return $this;
    }

    /**
     * @return Quantity
     */
    public function getQuantityRejected()
    {
      return $this->QuantityRejected;
    }

    /**
     * @param Quantity $QuantityRejected
     * @return PurchaseReceiptLine
     */
    public function setQuantityRejected($QuantityRejected)
    {
      $this->QuantityRejected = $QuantityRejected;
      return $this;
    }

    /**
     * @return Quantity
     */
    public function getQuantityShipped()
    {
      return $this->QuantityShipped;
    }

    /**
     * @param Quantity $QuantityShipped
     * @return PurchaseReceiptLine
     */
    public function setQuantityShipped($QuantityShipped)
    {
      $this->QuantityShipped = $QuantityShipped;
      return $this;
    }

    /**
     * @return ArrayOfPurchaseSerialDetail
     */
    public function getSerials()
    {
      return $this->Serials;
    }

    /**
     * @param ArrayOfPurchaseSerialDetail $Serials
     * @return PurchaseReceiptLine
     */
    public function setSerials($Serials)
    {
      $this->Serials = $Serials;
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
     * @return PurchaseReceiptLine
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
     * @return PurchaseReceiptLine
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
     * @return PurchaseReceiptLine
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
     * @return PurchaseReceiptLine
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
     * @return PurchaseReceiptLine
     */
    public function setWarehouseKey($WarehouseKey)
    {
      $this->WarehouseKey = $WarehouseKey;
      return $this;
    }

}
