<?php

class PlannedOrder extends BusinessObject
{

    /**
     * @var \DateTime $DueDate
     */
    protected $DueDate = null;

    /**
     * @var boolean $IsCRPScheduled
     */
    protected $IsCRPScheduled = null;

    /**
     * @var ItemKey $ItemKey
     */
    protected $ItemKey = null;

    /**
     * @var ArrayOfPlannedOrderItem $Items
     */
    protected $Items = null;

    /**
     * @var int $LLC
     */
    protected $LLC = null;

    /**
     * @var WarehouseKey $LocationKey
     */
    protected $LocationKey = null;

    /**
     * @var PlannedOrderKey $PlannedOrderKey
     */
    protected $PlannedOrderKey = null;

    /**
     * @var Quantity $QuantityToOrder
     */
    protected $QuantityToOrder = null;

    /**
     * @var \DateTime $ReleaseDate
     */
    protected $ReleaseDate = null;

    /**
     * @var PlannedOrderReplenishment $Replenishment
     */
    protected $Replenishment = null;

    /**
     * @var int $RunNumber
     */
    protected $RunNumber = null;

    /**
     * @var boolean $Transferred
     */
    protected $Transferred = null;

    /**
     * @var string $UnitOfMeasure
     */
    protected $UnitOfMeasure = null;

    /**
     * @var VendorKey $VendorKey
     */
    protected $VendorKey = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return \DateTime
     */
    public function getDueDate()
    {
      if ($this->DueDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->DueDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $DueDate
     * @return PlannedOrder
     */
    public function setDueDate(\DateTime $DueDate = null)
    {
      if ($DueDate == null) {
       $this->DueDate = null;
      } else {
        $this->DueDate = $DueDate->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsCRPScheduled()
    {
      return $this->IsCRPScheduled;
    }

    /**
     * @param boolean $IsCRPScheduled
     * @return PlannedOrder
     */
    public function setIsCRPScheduled($IsCRPScheduled)
    {
      $this->IsCRPScheduled = $IsCRPScheduled;
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
     * @return PlannedOrder
     */
    public function setItemKey($ItemKey)
    {
      $this->ItemKey = $ItemKey;
      return $this;
    }

    /**
     * @return ArrayOfPlannedOrderItem
     */
    public function getItems()
    {
      return $this->Items;
    }

    /**
     * @param ArrayOfPlannedOrderItem $Items
     * @return PlannedOrder
     */
    public function setItems($Items)
    {
      $this->Items = $Items;
      return $this;
    }

    /**
     * @return int
     */
    public function getLLC()
    {
      return $this->LLC;
    }

    /**
     * @param int $LLC
     * @return PlannedOrder
     */
    public function setLLC($LLC)
    {
      $this->LLC = $LLC;
      return $this;
    }

    /**
     * @return WarehouseKey
     */
    public function getLocationKey()
    {
      return $this->LocationKey;
    }

    /**
     * @param WarehouseKey $LocationKey
     * @return PlannedOrder
     */
    public function setLocationKey($LocationKey)
    {
      $this->LocationKey = $LocationKey;
      return $this;
    }

    /**
     * @return PlannedOrderKey
     */
    public function getPlannedOrderKey()
    {
      return $this->PlannedOrderKey;
    }

    /**
     * @param PlannedOrderKey $PlannedOrderKey
     * @return PlannedOrder
     */
    public function setPlannedOrderKey($PlannedOrderKey)
    {
      $this->PlannedOrderKey = $PlannedOrderKey;
      return $this;
    }

    /**
     * @return Quantity
     */
    public function getQuantityToOrder()
    {
      return $this->QuantityToOrder;
    }

    /**
     * @param Quantity $QuantityToOrder
     * @return PlannedOrder
     */
    public function setQuantityToOrder($QuantityToOrder)
    {
      $this->QuantityToOrder = $QuantityToOrder;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getReleaseDate()
    {
      if ($this->ReleaseDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->ReleaseDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $ReleaseDate
     * @return PlannedOrder
     */
    public function setReleaseDate(\DateTime $ReleaseDate = null)
    {
      if ($ReleaseDate == null) {
       $this->ReleaseDate = null;
      } else {
        $this->ReleaseDate = $ReleaseDate->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return PlannedOrderReplenishment
     */
    public function getReplenishment()
    {
      return $this->Replenishment;
    }

    /**
     * @param PlannedOrderReplenishment $Replenishment
     * @return PlannedOrder
     */
    public function setReplenishment($Replenishment)
    {
      $this->Replenishment = $Replenishment;
      return $this;
    }

    /**
     * @return int
     */
    public function getRunNumber()
    {
      return $this->RunNumber;
    }

    /**
     * @param int $RunNumber
     * @return PlannedOrder
     */
    public function setRunNumber($RunNumber)
    {
      $this->RunNumber = $RunNumber;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getTransferred()
    {
      return $this->Transferred;
    }

    /**
     * @param boolean $Transferred
     * @return PlannedOrder
     */
    public function setTransferred($Transferred)
    {
      $this->Transferred = $Transferred;
      return $this;
    }

    /**
     * @return string
     */
    public function getUnitOfMeasure()
    {
      return $this->UnitOfMeasure;
    }

    /**
     * @param string $UnitOfMeasure
     * @return PlannedOrder
     */
    public function setUnitOfMeasure($UnitOfMeasure)
    {
      $this->UnitOfMeasure = $UnitOfMeasure;
      return $this;
    }

    /**
     * @return VendorKey
     */
    public function getVendorKey()
    {
      return $this->VendorKey;
    }

    /**
     * @param VendorKey $VendorKey
     * @return PlannedOrder
     */
    public function setVendorKey($VendorKey)
    {
      $this->VendorKey = $VendorKey;
      return $this;
    }

}
