<?php

class Item extends BusinessObject
{

    /**
     * @var ABCCode $ABCCode
     */
    protected $ABCCode = null;

    /**
     * @var boolean $AllowBackOrder
     */
    protected $AllowBackOrder = null;

    /**
     * @var GLAccountNumberKey $AssemblyVarianceGLAccountKey
     */
    protected $AssemblyVarianceGLAccountKey = null;

    /**
     * @var ItemClassKey $ClassKey
     */
    protected $ClassKey = null;

    /**
     * @var GLAccountNumberKey $CostofGoodsSoldGLAccountKey
     */
    protected $CostofGoodsSoldGLAccountKey = null;

    /**
     * @var \DateTime $CreatedDate
     */
    protected $CreatedDate = null;

    /**
     * @var CurrencyDecimalPlaces $CurrencyDecimalPlaces
     */
    protected $CurrencyDecimalPlaces = null;

    /**
     * @var MoneyAmount $CurrentCost
     */
    protected $CurrentCost = null;

    /**
     * @var GLAccountNumberKey $DamagedGLAccountKey
     */
    protected $DamagedGLAccountKey = null;

    /**
     * @var PriceLevelKey $DefaultPriceLevelKey
     */
    protected $DefaultPriceLevelKey = null;

    /**
     * @var string $DefaultSellingUofM
     */
    protected $DefaultSellingUofM = null;

    /**
     * @var WarehouseKey $DefaultWarehouseKey
     */
    protected $DefaultWarehouseKey = null;

    /**
     * @var string $Description
     */
    protected $Description = null;

    /**
     * @var GLAccountNumberKey $DropShipGLAccountKey
     */
    protected $DropShipGLAccountKey = null;

    /**
     * @var CurrencyDecimalPlaces $FunctionalCurrencyDecimalPlaces
     */
    protected $FunctionalCurrencyDecimalPlaces = null;

    /**
     * @var string $GenericDescription
     */
    protected $GenericDescription = null;

    /**
     * @var GLAccountNumberKey $InServiceGLAccountKey
     */
    protected $InServiceGLAccountKey = null;

    /**
     * @var GLAccountNumberKey $InUseGLAccountKey
     */
    protected $InUseGLAccountKey = null;

    /**
     * @var boolean $IncludeInDemandPlanning
     */
    protected $IncludeInDemandPlanning = null;

    /**
     * @var InternetAddresses $InternetAddresses
     */
    protected $InternetAddresses = null;

    /**
     * @var GLAccountNumberKey $InventoryGLAccountKey
     */
    protected $InventoryGLAccountKey = null;

    /**
     * @var GLAccountNumberKey $InventoryOffsetGLAccountKey
     */
    protected $InventoryOffsetGLAccountKey = null;

    /**
     * @var GLAccountNumberKey $InventoryReturnGLAccountKey
     */
    protected $InventoryReturnGLAccountKey = null;

    /**
     * @var boolean $IsDiscontinued
     */
    protected $IsDiscontinued = null;

    /**
     * @var boolean $KeepCalendarYearHistory
     */
    protected $KeepCalendarYearHistory = null;

    /**
     * @var boolean $KeepDistributionHistory
     */
    protected $KeepDistributionHistory = null;

    /**
     * @var boolean $KeepFiscalYearHistory
     */
    protected $KeepFiscalYearHistory = null;

    /**
     * @var boolean $KeepTransactionHistory
     */
    protected $KeepTransactionHistory = null;

    /**
     * @var ItemKey $Key
     */
    protected $Key = null;

    /**
     * @var \DateTime $LastModifiedDate
     */
    protected $LastModifiedDate = null;

    /**
     * @var GLAccountNumberKey $MarkdownGLAccountKey
     */
    protected $MarkdownGLAccountKey = null;

    /**
     * @var \DateTime $ModifiedDate
     */
    protected $ModifiedDate = null;

    /**
     * @var PriceMethod $PriceMethod
     */
    protected $PriceMethod = null;

    /**
     * @var GLAccountNumberKey $PurchasePriceVarianceGLAccountKey
     */
    protected $PurchasePriceVarianceGLAccountKey = null;

