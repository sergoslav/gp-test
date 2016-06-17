<?php

class ItemWarehouseSummary
{

    /**
     * @var BuyerKey $BuyerKey
     */
    protected $BuyerKey = null;

    /**
     * @var ItemWarehouseKey $Key
     */
    protected $Key = null;

    /**
     * @var PlannerKey $PlannerKey
     */
    protected $PlannerKey = null;

    /**
     * @var VendorKey $PrimaryVendorKey
     */
    protected $PrimaryVendorKey = null;

    
    public function __construct()
    {
    
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
     * @return ItemWarehouseSummary
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
     * @return ItemWarehouseSummary
     */
    public function setKey($Key)
    {
      $this->Key = $Key;
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
     * @return ItemWarehouseSummary
     */
    public function setPlannerKey($PlannerKey)
    {
      $this->PlannerKey = $PlannerKey;
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
     * @return ItemWarehouseSummary
     */
    public function setPrimaryVendorKey($PrimaryVendorKey)
    {
      $this->PrimaryVendorKey = $PrimaryVendorKey;
      return $this;
    }

}
