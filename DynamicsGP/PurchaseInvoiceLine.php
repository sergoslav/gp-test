<?php

class PurchaseInvoiceLine extends BusinessObject
{

    /**
     * @var MoneyAmount $BackoutTaxAmount
     */
    protected $BackoutTaxAmount = null;

    /**
     * @var CostCategoryKey $CostCategoryKey
     */
    protected $CostCategoryKey = null;

    /**
     * @var MoneyAmount $ExtendedCost
     */
    protected $ExtendedCost = null;

    /**
     * @var boolean $IsLandedCost
     */
    protected $IsLandedCost = null;

    /**
     * @var boolean $IsNonInventory
     */
    protected $IsNonInventory = null;

    /**
     * @var ItemKey $ItemKey
     */
    protected $ItemKey = null;

    /**
     * @var ItemTaxScheduleKey $ItemTaxScheduleKey
     */
    protected $ItemTaxScheduleKey = null;

    /**
     * @var PurchaseTransactionLineKey $Key
     */
    protected $Key = null;

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
     * @var Quantity $QuantityInvoiced
     */
    protected $QuantityInvoiced = null;

    /**
     * @var ArrayOfPurchaseInvoiceApplyReceipt $Receipts
     */
    protected $Receipts = null;

    /**
     * @var MoneyAmount $TaxAmount
     */
    protected $TaxAmount = null;

    /**
     * @var PurchasingTaxBasis $TaxBasis
     */
    protected $TaxBasis = null;

    /**
     * @var ArrayOfPurchaseInvoiceTax $Taxes
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
     * @var GLAccountNumberKey $VarianceGLAccountKey
     */
    protected $VarianceGLAccountKey = null;

    /**
     * @var string $VendorItemDescription
     */
    protected $VendorItemDescription = null;

    /**
     * @var string $VendorItemNumber
     */
    protected $VendorItemNumber = null;

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
     * @return PurchaseInvoiceLine
     */
    public function setBackoutTaxAmount($BackoutTaxAmount)
    {
      $this->BackoutTaxAmount = $BackoutTaxAmount;
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
     * @return PurchaseInvoiceLine
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
     * @return PurchaseInvoiceLine
     */
    public function setExtendedCost($ExtendedCost)
    {
      $this->ExtendedCost = $ExtendedCost;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsLandedCost()
    {
      return $this->IsLandedCost;
    }

    /**
     * @param boolean $IsLandedCost
     * @return PurchaseInvoiceLine
     */
    public function setIsLandedCost($IsLandedCost)
    {
      $this->IsLandedCost = $IsLandedCost;
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
     * @return PurchaseInvoiceLine
     */
    public function setIsNonInventory($IsNonInventory)
    {
      $this->IsNonInventory = $IsNonInventory;
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
     * @return PurchaseInvoiceLine
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
     * @return PurchaseInvoiceLine
     */
    public function setItemTaxScheduleKey($ItemTaxScheduleKey)
    {
      $this->ItemTaxScheduleKey = $ItemTaxScheduleKey;
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
     * @return PurchaseInvoiceLine
     */
    public function setKey($Key)
    {
      $this->Key = $Key;
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
     * @return PurchaseInvoiceLine
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
     * @return PurchaseInvoiceLine
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
     * @return PurchaseInvoiceLine
     */
    public function setPurchaseOrderLineKey($PurchaseOrderLineKey)
    {
      $this->PurchaseOrderLineKey = $PurchaseOrderLineKey;
      return $this;
    }

    /**
     * @return Quantity
     */
    public function getQuantityInvoiced()
    {
      return $this->QuantityInvoiced;
    }

    /**
     * @param Quantity $QuantityInvoiced
     * @return PurchaseInvoiceLine
     */
    public function setQuantityInvoiced($QuantityInvoiced)
    {
      $this->QuantityInvoiced = $QuantityInvoiced;
      return $this;
    }

    /**
     * @return ArrayOfPurchaseInvoiceApplyReceipt
     */
    public function getReceipts()
    {
      return $this->Receipts;
    }

    /**
     * @param ArrayOfPurchaseInvoiceApplyReceipt $Receipts
     * @return PurchaseInvoiceLine
     */
    public function setReceipts($Receipts)
    {
      $this->Receipts = $Receipts;
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
     * @return PurchaseInvoiceLine
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
     * @return PurchaseInvoiceLine
     */
    public function setTaxBasis($TaxBasis)
    {
      $this->TaxBasis = $TaxBasis;
      return $this;
    }

    /**
     * @return ArrayOfPurchaseInvoiceTax
     */
    public function getTaxes()
    {
      return $this->Taxes;
    }

    /**
     * @param ArrayOfPurchaseInvoiceTax $Taxes
     * @return PurchaseInvoiceLine
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
     * @return PurchaseInvoiceLine
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
     * @return PurchaseInvoiceLine
     */
    public function setUofM($UofM)
    {
      $this->UofM = $UofM;
      return $this;
    }

    /**
     * @return GLAccountNumberKey
     */
    public function getVarianceGLAccountKey()
    {
      return $this->VarianceGLAccountKey;
    }

    /**
     * @param GLAccountNumberKey $VarianceGLAccountKey
     * @return PurchaseInvoiceLine
     */
    public function setVarianceGLAccountKey($VarianceGLAccountKey)
    {
      $this->VarianceGLAccountKey = $VarianceGLAccountKey;
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
     * @return PurchaseInvoiceLine
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
     * @return PurchaseInvoiceLine
     */
    public function setVendorItemNumber($VendorItemNumber)
    {
      $this->VendorItemNumber = $VendorItemNumber;
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
     * @return PurchaseInvoiceLine
     */
    public function setWarehouseTaxScheduleKey($WarehouseTaxScheduleKey)
    {
      $this->WarehouseTaxScheduleKey = $WarehouseTaxScheduleKey;
      return $this;
    }

}