    /**
     * @var PurchasingTaxBasis $PurchaseTaxBasis
     */
    protected $PurchaseTaxBasis = null;

    /**
     * @var TaxScheduleKey $PurchaseTaxScheduleKey
     */
    protected $PurchaseTaxScheduleKey = null;

    /**
     * @var string $PurchaseUofM
     */
    protected $PurchaseUofM = null;

    /**
     * @var QuantityDecimalPlaces $QuantityDecimalPlaces
     */
    protected $QuantityDecimalPlaces = null;

    /**
     * @var GLAccountNumberKey $SalesGLAccountKey
     */
    protected $SalesGLAccountKey = null;

    /**
     * @var GLAccountNumberKey $SalesReturnGLAccountKey
     */
    protected $SalesReturnGLAccountKey = null;

    /**
     * @var SalesTaxBasis $SalesTaxBasis
     */
    protected $SalesTaxBasis = null;

    /**
     * @var TaxScheduleKey $SalesTaxScheduleKey
     */
    protected $SalesTaxScheduleKey = null;

    /**
     * @var float $ShippingWeight
     */
    protected $ShippingWeight = null;

    /**
     * @var string $ShortDescription
     */
    protected $ShortDescription = null;

    /**
     * @var MoneyAmount $StandardCost
     */
    protected $StandardCost = null;

    /**
     * @var ItemKey $SubstituteItem1Key
     */
    protected $SubstituteItem1Key = null;

    /**
     * @var ItemKey $SubstituteItem2Key
     */
    protected $SubstituteItem2Key = null;

    /**
     * @var ItemType $Type
     */
    protected $Type = null;

    /**
     * @var GLAccountNumberKey $UnrealizedPurchasePriceVarianceGLAccountKey
     */
    protected $UnrealizedPurchasePriceVarianceGLAccountKey = null;

    /**
     * @var UofMScheduleKey $UofMScheduleKey
     */
    protected $UofMScheduleKey = null;

    /**
     * @var string $UserCategoryList1
     */
    protected $UserCategoryList1 = null;

    /**
     * @var string $UserCategoryList2
     */
    protected $UserCategoryList2 = null;

    /**
     * @var string $UserCategoryList3
     */
    protected $UserCategoryList3 = null;

    /**
     * @var string $UserCategoryList4
     */
    protected $UserCategoryList4 = null;

    /**
     * @var string $UserCategoryList5
     */
    protected $UserCategoryList5 = null;

    /**
     * @var string $UserCategoryList6
     */
    protected $UserCategoryList6 = null;

    /**
     * @var GLAccountNumberKey $VarianceGLAccountKey
     */
    protected $VarianceGLAccountKey = null;

    /**
     * @var int $WarrantyDays
     */
    protected $WarrantyDays = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return ABCCode
     */
    public function getABCCode()
    {
      return $this->ABCCode;
    }

