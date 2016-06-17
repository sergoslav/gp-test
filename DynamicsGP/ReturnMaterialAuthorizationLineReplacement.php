<?php

class ReturnMaterialAuthorizationLineReplacement
{

    /**
     * @var ItemKey $ItemKey
     */
    protected $ItemKey = null;

    /**
     * @var PriceLevelKey $PriceLevelKey
     */
    protected $PriceLevelKey = null;

    /**
     * @var Quantity $Quantity
     */
    protected $Quantity = null;

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
     * @return ReturnMaterialAuthorizationLineReplacement
     */
    public function setItemKey($ItemKey)
    {
      $this->ItemKey = $ItemKey;
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
     * @return ReturnMaterialAuthorizationLineReplacement
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
     * @return ReturnMaterialAuthorizationLineReplacement
     */
    public function setQuantity($Quantity)
    {
      $this->Quantity = $Quantity;
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
     * @return ReturnMaterialAuthorizationLineReplacement
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
     * @return ReturnMaterialAuthorizationLineReplacement
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
     * @return ReturnMaterialAuthorizationLineReplacement
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
     * @return ReturnMaterialAuthorizationLineReplacement
     */
    public function setWarehouseKey($WarehouseKey)
    {
      $this->WarehouseKey = $WarehouseKey;
      return $this;
    }

}
