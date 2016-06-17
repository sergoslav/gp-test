<?php

class PlannedOrderSummary extends BusinessObjectSummary
{

    /**
     * @var \DateTime $DueDate
     */
    protected $DueDate = null;

    /**
     * @var ItemKey $ItemKey
     */
    protected $ItemKey = null;

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
     * @var int $RunNumber
     */
    protected $RunNumber = null;

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
     * @return PlannedOrderSummary
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
     * @return ItemKey
     */
    public function getItemKey()
    {
      return $this->ItemKey;
    }

    /**
     * @param ItemKey $ItemKey
     * @return PlannedOrderSummary
     */
    public function setItemKey($ItemKey)
    {
      $this->ItemKey = $ItemKey;
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
     * @return PlannedOrderSummary
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
     * @return PlannedOrderSummary
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
     * @return PlannedOrderSummary
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
     * @return PlannedOrderSummary
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
     * @return int
     */
    public function getRunNumber()
    {
      return $this->RunNumber;
    }

    /**
     * @param int $RunNumber
     * @return PlannedOrderSummary
     */
    public function setRunNumber($RunNumber)
    {
      $this->RunNumber = $RunNumber;
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
     * @return PlannedOrderSummary
     */
    public function setVendorKey($VendorKey)
    {
      $this->VendorKey = $VendorKey;
      return $this;
    }

}