    /**
     * @param ABCCode $ABCCode
     * @return Item
     */
    public function setABCCode($ABCCode)
    {
      $this->ABCCode = $ABCCode;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getAllowBackOrder()
    {
      return $this->AllowBackOrder;
    }

    /**
     * @param boolean $AllowBackOrder
     * @return Item
     */
    public function setAllowBackOrder($AllowBackOrder)
    {
      $this->AllowBackOrder = $AllowBackOrder;
      return $this;
    }

    /**
     * @return GLAccountNumberKey
     */
    public function getAssemblyVarianceGLAccountKey()
    {
      return $this->AssemblyVarianceGLAccountKey;
    }

    /**
     * @param GLAccountNumberKey $AssemblyVarianceGLAccountKey
     * @return Item
     */
    public function setAssemblyVarianceGLAccountKey($AssemblyVarianceGLAccountKey)
    {
      $this->AssemblyVarianceGLAccountKey = $AssemblyVarianceGLAccountKey;
      return $this;
    }

    /**
     * @return ItemClassKey
     */
    public function getClassKey()
    {
      return $this->ClassKey;
    }

    /**
     * @param ItemClassKey $ClassKey
     * @return Item
     */
    public function setClassKey($ClassKey)
    {
      $this->ClassKey = $ClassKey;
      return $this;
    }

    /**
     * @return GLAccountNumberKey
     */
    public function getCostofGoodsSoldGLAccountKey()
    {
      return $this->CostofGoodsSoldGLAccountKey;
    }

    /**
     * @param GLAccountNumberKey $CostofGoodsSoldGLAccountKey
     * @return Item
     */
    public function setCostofGoodsSoldGLAccountKey($CostofGoodsSoldGLAccountKey)
    {
      $this->CostofGoodsSoldGLAccountKey = $CostofGoodsSoldGLAccountKey;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getCreatedDate()
    {
      if ($this->CreatedDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->CreatedDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $CreatedDate
     * @return Item
     */
    public function setCreatedDate(\DateTime $CreatedDate = null)
    {
      if ($CreatedDate == null) {
       $this->CreatedDate = null;
      } else {
        $this->CreatedDate = $CreatedDate->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return CurrencyDecimalPlaces
     */
    public function getCurrencyDecimalPlaces()
    {
      return $this->CurrencyDecimalPlaces;
    }

    /**
     * @param CurrencyDecimalPlaces $CurrencyDecimalPlaces
     * @return Item
     */
    public function setCurrencyDecimalPlaces($CurrencyDecimalPlaces)
    {
      $this->CurrencyDecimalPlaces = $CurrencyDecimalPlaces;
      return $this;
    }

    /**
     * @return MoneyAmount
     */
    public function getCurrentCost()
    {
      return $this->CurrentCost;
    }

    /**
     * @param MoneyAmount $CurrentCost
     * @return Item
     */
    public function setCurrentCost($CurrentCost)
    {
      $this->CurrentCost = $CurrentCost;
      return $this;
    }

    /**
     * @return GLAccountNumberKey
     */
    public function getDamagedGLAccountKey()
    {
      return $this->DamagedGLAccountKey;
    }

    /**
     * @param GLAccountNumberKey $DamagedGLAccountKey
     * @return Item
     */
    public function setDamagedGLAccountKey($DamagedGLAccountKey)
    {
      $this->DamagedGLAccountKey = $DamagedGLAccountKey;
      return $this;
    }

    /**
     * @return PriceLevelKey
     */
    public function getDefaultPriceLevelKey()
    {
      return $this->DefaultPriceLevelKey;
    }

    /**
     * @param PriceLevelKey $DefaultPriceLevelKey
     * @return Item
     */
    public function setDefaultPriceLevelKey($DefaultPriceLevelKey)
    {
      $this->DefaultPriceLevelKey = $DefaultPriceLevelKey;
      return $this;
    }

    /**
     * @return string
     */
    public function getDefaultSellingUofM()
    {
      return $this->DefaultSellingUofM;
    }

    /**
     * @param string $DefaultSellingUofM
     * @return Item
     */
    public function setDefaultSellingUofM($DefaultSellingUofM)
    {
      $this->DefaultSellingUofM = $DefaultSellingUofM;
      return $this;
    }

    /**
     * @return WarehouseKey
     */
    public function getDefaultWarehouseKey()
    {
      return $this->DefaultWarehouseKey;
    }

    /**
     * @param WarehouseKey $DefaultWarehouseKey
     * @return Item
     */
    public function setDefaultWarehouseKey($DefaultWarehouseKey)
    {
      $this->DefaultWarehouseKey = $DefaultWarehouseKey;
      return $this;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
      return $this->Description;
    }

    /**
     * @param string $Description
     * @return Item
     */
    public function setDescription($Description)
    {
      $this->Description = $Description;
      return $this;
    }

    /**
     * @return GLAccountNumberKey
     */
    public function getDropShipGLAccountKey()
    {
      return $this->DropShipGLAccountKey;
    }

    /**
     * @param GLAccountNumberKey $DropShipGLAccountKey
     * @return Item
     */
    public function setDropShipGLAccountKey($DropShipGLAccountKey)
    {
      $this->DropShipGLAccountKey = $DropShipGLAccountKey;
      return $this;
    }

    /**
     * @return CurrencyDecimalPlaces
     */
    public function getFunctionalCurrencyDecimalPlaces()
    {
      return $this->FunctionalCurrencyDecimalPlaces;
    }

    /**
     * @param CurrencyDecimalPlaces $FunctionalCurrencyDecimalPlaces
     * @return Item
     */
    public function setFunctionalCurrencyDecimalPlaces($FunctionalCurrencyDecimalPlaces)
    {
      $this->FunctionalCurrencyDecimalPlaces = $FunctionalCurrencyDecimalPlaces;
      return $this;
    }

    /**
     * @return string
     */
    public function getGenericDescription()
    {
      return $this->GenericDescription;
    }

    /**
     * @param string $GenericDescription
     * @return Item
     */
    public function setGenericDescription($GenericDescription)
    {
      $this->GenericDescription = $GenericDescription;
      return $this;
    }

    /**
     * @return GLAccountNumberKey
     */
    public function getInServiceGLAccountKey()
    {
      return $this->InServiceGLAccountKey;
    }

    /**
     * @param GLAccountNumberKey $InServiceGLAccountKey
     * @return Item
     */
    public function setInServiceGLAccountKey($InServiceGLAccountKey)
    {
      $this->InServiceGLAccountKey = $InServiceGLAccountKey;
      return $this;
    }

    /**
     * @return GLAccountNumberKey
     */
    public function getInUseGLAccountKey()
    {
      return $this->InUseGLAccountKey;
    }

    /**
     * @param GLAccountNumberKey $InUseGLAccountKey
     * @return Item
     */
    public function setInUseGLAccountKey($InUseGLAccountKey)
    {
      $this->InUseGLAccountKey = $InUseGLAccountKey;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIncludeInDemandPlanning()
    {
      return $this->IncludeInDemandPlanning;
    }

    /**
     * @param boolean $IncludeInDemandPlanning
     * @return Item
     */
    public function setIncludeInDemandPlanning($IncludeInDemandPlanning)
    {
      $this->IncludeInDemandPlanning = $IncludeInDemandPlanning;
      return $this;
    }

    /**
     * @return InternetAddresses
     */
    public function getInternetAddresses()
    {
      return $this->InternetAddresses;
    }

    /**
     * @param InternetAddresses $InternetAddresses
     * @return Item
     */
    public function setInternetAddresses($InternetAddresses)
    {
      $this->InternetAddresses = $InternetAddresses;
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
     * @return Item
     */
    public function setInventoryGLAccountKey($InventoryGLAccountKey)
    {
      $this->InventoryGLAccountKey = $InventoryGLAccountKey;
      return $this;
    }

    /**
     * @return GLAccountNumberKey
     */
    public function getInventoryOffsetGLAccountKey()
    {
      return $this->InventoryOffsetGLAccountKey;
    }

    /**
     * @param GLAccountNumberKey $InventoryOffsetGLAccountKey
     * @return Item
     */
    public function setInventoryOffsetGLAccountKey($InventoryOffsetGLAccountKey)
    {
      $this->InventoryOffsetGLAccountKey = $InventoryOffsetGLAccountKey;
      return $this;
    }

    /**
     * @return GLAccountNumberKey
     */
    public function getInventoryReturnGLAccountKey()
    {
      return $this->InventoryReturnGLAccountKey;
    }

    /**
     * @param GLAccountNumberKey $InventoryReturnGLAccountKey
     * @return Item
     */
    public function setInventoryReturnGLAccountKey($InventoryReturnGLAccountKey)
    {
      $this->InventoryReturnGLAccountKey = $InventoryReturnGLAccountKey;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsDiscontinued()
    {
      return $this->IsDiscontinued;
    }

    /**
     * @param boolean $IsDiscontinued
     * @return Item
     */
    public function setIsDiscontinued($IsDiscontinued)
    {
      $this->IsDiscontinued = $IsDiscontinued;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getKeepCalendarYearHistory()
    {
      return $this->KeepCalendarYearHistory;
    }

    /**
     * @param boolean $KeepCalendarYearHistory
     * @return Item
     */
    public function setKeepCalendarYearHistory($KeepCalendarYearHistory)
    {
      $this->KeepCalendarYearHistory = $KeepCalendarYearHistory;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getKeepDistributionHistory()
    {
      return $this->KeepDistributionHistory;
    }

    /**
     * @param boolean $KeepDistributionHistory
     * @return Item
     */
    public function setKeepDistributionHistory($KeepDistributionHistory)
    {
      $this->KeepDistributionHistory = $KeepDistributionHistory;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getKeepFiscalYearHistory()
    {
      return $this->KeepFiscalYearHistory;
    }

    /**
     * @param boolean $KeepFiscalYearHistory
     * @return Item
     */
    public function setKeepFiscalYearHistory($KeepFiscalYearHistory)
    {
      $this->KeepFiscalYearHistory = $KeepFiscalYearHistory;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getKeepTransactionHistory()
    {
      return $this->KeepTransactionHistory;
    }

    /**
     * @param boolean $KeepTransactionHistory
     * @return Item
     */
    public function setKeepTransactionHistory($KeepTransactionHistory)
    {
      $this->KeepTransactionHistory = $KeepTransactionHistory;
      return $this;
    }

    /**
     * @return ItemKey
     */
    public function getKey()
    {
      return $this->Key;
    }

    /**
     * @param ItemKey $Key
     * @return Item
     */
    public function setKey($Key)
    {
      $this->Key = $Key;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getLastModifiedDate()
    {
      if ($this->LastModifiedDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->LastModifiedDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $LastModifiedDate
     * @return Item
     */
    public function setLastModifiedDate(\DateTime $LastModifiedDate = null)
    {
      if ($LastModifiedDate == null) {
       $this->LastModifiedDate = null;
      } else {
        $this->LastModifiedDate = $LastModifiedDate->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return GLAccountNumberKey
     */
    public function getMarkdownGLAccountKey()
    {
      return $this->MarkdownGLAccountKey;
    }

    /**
     * @param GLAccountNumberKey $MarkdownGLAccountKey
     * @return Item
     */
    public function setMarkdownGLAccountKey($MarkdownGLAccountKey)
    {
      $this->MarkdownGLAccountKey = $MarkdownGLAccountKey;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getModifiedDate()
    {
      if ($this->ModifiedDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->ModifiedDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $ModifiedDate
     * @return Item
     */
    public function setModifiedDate(\DateTime $ModifiedDate = null)
    {
      if ($ModifiedDate == null) {
       $this->ModifiedDate = null;
      } else {
        $this->ModifiedDate = $ModifiedDate->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return PriceMethod
     */
    public function getPriceMethod()
    {
      return $this->PriceMethod;
    }

    /**
     * @param PriceMethod $PriceMethod
     * @return Item
     */
    public function setPriceMethod($PriceMethod)
    {
      $this->PriceMethod = $PriceMethod;
      return $this;
    }

    /**
     * @return GLAccountNumberKey
     */
    public function getPurchasePriceVarianceGLAccountKey()
    {
      return $this->PurchasePriceVarianceGLAccountKey;
    }

    /**
     * @param GLAccountNumberKey $PurchasePriceVarianceGLAccountKey
     * @return Item
     */
    public function setPurchasePriceVarianceGLAccountKey($PurchasePriceVarianceGLAccountKey)
    {
      $this->PurchasePriceVarianceGLAccountKey = $PurchasePriceVarianceGLAccountKey;
      return $this;
    }

    /**
     * @return PurchasingTaxBasis
     */
    public function getPurchaseTaxBasis()
    {
      return $this->PurchaseTaxBasis;
    }

    /**
     * @param PurchasingTaxBasis $PurchaseTaxBasis
     * @return Item
     */
    public function setPurchaseTaxBasis($PurchaseTaxBasis)
    {
      $this->PurchaseTaxBasis = $PurchaseTaxBasis;
      return $this;
    }

    /**
     * @return TaxScheduleKey
     */
    public function getPurchaseTaxScheduleKey()
    {
      return $this->PurchaseTaxScheduleKey;
    }

    /**
     * @param TaxScheduleKey $PurchaseTaxScheduleKey
     * @return Item
     */
    public function setPurchaseTaxScheduleKey($PurchaseTaxScheduleKey)
    {
      $this->PurchaseTaxScheduleKey = $PurchaseTaxScheduleKey;
      return $this;
    }

    /**
     * @return string
     */
    public function getPurchaseUofM()
    {
      return $this->PurchaseUofM;
    }

    /**
     * @param string $PurchaseUofM
     * @return Item
     */
    public function setPurchaseUofM($PurchaseUofM)
    {
      $this->PurchaseUofM = $PurchaseUofM;
      return $this;
    }

    /**
     * @return QuantityDecimalPlaces
     */
    public function getQuantityDecimalPlaces()
    {
      return $this->QuantityDecimalPlaces;
    }

    /**
     * @param QuantityDecimalPlaces $QuantityDecimalPlaces
     * @return Item
     */
    public function setQuantityDecimalPlaces($QuantityDecimalPlaces)
    {
      $this->QuantityDecimalPlaces = $QuantityDecimalPlaces;
      return $this;
    }

    /**
     * @return GLAccountNumberKey
     */
    public function getSalesGLAccountKey()
    {
      return $this->SalesGLAccountKey;
    }

    /**
     * @param GLAccountNumberKey $SalesGLAccountKey
     * @return Item
     */
    public function setSalesGLAccountKey($SalesGLAccountKey)
    {
      $this->SalesGLAccountKey = $SalesGLAccountKey;
      return $this;
    }

    /**
     * @return GLAccountNumberKey
     */
    public function getSalesReturnGLAccountKey()
    {
      return $this->SalesReturnGLAccountKey;
    }

    /**
     * @param GLAccountNumberKey $SalesReturnGLAccountKey
     * @return Item
     */
    public function setSalesReturnGLAccountKey($SalesReturnGLAccountKey)
    {
      $this->SalesReturnGLAccountKey = $SalesReturnGLAccountKey;
      return $this;
    }

    /**
     * @return SalesTaxBasis
     */
    public function getSalesTaxBasis()
    {
      return $this->SalesTaxBasis;
    }

    /**
     * @param SalesTaxBasis $SalesTaxBasis
     * @return Item
     */
    public function setSalesTaxBasis($SalesTaxBasis)
    {
      $this->SalesTaxBasis = $SalesTaxBasis;
      return $this;
    }

    /**
     * @return TaxScheduleKey
     */
    public function getSalesTaxScheduleKey()
    {
      return $this->SalesTaxScheduleKey;
    }

    /**
     * @param TaxScheduleKey $SalesTaxScheduleKey
     * @return Item
     */
    public function setSalesTaxScheduleKey($SalesTaxScheduleKey)
    {
      $this->SalesTaxScheduleKey = $SalesTaxScheduleKey;
      return $this;
    }

    /**
     * @return float
     */
    public function getShippingWeight()
    {
      return $this->ShippingWeight;
    }

    /**
     * @param float $ShippingWeight
     * @return Item
     */
    public function setShippingWeight($ShippingWeight)
    {
      $this->ShippingWeight = $ShippingWeight;
      return $this;
    }

    /**
     * @return string
     */
    public function getShortDescription()
    {
      return $this->ShortDescription;
    }

    /**
     * @param string $ShortDescription
     * @return Item
     */
    public function setShortDescription($ShortDescription)
    {
      $this->ShortDescription = $ShortDescription;
      return $this;
    }

    /**
     * @return MoneyAmount
     */
    public function getStandardCost()
    {
      return $this->StandardCost;
    }

    /**
     * @param MoneyAmount $StandardCost
     * @return Item
     */
    public function setStandardCost($StandardCost)
    {
      $this->StandardCost = $StandardCost;
      return $this;
    }

    /**
     * @return ItemKey
     */
    public function getSubstituteItem1Key()
    {
      return $this->SubstituteItem1Key;
    }

    /**
     * @param ItemKey $SubstituteItem1Key
     * @return Item
     */
    public function setSubstituteItem1Key($SubstituteItem1Key)
    {
      $this->SubstituteItem1Key = $SubstituteItem1Key;
      return $this;
    }

    /**
     * @return ItemKey
     */
    public function getSubstituteItem2Key()
    {
      return $this->SubstituteItem2Key;
    }

    /**
     * @param ItemKey $SubstituteItem2Key
     * @return Item
     */
    public function setSubstituteItem2Key($SubstituteItem2Key)
    {
      $this->SubstituteItem2Key = $SubstituteItem2Key;
      return $this;
    }

    /**
     * @return ItemType
     */
    public function getType()
    {
      return $this->Type;
    }

    /**
     * @param ItemType $Type
     * @return Item
     */
    public function setType($Type)
    {
      $this->Type = $Type;
      return $this;
    }

    /**
     * @return GLAccountNumberKey
     */
    public function getUnrealizedPurchasePriceVarianceGLAccountKey()
    {
      return $this->UnrealizedPurchasePriceVarianceGLAccountKey;
    }

    /**
     * @param GLAccountNumberKey $UnrealizedPurchasePriceVarianceGLAccountKey
     * @return Item
     */
    public function setUnrealizedPurchasePriceVarianceGLAccountKey($UnrealizedPurchasePriceVarianceGLAccountKey)
    {
      $this->UnrealizedPurchasePriceVarianceGLAccountKey = $UnrealizedPurchasePriceVarianceGLAccountKey;
      return $this;
    }

    /**
     * @return UofMScheduleKey
     */
    public function getUofMScheduleKey()
    {
      return $this->UofMScheduleKey;
    }

    /**
     * @param UofMScheduleKey $UofMScheduleKey
     * @return Item
     */
    public function setUofMScheduleKey($UofMScheduleKey)
    {
      $this->UofMScheduleKey = $UofMScheduleKey;
      return $this;
    }

    /**
     * @return string
     */
    public function getUserCategoryList1()
    {
      return $this->UserCategoryList1;
    }

    /**
     * @param string $UserCategoryList1
     * @return Item
     */
    public function setUserCategoryList1($UserCategoryList1)
    {
      $this->UserCategoryList1 = $UserCategoryList1;
      return $this;
    }

    /**
     * @return string
     */
    public function getUserCategoryList2()
    {
      return $this->UserCategoryList2;
    }

    /**
     * @param string $UserCategoryList2
     * @return Item
     */
    public function setUserCategoryList2($UserCategoryList2)
    {
      $this->UserCategoryList2 = $UserCategoryList2;
      return $this;
    }

    /**
     * @return string
     */
    public function getUserCategoryList3()
    {
      return $this->UserCategoryList3;
    }

    /**
     * @param string $UserCategoryList3
     * @return Item
     */
    public function setUserCategoryList3($UserCategoryList3)
    {
      $this->UserCategoryList3 = $UserCategoryList3;
      return $this;
    }

    /**
     * @return string
     */
    public function getUserCategoryList4()
    {
      return $this->UserCategoryList4;
    }

    /**
     * @param string $UserCategoryList4
     * @return Item
     */
    public function setUserCategoryList4($UserCategoryList4)
    {
      $this->UserCategoryList4 = $UserCategoryList4;
      return $this;
    }

    /**
     * @return string
     */
    public function getUserCategoryList5()
    {
      return $this->UserCategoryList5;
    }

    /**
     * @param string $UserCategoryList5
     * @return Item
     */
    public function setUserCategoryList5($UserCategoryList5)
    {
      $this->UserCategoryList5 = $UserCategoryList5;
      return $this;
    }

    /**
     * @return string
     */
    public function getUserCategoryList6()
    {
      return $this->UserCategoryList6;
    }

    /**
     * @param string $UserCategoryList6
     * @return Item
     */
    public function setUserCategoryList6($UserCategoryList6)
    {
      $this->UserCategoryList6 = $UserCategoryList6;
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
     * @return Item
     */
    public function setVarianceGLAccountKey($VarianceGLAccountKey)
    {
      $this->VarianceGLAccountKey = $VarianceGLAccountKey;
      return $this;
    }

    /**
     * @return int
     */
    public function getWarrantyDays()
    {
      return $this->WarrantyDays;
    }

    /**
     * @param int $WarrantyDays
     * @return Item
     */
    public function setWarrantyDays($WarrantyDays)
    {
      $this->WarrantyDays = $WarrantyDays;
      return $this;
    }

}
