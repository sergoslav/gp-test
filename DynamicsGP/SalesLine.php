<?php

class SalesLine extends BusinessObject
{

    /**
     * @var string $Comment
     */
    protected $Comment = null;

    /**
     * @var CommentKey $CommentKey
     */
    protected $CommentKey = null;

    /**
     * @var GLAccountNumberKey $CostOfSalesGLAccountKey
     */
    protected $CostOfSalesGLAccountKey = null;

    /**
     * @var GLAccountNumberKey $DamagedGLAccountKey
     */
    protected $DamagedGLAccountKey = null;

    /**
     * @var boolean $DeleteOnUpdate
     */
    protected $DeleteOnUpdate = null;

    /**
     * @var MoneyPercentChoice $Discount
     */
    protected $Discount = null;

    /**
     * @var GLAccountNumberKey $DiscountGLAccountKey
     */
    protected $DiscountGLAccountKey = null;

    /**
     * @var MoneyAmount $ExtendedCost
     */
    protected $ExtendedCost = null;

    /**
     * @var string $FrontOfficeIntegrationId
     */
    protected $FrontOfficeIntegrationId = null;

    /**
     * @var GLAccountNumberKey $InServiceGLAccountKey
     */
    protected $InServiceGLAccountKey = null;

    /**
     * @var GLAccountNumberKey $InUseGLAccountKey
     */
    protected $InUseGLAccountKey = null;

    /**
     * @var string $IntegrationId
     */
    protected $IntegrationId = null;

    /**
     * @var int $IntegrationSource
     */
    protected $IntegrationSource = null;

    /**
     * @var GLAccountNumberKey $InventoryGLAccountKey
     */
    protected $InventoryGLAccountKey = null;

    /**
     * @var boolean $IsDropShip
     */
    protected $IsDropShip = null;

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
     * @var TaxScheduleKey $ItemTaxScheduleKey
     */
    protected $ItemTaxScheduleKey = null;

    /**
     * @var SalesLineKey $Key
     */
    protected $Key = null;

    /**
     * @var PriceLevelKey $PriceLevelKey
     */
    protected $PriceLevelKey = null;

    /**
     * @var Quantity $Quantity
     */
    protected $Quantity = null;

    /**
     * @var \DateTime $RequestedShipDate
     */
    protected $RequestedShipDate = null;

    /**
     * @var GLAccountNumberKey $ReturnsGLAccountKey
     */
    protected $ReturnsGLAccountKey = null;

    /**
     * @var GLAccountNumberKey $SalesGLAccountKey
     */
    protected $SalesGLAccountKey = null;

    /**
     * @var SalesTerritoryKey $SalesTerritoryKey
     */
    protected $SalesTerritoryKey = null;

    /**
     * @var SalespersonKey $SalespersonKey
     */
    protected $SalespersonKey = null;

    /**
     * @var BusinessAddress $ShipToAddress
     */
    protected $ShipToAddress = null;

    /**
     * @var CustomerAddressKey $ShipToAddressKey
     */
    protected $ShipToAddressKey = null;

    /**
     * @var ShippingMethodKey $ShippingMethodKey
     */
    protected $ShippingMethodKey = null;

    /**
     * @var MoneyAmount $TaxAmount
     */
    protected $TaxAmount = null;

    /**
     * @var SalesTaxBasis $TaxBasis
     */
    protected $TaxBasis = null;

    /**
     * @var TaxScheduleKey $TaxScheduleKey
     */
    protected $TaxScheduleKey = null;

    /**
     * @var ArrayOfSalesLineTax $Taxes
     */
    protected $Taxes = null;

    /**
     * @var MoneyAmount $TotalAmount
     */
    protected $TotalAmount = null;

    /**
     * @var MoneyAmount $UnitCost
     */
    protected $UnitCost = null;

    /**
     * @var MoneyAmount $UnitPrice
     */
    protected $UnitPrice = null;

    /**
     * @var string $UofM
     */
    protected $UofM = null;

