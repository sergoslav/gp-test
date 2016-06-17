<?php

class SalesItemWarehouseBin extends BusinessObject
{

    /**
     * @var Quantity $AllocatedQuantity
     */
    protected $AllocatedQuantity = null;

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
     * @var ItemWarehouseBinKey $Key
     */
    protected $Key = null;

    /**
     * @var Quantity $OnHandQuantity
     */
    protected $OnHandQuantity = null;

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
     * @return SalesItemWarehouseBin
     */
    public function setAllocatedQuantity($AllocatedQuantity)
    {
      $this->AllocatedQuantity = $AllocatedQuantity;
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
     * @return SalesItemWarehouseBin
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
     * @return SalesItemWarehouseBin
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
     * @return SalesItemWarehouseBin
     */
    public function setInUseQuantity($InUseQuantity)
    {
      $this->InUseQuantity = $InUseQuantity;
      return $this;
    }

    /**
     * @return ItemWarehouseBinKey
     */
    public function getKey()
    {
      return $this->Key;
    }

    /**
     * @param ItemWarehouseBinKey $Key
     * @return SalesItemWarehouseBin
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
     * @return SalesItemWarehouseBin
     */
    public function setOnHandQuantity($OnHandQuantity)
    {
      $this->OnHandQuantity = $OnHandQuantity;
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
     * @return SalesItemWarehouseBin
     */
    public function setReturnedQuantity($ReturnedQuantity)
    {
      $this->ReturnedQuantity = $ReturnedQuantity;
      return $this;
    }

}
