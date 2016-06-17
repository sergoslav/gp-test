<?php

class ItemWarehouse extends BusinessObject
{

    /**
     * @var string $Bin
     */
    protected $Bin = null;

    /**
     * @var BuyerKey $BuyerKey
     */
    protected $BuyerKey = null;

    /**
     * @var ItemWarehouseKey $Key
     */
    protected $Key = null;

    /**
     * @var LandedCostGroupKey $LandedCostGroupKey
     */
    protected $LandedCostGroupKey = null;

    /**
     * @var PlannerKey $PlannerKey
     */
    protected $PlannerKey = null;

    /**
     * @var Planning $Planning
     */
    protected $Planning = null;

    /**
     * @var VendorKey $PrimaryVendorKey
     */
    protected $PrimaryVendorKey = null;

    /**
     * @var Quantity $RequisitionedQuantity
     */
    protected $RequisitionedQuantity = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return string
     */
    public function getBin()
    {
      return $this->Bin;
    }

    /**
     * @param string $Bin
     * @return ItemWarehouse
     */
    public function setBin($Bin)
    {
      $this->Bin = $Bin;
      return $this;
    }

    /**
     * @return BuyerKey
     */
    public function getBuyerKey()
    {
      return $this->BuyerKey;
    }

    /**
     * @param BuyerKey $BuyerKey
     * @return ItemWarehouse
     */
    public function setBuyerKey($BuyerKey)
    {
      $this->BuyerKey = $BuyerKey;
      return $this;
    }

    /**
     * @return ItemWarehouseKey
     */
    public function getKey()
    {
      return $this->Key;
    }

    /**
     * @param ItemWarehouseKey $Key
     * @return ItemWarehouse
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
     * @return ItemWarehouse
     */
    public function setLandedCostGroupKey($LandedCostGroupKey)
    {
      $this->LandedCostGroupKey = $LandedCostGroupKey;
      return $this;
    }

    /**
     * @return PlannerKey
     */
    public function getPlannerKey()
    {
      return $this->PlannerKey;
    }

    /**
     * @param PlannerKey $PlannerKey
     * @return ItemWarehouse
     */
    public function setPlannerKey($PlannerKey)
    {
      $this->PlannerKey = $PlannerKey;
      return $this;
    }

    /**
     * @return Planning
     */
    public function getPlanning()
    {
      return $this->Planning;
    }

    /**
     * @param Planning $Planning
     * @return ItemWarehouse
     */
    public function setPlanning($Planning)
    {
      $this->Planning = $Planning;
      return $this;
    }

    /**
     * @return VendorKey
     */
    public function getPrimaryVendorKey()
    {
      return $this->PrimaryVendorKey;
    }

    /**
     * @param VendorKey $PrimaryVendorKey
     * @return ItemWarehouse
     */
    public function setPrimaryVendorKey($PrimaryVendorKey)
    {
      $this->PrimaryVendorKey = $PrimaryVendorKey;
      return $this;
    }

    /**
     * @return Quantity
     */
    public function getRequisitionedQuantity()
    {
      return $this->RequisitionedQuantity;
    }

    /**
     * @param Quantity $RequisitionedQuantity
     * @return ItemWarehouse
     */
    public function setRequisitionedQuantity($RequisitionedQuantity)
    {
      $this->RequisitionedQuantity = $RequisitionedQuantity;
      return $this;
    }

}
