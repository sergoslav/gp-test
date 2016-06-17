<?php

class SalesItemWarehouse extends BusinessObject
{

    /**
     * @var Quantity $AllocatedQuantity
     */
    protected $AllocatedQuantity = null;

    /**
     * @var Quantity $BackOrderedQuantity
     */
    protected $BackOrderedQuantity = null;

    /**
     * @var ArrayOfSalesItemWarehouseBin $Bins
     */
    protected $Bins = null;

    /**
     * @var Quantity $DamagedQuantity
     */
    protected $DamagedQuantity = null;

    /**
     * @var Quantity $InServiceQuantity
     */
    protected $InServiceQuantity = null;

    /**
     * @var Quantity $InUseQuantity
     */
    protected $InUseQuantity = null;

    /**
     * @var ItemWarehouseKey $Key
     */
    protected $Key = null;

    /**
     * @var Quantity $OnHandQuantity
     */
    protected $OnHandQuantity = null;

    /**
     * @var Quantity $OnOrderQuantity
     */
    protected $OnOrderQuantity = null;

    /**
     * @var Quantity $ReturnedQuantity
     */
    protected $ReturnedQuantity = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return Quantity
     */
    public function getAllocatedQuantity()
    {
      return $this->AllocatedQuantity;
    }

    /**
     * @param Quantity $AllocatedQuantity
     * @return SalesItemWarehouse
     */
    public function setAllocatedQuantity($AllocatedQuantity)
    {
      $this->AllocatedQuantity = $AllocatedQuantity;
      return $this;
    }

    /**
     * @return Quantity
     */
    public function getBackOrderedQuantity()
    {
      return $this->BackOrderedQuantity;
    }

    /**
     * @param Quantity $BackOrderedQuantity
     * @return SalesItemWarehouse
     */
    public function setBackOrderedQuantity($BackOrderedQuantity)
    {
      $this->BackOrderedQuantity = $BackOrderedQuantity;
      return $this;
    }

    /**
     * @return ArrayOfSalesItemWarehouseBin
     */
    public function getBins()
    {
      return $this->Bins;
    }

    /**
     * @param ArrayOfSalesItemWarehouseBin $Bins
     * @return SalesItemWarehouse
     */
    public function setBins($Bins)
    {
      $this->Bins = $Bins;
      return $this;
    }

    /**
     * @return Quantity
     */
    public function getDamagedQuantity()
    {
      return $this->DamagedQuantity;
    }

    /**
     * @param Quantity $DamagedQuantity
     * @return SalesItemWarehouse
     */
    public function setDamagedQuantity($DamagedQuantity)
    {
      $this->DamagedQuantity = $DamagedQuantity;
      return $this;
    }

    /**
     * @return Quantity
     */
    public function getInServiceQuantity()
    {
      return $this->InServiceQuantity;
    }

    /**
     * @param Quantity $InServiceQuantity
     * @return SalesItemWarehouse
     */
    public function setInServiceQuantity($InServiceQuantity)
    {
      $this->InServiceQuantity = $InServiceQuantity;
      return $this;
    }

    /**
     * @return Quantity
     */
    public function getInUseQuantity()
    {
      return $this->InUseQuantity;
    }

    /**
     * @param Quantity $InUseQuantity
     * @return SalesItemWarehouse
     */
    public function setInUseQuantity($InUseQuantity)
    {
      $this->InUseQuantity = $InUseQuantity;
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
     * @return SalesItemWarehouse
     */
    public function setKey($Key)
    {
      $this->Key = $Key;
      return $this;
    }

    /**
     * @return Quantity
     */
    public function getOnHandQuantity()
    {
      return $this->OnHandQuantity;
    }

    /**
     * @param Quantity $OnHandQuantity
     * @return SalesItemWarehouse
     */
    public function setOnHandQuantity($OnHandQuantity)
    {
      $this->OnHandQuantity = $OnHandQuantity;
      return $this;
    }

    /**
     * @return Quantity
     */
    public function getOnOrderQuantity()
    {
      return $this->OnOrderQuantity;
    }

    /**
     * @param Quantity $OnOrderQuantity
     * @return SalesItemWarehouse
     */
    public function setOnOrderQuantity($OnOrderQuantity)
    {
      $this->OnOrderQuantity = $OnOrderQuantity;
      return $this;
    }

    /**
     * @return Quantity
     */
    public function getReturnedQuantity()
    {
      return $this->ReturnedQuantity;
    }

    /**
     * @param Quantity $ReturnedQuantity
     * @return SalesItemWarehouse
     */
    public function setReturnedQuantity($ReturnedQuantity)
    {
      $this->ReturnedQuantity = $ReturnedQuantity;
      return $this;
    }

}
