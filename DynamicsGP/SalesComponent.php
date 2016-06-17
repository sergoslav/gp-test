<?php

class SalesComponent extends BusinessObject
{

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
     * @var GLAccountNumberKey $DiscountGLAccountKey
     */
    protected $DiscountGLAccountKey = null;

    /**
     * @var MoneyAmount $ExtendedCost
     */
    protected $ExtendedCost = null;

    /**
     * @var GLAccountNumberKey $InServiceGLAccountKey
     */
    protected $InServiceGLAccountKey = null;

    /**
     * @var GLAccountNumberKey $InUseGLAccountKey
     */
    protected $InUseGLAccountKey = null;

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
     * @var SalesComponentKey $Key
     */
    protected $Key = null;

    /**
     * @var Quantity $Quantity
     */
    protected $Quantity = null;

    /**
     * @var GLAccountNumberKey $ReturnsGLAccountKey
     */
    protected $ReturnsGLAccountKey = null;

    /**
     * @var GLAccountNumberKey $SalesGLAccountKey
     */
    protected $SalesGLAccountKey = null;

    /**
     * @var MoneyAmount $UnitCost
     */
    protected $UnitCost = null;

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
     * @return GLAccountNumberKey
     */
    public function getCostOfSalesGLAccountKey()
    {
      return $this->CostOfSalesGLAccountKey;
    }

    /**
     * @param GLAccountNumberKey $CostOfSalesGLAccountKey
     * @return SalesComponent
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
     * @return SalesComponent
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
     * @return SalesComponent
     */
    public function setDeleteOnUpdate($DeleteOnUpdate)
    {
      $this->DeleteOnUpdate = $DeleteOnUpdate;
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
     * @return SalesComponent
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
     * @return SalesComponent
     */
    public function setExtendedCost($ExtendedCost)
    {
      $this->ExtendedCost = $ExtendedCost;
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
     * @return SalesComponent
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
     * @return SalesComponent
     */
    public function setInUseGLAccountKey($InUseGLAccountKey)
    {
      $this->InUseGLAccountKey = $InUseGLAccountKey;
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
     * @return SalesComponent
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
     * @return SalesComponent
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
     * @return SalesComponent
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
     * @return SalesComponent
     */
    public function setItemKey($ItemKey)
    {
      $this->ItemKey = $ItemKey;
      return $this;
    }

    /**
     * @return SalesComponentKey
     */
    public function getKey()
    {
      return $this->Key;
    }

    /**
     * @param SalesComponentKey $Key
     * @return SalesComponent
     */
    public function setKey($Key)
    {
      $this->Key = $Key;
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
     * @return SalesComponent
     */
    public function setQuantity($Quantity)
    {
      $this->Quantity = $Quantity;
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
     * @return SalesComponent
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
     * @return SalesComponent
     */
    public function setSalesGLAccountKey($SalesGLAccountKey)
    {
      $this->SalesGLAccountKey = $SalesGLAccountKey;
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
     * @return SalesComponent
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
     * @return SalesComponent
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
     * @return SalesComponent
     */
    public function setWarehouseKey($WarehouseKey)
    {
      $this->WarehouseKey = $WarehouseKey;
      return $this;
    }

}
