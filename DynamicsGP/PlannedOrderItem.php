<?php

class PlannedOrderItem
{

    /**
     * @var Quantity $AllocatedByOpenMO
     */
    protected $AllocatedByOpenMO = null;

    /**
     * @var Quantity $AllocatedByReleasedMO
     */
    protected $AllocatedByReleasedMO = null;

    /**
     * @var boolean $Canceled
     */
    protected $Canceled = null;

    /**
     * @var Quantity $ConsumedByOpenMO
     */
    protected $ConsumedByOpenMO = null;

    /**
     * @var Quantity $ConsumedByReleasedMO
     */
    protected $ConsumedByReleasedMO = null;

    /**
     * @var \DateTime $DueDate
     */
    protected $DueDate = null;

    /**
     * @var PlannedOrderItemExceptions $Exceptions
     */
    protected $Exceptions = null;

    /**
     * @var ItemKey $ItemKey
     */
    protected $ItemKey = null;

    /**
     * @var WarehouseKey $LocationKey
     */
    protected $LocationKey = null;

    /**
     * @var PlannedOrderParentMRPType $MRPParentType
     */
    protected $MRPParentType = null;

    /**
     * @var PlannedOrderMRPType $MRPType
     */
    protected $MRPType = null;

    /**
     * @var boolean $MoveIn
     */
    protected $MoveIn = null;

    /**
     * @var boolean $MoveOut
     */
    protected $MoveOut = null;

    /**
     * @var \DateTime $OriginalDueDate
     */
    protected $OriginalDueDate = null;

    /**
     * @var string $PhantomParent
     */
    protected $PhantomParent = null;

    /**
     * @var PlannedOrderKey $PlannedOrderKey
     */
    protected $PlannedOrderKey = null;

    /**
     * @var Quantity $RequiredByOpenMO
     */
    protected $RequiredByOpenMO = null;

    /**
     * @var Quantity $RequiredByReleasedMO
     */
    protected $RequiredByReleasedMO = null;

    /**
     * @var int $SequenceNumber
     */
    protected $SequenceNumber = null;

    /**
     * @var PlannedOrderItemStatus $Status
     */
    protected $Status = null;

    /**
     * @var string $StatusDescription
     */
    protected $StatusDescription = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return Quantity
     */
    public function getAllocatedByOpenMO()
    {
      return $this->AllocatedByOpenMO;
    }

    /**
     * @param Quantity $AllocatedByOpenMO
     * @return PlannedOrderItem
     */
    public function setAllocatedByOpenMO($AllocatedByOpenMO)
    {
      $this->AllocatedByOpenMO = $AllocatedByOpenMO;
      return $this;
    }

    /**
     * @return Quantity
     */
    public function getAllocatedByReleasedMO()
    {
      return $this->AllocatedByReleasedMO;
    }