    /**
     * @var WarehouseKey $WarehouseKey
     */
    protected $WarehouseKey = null;

    
    public function __construct()
    {
      parent::__construct();
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
     * @return SalesLine
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
     * @return SalesLine
     */
    public function setCommentKey($CommentKey)
    {
      $this->CommentKey = $CommentKey;
      return $this;
    }

    /**
     * @return GLAccountNumberKey
     */
    public function getCostOfSalesGLAccountKey()
    {
      return $this->CostOfSalesGLAccountKey;
    }

    /**
     * @param GLAccountNumberKey $CostOfSalesGLAccountKey
     * @return SalesLine
     */
    public function setCostOfSalesGLAccountKey($CostOfSalesGLAccountKey)
    {
      $this->CostOfSalesGLAccountKey = $CostOfSalesGLAccountKey;
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
     * @return SalesLine
     */
    public function setDamagedGLAccountKey($DamagedGLAccountKey)
    {
      $this->DamagedGLAccountKey = $DamagedGLAccountKey;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getDeleteOnUpdate()
    {
      return $this->DeleteOnUpdate;
    }

    /**
     * @param boolean $DeleteOnUpdate
     * @return SalesLine
     */
    public function setDeleteOnUpdate($DeleteOnUpdate)
    {
      $this->DeleteOnUpdate = $DeleteOnUpdate;
      return $this;
    }

    /**
     * @return MoneyPercentChoice
     */
    public function getDiscount()
    {
      return $this->Discount;
    }

    /**
     * @param MoneyPercentChoice $Discount
     * @return SalesLine
     */
    public function setDiscount($Discount)
    {
      $this->Discount = $Discount;
      return $this;
    }

    /**
     * @return GLAccountNumberKey
     */
    public function getDiscountGLAccountKey()
    {
      return $this->DiscountGLAccountKey;
    }

    /**
     * @param GLAccountNumberKey $DiscountGLAccountKey
     * @return SalesLine
     */
    public function setDiscountGLAccountKey($DiscountGLAccountKey)
    {
      $this->DiscountGLAccountKey = $DiscountGLAccountKey;
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
     * @return SalesLine
     */
    public function setExtendedCost($ExtendedCost)
    {
      $this->ExtendedCost = $ExtendedCost;
      return $this;
    }

    /**
     * @return string
     */
    public function getFrontOfficeIntegrationId()
    {
      return $this->FrontOfficeIntegrationId;
    }

    /**
     * @param string $FrontOfficeIntegrationId
     * @return SalesLine
     */
    public function setFrontOfficeIntegrationId($FrontOfficeIntegrationId)
    {
      $this->FrontOfficeIntegrationId = $FrontOfficeIntegrationId;
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
     * @return SalesLine
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
     * @return SalesLine
     */
    public function setInUseGLAccountKey($InUseGLAccountKey)
    {
      $this->InUseGLAccountKey = $InUseGLAccountKey;
      return $this;
    }

    /**
     * @return string
     */
    public function getIntegrationId()
    {
      return $this->IntegrationId;
    }

    /**
     * @param string $IntegrationId
     * @return SalesLine
     */
    public function setIntegrationId($IntegrationId)
    {
      $this->IntegrationId = $IntegrationId;
      return $this;
    }

    /**
     * @return int
     */
    public function getIntegrationSource()
    {
      return $this->IntegrationSource;
    }

    /**
     * @param int $IntegrationSource
     * @return SalesLine
     */
    public function setIntegrationSource($IntegrationSource)
    {
      $this->IntegrationSource = $IntegrationSource;
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
     * @return SalesLine
     */
    public function setInventoryGLAccountKey($InventoryGLAccountKey)
    {
      $this->InventoryGLAccountKey = $InventoryGLAccountKey;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsDropShip()
    {
      return $this->IsDropShip;
    }

    /**
     * @param boolean $IsDropShip
     * @return SalesLine
     */
    public function setIsDropShip($IsDropShip)
    {
      $this->IsDropShip = $IsDropShip;
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
     * @return SalesLine
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
     * @return SalesLine
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
     * @return SalesLine
     */
    public function setItemKey($ItemKey)
    {
      $this->ItemKey = $ItemKey;
      return $this;
    }

    /**
     * @return TaxScheduleKey
     */
    public function getItemTaxScheduleKey()
    {
      return $this->ItemTaxScheduleKey;
    }

    /**
     * @param TaxScheduleKey $ItemTaxScheduleKey
     * @return SalesLine
     */
    public function setItemTaxScheduleKey($ItemTaxScheduleKey)
    {
      $this->ItemTaxScheduleKey = $ItemTaxScheduleKey;
      return $this;
    }

    /**
     * @return SalesLineKey
     */
    public function getKey()
    {
      return $this->Key;
    }

    /**
     * @param SalesLineKey $Key
     * @return SalesLine
     */
    public function setKey($Key)
    {
      $this->Key = $Key;
      return $this;
    }

    /**
     * @return PriceLevelKey
     */
    public function getPriceLevelKey()
    {
      return $this->PriceLevelKey;
    }

    /**
     * @param PriceLevelKey $PriceLevelKey
     * @return SalesLine
     */
    public function setPriceLevelKey($PriceLevelKey)
    {
      $this->PriceLevelKey = $PriceLevelKey;
      return $this;
    }

    /**
     * @return Quantity
     */
    public function getQuantity()
    {
      return $this->Quantity;
    }

    /**
     * @param Quantity $Quantity
     * @return SalesLine
     */
    public function setQuantity($Quantity)
    {
      $this->Quantity = $Quantity;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getRequestedShipDate()
    {
      if ($this->RequestedShipDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->RequestedShipDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $RequestedShipDate
     * @return SalesLine
     */
    public function setRequestedShipDate(\DateTime $RequestedShipDate = null)
    {
      if ($RequestedShipDate == null) {
       $this->RequestedShipDate = null;
      } else {
        $this->RequestedShipDate = $RequestedShipDate->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return GLAccountNumberKey
     */
    public function getReturnsGLAccountKey()
    {
      return $this->ReturnsGLAccountKey;
    }

    /**
     * @param GLAccountNumberKey $ReturnsGLAccountKey
     * @return SalesLine
     */
    public function setReturnsGLAccountKey($ReturnsGLAccountKey)
    {
      $this->ReturnsGLAccountKey = $ReturnsGLAccountKey;
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
     * @return SalesLine
     */
    public function setSalesGLAccountKey($SalesGLAccountKey)
    {
      $this->SalesGLAccountKey = $SalesGLAccountKey;
      return $this;
    }

    /**
     * @return SalesTerritoryKey
     */
    public function getSalesTerritoryKey()
    {
      return $this->SalesTerritoryKey;
    }

    /**
     * @param SalesTerritoryKey $SalesTerritoryKey
     * @return SalesLine
     */
    public function setSalesTerritoryKey($SalesTerritoryKey)
    {
      $this->SalesTerritoryKey = $SalesTerritoryKey;
      return $this;
    }

    /**
     * @return SalespersonKey
     */
    public function getSalespersonKey()
    {
      return $this->SalespersonKey;
    }

    /**
     * @param SalespersonKey $SalespersonKey
     * @return SalesLine
     */
    public function setSalespersonKey($SalespersonKey)
    {
      $this->SalespersonKey = $SalespersonKey;
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
     * @return SalesLine
     */
    public function setShipToAddress($ShipToAddress)
    {
      $this->ShipToAddress = $ShipToAddress;
      return $this;
    }

    /**
     * @return CustomerAddressKey
     */
    public function getShipToAddressKey()
    {
      return $this->ShipToAddressKey;
    }

    /**
     * @param CustomerAddressKey $ShipToAddressKey
     * @return SalesLine
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
     * @return SalesLine
     */
    public function setShippingMethodKey($ShippingMethodKey)
    {
      $this->ShippingMethodKey = $ShippingMethodKey;
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
     * @return SalesLine
     */
    public function setTaxAmount($TaxAmount)
    {
      $this->TaxAmount = $TaxAmount;
      return $this;
    }

    /**
     * @return SalesTaxBasis
     */
    public function getTaxBasis()
    {
      return $this->TaxBasis;
    }

    /**
     * @param SalesTaxBasis $TaxBasis
     * @return SalesLine
     */
    public function setTaxBasis($TaxBasis)
    {
      $this->TaxBasis = $TaxBasis;
      return $this;
    }

    /**
     * @return TaxScheduleKey
     */
    public function getTaxScheduleKey()
    {
      return $this->TaxScheduleKey;
    }

    /**
     * @param TaxScheduleKey $TaxScheduleKey
     * @return SalesLine
     */
    public function setTaxScheduleKey($TaxScheduleKey)
    {
      $this->TaxScheduleKey = $TaxScheduleKey;
      return $this;
    }

    /**
     * @return ArrayOfSalesLineTax
     */
    public function getTaxes()
    {
      return $this->Taxes;
    }

    /**
     * @param ArrayOfSalesLineTax $Taxes
     * @return SalesLine
     */
    public function setTaxes($Taxes)
    {
      $this->Taxes = $Taxes;
      return $this;
    }

    /**
     * @return MoneyAmount
     */
    public function getTotalAmount()
    {
      return $this->TotalAmount;
    }

    /**
     * @param MoneyAmount $TotalAmount
     * @return SalesLine
     */
    public function setTotalAmount($TotalAmount)
    {
      $this->TotalAmount = $TotalAmount;
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
     * @return SalesLine
     */
    public function setUnitCost($UnitCost)
    {
      $this->UnitCost = $UnitCost;
      return $this;
    }

    /**
     * @return MoneyAmount
     */
    public function getUnitPrice()
    {
      return $this->UnitPrice;
    }

    /**
     * @param MoneyAmount $UnitPrice
     * @return SalesLine
     */
    public function setUnitPrice($UnitPrice)
    {
      $this->UnitPrice = $UnitPrice;
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
     * @return SalesLine
     */
    public function setUofM($UofM)
    {
      $this->UofM = $UofM;
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
     * @return SalesLine
     */
    public function setWarehouseKey($WarehouseKey)
    {
      $this->WarehouseKey = $WarehouseKey;
      return $this;
    }

}