    /**
     * @param Quantity $AllocatedByReleasedMO
     * @return PlannedOrderItem
     */
    public function setAllocatedByReleasedMO($AllocatedByReleasedMO)
    {
      $this->AllocatedByReleasedMO = $AllocatedByReleasedMO;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getCanceled()
    {
      return $this->Canceled;
    }

    /**
     * @param boolean $Canceled
     * @return PlannedOrderItem
     */
    public function setCanceled($Canceled)
    {
      $this->Canceled = $Canceled;
      return $this;
    }

    /**
     * @return Quantity
     */
    public function getConsumedByOpenMO()
    {
      return $this->ConsumedByOpenMO;
    }

    /**
     * @param Quantity $ConsumedByOpenMO
     * @return PlannedOrderItem
     */
    public function setConsumedByOpenMO($ConsumedByOpenMO)
    {
      $this->ConsumedByOpenMO = $ConsumedByOpenMO;
      return $this;
    }

    /**
     * @return Quantity
     */
    public function getConsumedByReleasedMO()
    {
      return $this->ConsumedByReleasedMO;
    }

    /**
     * @param Quantity $ConsumedByReleasedMO
     * @return PlannedOrderItem
     */
    public function setConsumedByReleasedMO($ConsumedByReleasedMO)
    {
      $this->ConsumedByReleasedMO = $ConsumedByReleasedMO;
      return $this;
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
     * @return PlannedOrderItem
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
     * @return PlannedOrderItemExceptions
     */
    public function getExceptions()
    {
      return $this->Exceptions;
    }

    /**
     * @param PlannedOrderItemExceptions $Exceptions
     * @return PlannedOrderItem
     */
    public function setExceptions($Exceptions)
    {
      $this->Exceptions = $Exceptions;
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
     * @return PlannedOrderItem
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
     * @return PlannedOrderItem
     */
    public function setLocationKey($LocationKey)
    {
      $this->LocationKey = $LocationKey;
      return $this;
    }

    /**
     * @return PlannedOrderParentMRPType
     */
    public function getMRPParentType()
    {
      return $this->MRPParentType;
    }

    /**
     * @param PlannedOrderParentMRPType $MRPParentType
     * @return PlannedOrderItem
     */
    public function setMRPParentType($MRPParentType)
    {
      $this->MRPParentType = $MRPParentType;
      return $this;
    }

    /**
     * @return PlannedOrderMRPType
     */
    public function getMRPType()
    {
      return $this->MRPType;
    }

    /**
     * @param PlannedOrderMRPType $MRPType
     * @return PlannedOrderItem
     */
    public function setMRPType($MRPType)
    {
      $this->MRPType = $MRPType;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getMoveIn()
    {
      return $this->MoveIn;
    }

    /**
     * @param boolean $MoveIn
     * @return PlannedOrderItem
     */
    public function setMoveIn($MoveIn)
    {
      $this->MoveIn = $MoveIn;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getMoveOut()
    {
      return $this->MoveOut;
    }

    /**
     * @param boolean $MoveOut
     * @return PlannedOrderItem
     */
    public function setMoveOut($MoveOut)
    {
      $this->MoveOut = $MoveOut;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getOriginalDueDate()
    {
      if ($this->OriginalDueDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->OriginalDueDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $OriginalDueDate
     * @return PlannedOrderItem
     */
    public function setOriginalDueDate(\DateTime $OriginalDueDate = null)
    {
      if ($OriginalDueDate == null) {
       $this->OriginalDueDate = null;
      } else {
        $this->OriginalDueDate = $OriginalDueDate->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return string
     */
    public function getPhantomParent()
    {
      return $this->PhantomParent;
    }

    /**
     * @param string $PhantomParent
     * @return PlannedOrderItem
     */
    public function setPhantomParent($PhantomParent)
    {
      $this->PhantomParent = $PhantomParent;
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
     * @return PlannedOrderItem
     */
    public function setPlannedOrderKey($PlannedOrderKey)
    {
      $this->PlannedOrderKey = $PlannedOrderKey;
      return $this;
    }

    /**
     * @return Quantity
     */
    public function getRequiredByOpenMO()
    {
      return $this->RequiredByOpenMO;
    }

    /**
     * @param Quantity $RequiredByOpenMO
     * @return PlannedOrderItem
     */
    public function setRequiredByOpenMO($RequiredByOpenMO)
    {
      $this->RequiredByOpenMO = $RequiredByOpenMO;
      return $this;
    }

    /**
     * @return Quantity
     */
    public function getRequiredByReleasedMO()
    {
      return $this->RequiredByReleasedMO;
    }

    /**
     * @param Quantity $RequiredByReleasedMO
     * @return PlannedOrderItem
     */
    public function setRequiredByReleasedMO($RequiredByReleasedMO)
    {
      $this->RequiredByReleasedMO = $RequiredByReleasedMO;
      return $this;
    }

    /**
     * @return int
     */
    public function getSequenceNumber()
    {
      return $this->SequenceNumber;
    }

    /**
     * @param int $SequenceNumber
     * @return PlannedOrderItem
     */
    public function setSequenceNumber($SequenceNumber)
    {
      $this->SequenceNumber = $SequenceNumber;
      return $this;
    }

    /**
     * @return PlannedOrderItemStatus
     */
    public function getStatus()
    {
      return $this->Status;
    }

    /**
     * @param PlannedOrderItemStatus $Status
     * @return PlannedOrderItem
     */
    public function setStatus($Status)
    {
      $this->Status = $Status;
      return $this;
    }

    /**
     * @return string
     */
    public function getStatusDescription()
    {
      return $this->StatusDescription;
    }

    /**
     * @param string $StatusDescription
     * @return PlannedOrderItem
     */
    public function setStatusDescription($StatusDescription)
    {
      $this->StatusDescription = $StatusDescription;
      return $this;
    }

}
