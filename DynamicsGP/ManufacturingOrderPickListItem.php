<?php

class ManufacturingOrderPickListItem
{

    /**
     * @var Quantity $ActualConsumedQty
     */
    protected $ActualConsumedQty = null;

    /**
     * @var string $AllocatedBy
     */
    protected $AllocatedBy = null;

    /**
     * @var Quantity $AllocatedQty
     */
    protected $AllocatedQty = null;

    /**
     * @var Quantity $AllowedQty
     */
    protected $AllowedQty = null;

    /**
     * @var ItemKey $AlternateItemFor
     */
    protected $AlternateItemFor = null;

    /**
     * @var int $AlternateItemSequence
     */
    protected $AlternateItemSequence = null;

    /**
     * @var BOMCategory $BOMCategory
     */
    protected $BOMCategory = null;

    /**
     * @var string $BOMName
     */
    protected $BOMName = null;

    /**
     * @var int $BOMSequence
     */
    protected $BOMSequence = null;

    /**
     * @var string $BOMUserDef1
     */
    protected $BOMUserDef1 = null;

    /**
     * @var string $BOMUserDef2
     */
    protected $BOMUserDef2 = null;

    /**
     * @var Quantity $BackFlushedQty
     */
    protected $BackFlushedQty = null;

    /**
     * @var Quantity $BaseUOMQty
     */
    protected $BaseUOMQty = null;

    /**
     * @var Quantity $CurrentConsumedQty
     */
    protected $CurrentConsumedQty = null;

    /**
     * @var Quantity $CurrentReturnToStockQty
     */
    protected $CurrentReturnToStockQty = null;

    /**
     * @var Quantity $CurrentScrappedQty
     */
    protected $CurrentScrappedQty = null;

    /**
     * @var \DateTime $DateAllocated
     */
    protected $DateAllocated = null;

    /**
     * @var \DateTime $DateRequired
     */
    protected $DateRequired = null;

    /**
     * @var \DateTime $DateResourcePlanIssued
     */
    protected $DateResourcePlanIssued = null;

    /**
     * @var Quantity $ExplodedQty
     */
    protected $ExplodedQty = null;

    /**
     * @var Quantity $FixedQty
     */
    protected $FixedQty = null;

    /**
     * @var boolean $IsActualConsumedChecked
     */
    protected $IsActualConsumedChecked = null;

    /**
     * @var boolean $IsAllocated
     */
    protected $IsAllocated = null;

    /**
     * @var boolean $IsAlternateItem
     */
    protected $IsAlternateItem = null;

    /**
     * @var boolean $IsBOMApproved
     */
    protected $IsBOMApproved = null;

    /**
     * @var boolean $IsBOMSingleLot
     */
    protected $IsBOMSingleLot = null;

    /**
     * @var boolean $IsBackFlushed
     */
    protected $IsBackFlushed = null;

    /**
     * @var boolean $IsBackOrdered
     */
    protected $IsBackOrdered = null;

    /**
     * @var boolean $IsFloorStock
     */
    protected $IsFloorStock = null;

    /**
     * @var boolean $IsIssued
     */
    protected $IsIssued = null;

    /**
     * @var boolean $IsOptionedItem
     */
    protected $IsOptionedItem = null;

    /**
     * @var boolean $IsPhantomItem
     */
    protected $IsPhantomItem = null;

    /**
     * @var boolean $IsResourcePlanCalculated
     */
    protected $IsResourcePlanCalculated = null;

    /**
     * @var boolean $IsSubAssemblyItem
     */
    protected $IsSubAssemblyItem = null;

    /**
     * @var string $IssuedBy
     */
    protected $IssuedBy = null;

    /**
     * @var Quantity $IssuedQty
     */
    protected $IssuedQty = null;

    /**
     * @var ItemKey $ItemKey
     */
    protected $ItemKey = null;

    /**
     * @var \DateTime $LastModifiedDate
     */
    protected $LastModifiedDate = null;

    /**
     * @var float $LeadTimeOffset
     */
    protected $LeadTimeOffset = null;

    /**
     * @var int $LinkToSequence
     */
    protected $LinkToSequence = null;

    /**
     * @var string $Location
     */
    protected $Location = null;

    /**
     * @var MoneyAmount $MRPAmount
     */
    protected $MRPAmount = null;

    /**
     * @var MoneyAmount $MRPAmount2
     */
    protected $MRPAmount2 = null;

    /**
     * @var string $ManufacturingNote
     */
    protected $ManufacturingNote = null;

    /**
     * @var ManufacturingOrderDocumentKey $ManufacturingOrderDocumentKey
     */
    protected $ManufacturingOrderDocumentKey = null;

    /**
     * @var MoneyAmount $MarkdownAmt
     */
    protected $MarkdownAmt = null;

    /**
     * @var int $NonInventoryCreditIndex
     */
    protected $NonInventoryCreditIndex = null;

    /**
     * @var string $NonInventoryItemDescription
     */
    protected $NonInventoryItemDescription = null;

    /**
     * @var float $OffsetFrom
     */
    protected $OffsetFrom = null;

    /**
     * @var ManufacturingOrderStatus $OrderStatus
     */
    protected $OrderStatus = null;

    /**
     * @var PurchaseTransactionLineKey $POLine
     */
    protected $POLine = null;

    /**
     * @var ItemKey $ParentPartNumber
     */
    protected $ParentPartNumber = null;

    /**
     * @var int $PositionNumber
     */
    protected $PositionNumber = null;

    /**
     * @var int $PositionNumber2
     */
    protected $PositionNumber2 = null;

    /**
     * @var string $Promotion
     */
    protected $Promotion = null;

    /**
     * @var MoneyAmount $RefillCost
     */
    protected $RefillCost = null;

    /**
     * @var Quantity $ReturnToStockQty
     */
    protected $ReturnToStockQty = null;

    /**
     * @var string $RoutingName
     */
    protected $RoutingName = null;

    /**
     * @var string $RoutingSequence
     */
    protected $RoutingSequence = null;

    /**
     * @var Quantity $ScrappedQty
     */
    protected $ScrappedQty = null;

    /**
     * @var int $Sequence
     */
    protected $Sequence = null;

    /**
     * @var ItemKey $SubAssemblyItemFor
     */
    protected $SubAssemblyItemFor = null;

    /**
     * @var int $SubAssemblyItemSequence
     */
    protected $SubAssemblyItemSequence = null;

    /**
     * @var Quantity $SuggestedQty
     */
    protected $SuggestedQty = null;

    /**
     * @var MoneyAmount $UnitCost
     */
    protected $UnitCost = null;

    /**
     * @var string $UofM
     */
    protected $UofM = null;

    /**
     * @var VendorKey $VendorKey
     */
    protected $VendorKey = null;

    /**
     * @var string $VendorName
     */
    protected $VendorName = null;

    /**
     * @var string $WorkCenter
     */
    protected $WorkCenter = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return Quantity
     */
    public function getActualConsumedQty()
    {
      return $this->ActualConsumedQty;
    }

    /**
     * @param Quantity $ActualConsumedQty
     * @return ManufacturingOrderPickListItem
     */
    public function setActualConsumedQty($ActualConsumedQty)
    {
      $this->ActualConsumedQty = $ActualConsumedQty;
      return $this;
    }

    /**
     * @return string
     */
    public function getAllocatedBy()
    {
      return $this->AllocatedBy;
    }

    /**
     * @param string $AllocatedBy
     * @return ManufacturingOrderPickListItem
     */
    public function setAllocatedBy($AllocatedBy)
    {
      $this->AllocatedBy = $AllocatedBy;
      return $this;
    }

    /**
     * @return Quantity
     */
    public function getAllocatedQty()
    {
      return $this->AllocatedQty;
    }

    /**
     * @param Quantity $AllocatedQty
     * @return ManufacturingOrderPickListItem
     */
    public function setAllocatedQty($AllocatedQty)
    {
      $this->AllocatedQty = $AllocatedQty;
      return $this;
    }

    /**
     * @return Quantity
     */
    public function getAllowedQty()
    {
      return $this->AllowedQty;
    }

    /**
     * @param Quantity $AllowedQty
     * @return ManufacturingOrderPickListItem
     */
    public function setAllowedQty($AllowedQty)
    {
      $this->AllowedQty = $AllowedQty;
      return $this;
    }

    /**
     * @return ItemKey
     */
    public function getAlternateItemFor()
    {
      return $this->AlternateItemFor;
    }

    /**
     * @param ItemKey $AlternateItemFor
     * @return ManufacturingOrderPickListItem
     */
    public function setAlternateItemFor($AlternateItemFor)
    {
      $this->AlternateItemFor = $AlternateItemFor;
      return $this;
    }

    /**
     * @return int
     */
    public function getAlternateItemSequence()
    {
      return $this->AlternateItemSequence;
    }

    /**
     * @param int $AlternateItemSequence
     * @return ManufacturingOrderPickListItem
     */
    public function setAlternateItemSequence($AlternateItemSequence)
    {
      $this->AlternateItemSequence = $AlternateItemSequence;
      return $this;
    }

    /**
     * @return BOMCategory
     */
    public function getBOMCategory()
    {
      return $this->BOMCategory;
    }

    /**
     * @param BOMCategory $BOMCategory
     * @return ManufacturingOrderPickListItem
     */
    public function setBOMCategory($BOMCategory)
    {
      $this->BOMCategory = $BOMCategory;
      return $this;
    }

    /**
     * @return string
     */
    public function getBOMName()
    {
      return $this->BOMName;
    }

    /**
     * @param string $BOMName
     * @return ManufacturingOrderPickListItem
     */
    public function setBOMName($BOMName)
    {
      $this->BOMName = $BOMName;
      return $this;
    }

    /**
     * @return int
     */
    public function getBOMSequence()
    {
      return $this->BOMSequence;
    }

    /**
     * @param int $BOMSequence
     * @return ManufacturingOrderPickListItem
     */
    public function setBOMSequence($BOMSequence)
    {
      $this->BOMSequence = $BOMSequence;
      return $this;
    }

    /**
     * @return string
     */
    public function getBOMUserDef1()
    {
      return $this->BOMUserDef1;
    }

    /**
     * @param string $BOMUserDef1
     * @return ManufacturingOrderPickListItem
     */
    public function setBOMUserDef1($BOMUserDef1)
    {
      $this->BOMUserDef1 = $BOMUserDef1;
      return $this;
    }

    /**
     * @return string
     */
    public function getBOMUserDef2()
    {
      return $this->BOMUserDef2;
    }

    /**
     * @param string $BOMUserDef2
     * @return ManufacturingOrderPickListItem
     */
    public function setBOMUserDef2($BOMUserDef2)
    {
      $this->BOMUserDef2 = $BOMUserDef2;
      return $this;
    }

    /**
     * @return Quantity
     */
    public function getBackFlushedQty()
    {
      return $this->BackFlushedQty;
    }

    /**
     * @param Quantity $BackFlushedQty
     * @return ManufacturingOrderPickListItem
     */
    public function setBackFlushedQty($BackFlushedQty)
    {
      $this->BackFlushedQty = $BackFlushedQty;
      return $this;
    }

    /**
     * @return Quantity
     */
    public function getBaseUOMQty()
    {
      return $this->BaseUOMQty;
    }

    /**
     * @param Quantity $BaseUOMQty
     * @return ManufacturingOrderPickListItem
     */
    public function setBaseUOMQty($BaseUOMQty)
    {
      $this->BaseUOMQty = $BaseUOMQty;
      return $this;
    }

    /**
     * @return Quantity
     */
    public function getCurrentConsumedQty()
    {
      return $this->CurrentConsumedQty;
    }

    /**
     * @param Quantity $CurrentConsumedQty
     * @return ManufacturingOrderPickListItem
     */
    public function setCurrentConsumedQty($CurrentConsumedQty)
    {
      $this->CurrentConsumedQty = $CurrentConsumedQty;
      return $this;
    }

    /**
     * @return Quantity
     */
    public function getCurrentReturnToStockQty()
    {
      return $this->CurrentReturnToStockQty;
    }

    /**
     * @param Quantity $CurrentReturnToStockQty
     * @return ManufacturingOrderPickListItem
     */
    public function setCurrentReturnToStockQty($CurrentReturnToStockQty)
    {
      $this->CurrentReturnToStockQty = $CurrentReturnToStockQty;
      return $this;
    }

    /**
     * @return Quantity
     */
    public function getCurrentScrappedQty()
    {
      return $this->CurrentScrappedQty;
    }

    /**
     * @param Quantity $CurrentScrappedQty
     * @return ManufacturingOrderPickListItem
     */
    public function setCurrentScrappedQty($CurrentScrappedQty)
    {
      $this->CurrentScrappedQty = $CurrentScrappedQty;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDateAllocated()
    {
      if ($this->DateAllocated == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->DateAllocated);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $DateAllocated
     * @return ManufacturingOrderPickListItem
     */
    public function setDateAllocated(\DateTime $DateAllocated = null)
    {
      if ($DateAllocated == null) {
       $this->DateAllocated = null;
      } else {
        $this->DateAllocated = $DateAllocated->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDateRequired()
    {
      if ($this->DateRequired == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->DateRequired);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $DateRequired
     * @return ManufacturingOrderPickListItem
     */
    public function setDateRequired(\DateTime $DateRequired = null)
    {
      if ($DateRequired == null) {
       $this->DateRequired = null;
      } else {
        $this->DateRequired = $DateRequired->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDateResourcePlanIssued()
    {
      if ($this->DateResourcePlanIssued == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->DateResourcePlanIssued);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $DateResourcePlanIssued
     * @return ManufacturingOrderPickListItem
     */
    public function setDateResourcePlanIssued(\DateTime $DateResourcePlanIssued = null)
    {
      if ($DateResourcePlanIssued == null) {
       $this->DateResourcePlanIssued = null;
      } else {
        $this->DateResourcePlanIssued = $DateResourcePlanIssued->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return Quantity
     */
    public function getExplodedQty()
    {
      return $this->ExplodedQty;
    }

    /**
     * @param Quantity $ExplodedQty
     * @return ManufacturingOrderPickListItem
     */
    public function setExplodedQty($ExplodedQty)
    {
      $this->ExplodedQty = $ExplodedQty;
      return $this;
    }

    /**
     * @return Quantity
     */
    public function getFixedQty()
    {
      return $this->FixedQty;
    }

    /**
     * @param Quantity $FixedQty
     * @return ManufacturingOrderPickListItem
     */
    public function setFixedQty($FixedQty)
    {
      $this->FixedQty = $FixedQty;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsActualConsumedChecked()
    {
      return $this->IsActualConsumedChecked;
    }

    /**
     * @param boolean $IsActualConsumedChecked
     * @return ManufacturingOrderPickListItem
     */
    public function setIsActualConsumedChecked($IsActualConsumedChecked)
    {
      $this->IsActualConsumedChecked = $IsActualConsumedChecked;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsAllocated()
    {
      return $this->IsAllocated;
    }

    /**
     * @param boolean $IsAllocated
     * @return ManufacturingOrderPickListItem
     */
    public function setIsAllocated($IsAllocated)
    {
      $this->IsAllocated = $IsAllocated;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsAlternateItem()
    {
      return $this->IsAlternateItem;
    }

    /**
     * @param boolean $IsAlternateItem
     * @return ManufacturingOrderPickListItem
     */
    public function setIsAlternateItem($IsAlternateItem)
    {
      $this->IsAlternateItem = $IsAlternateItem;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsBOMApproved()
    {
      return $this->IsBOMApproved;
    }

    /**
     * @param boolean $IsBOMApproved
     * @return ManufacturingOrderPickListItem
     */
    public function setIsBOMApproved($IsBOMApproved)
    {
      $this->IsBOMApproved = $IsBOMApproved;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsBOMSingleLot()
    {
      return $this->IsBOMSingleLot;
    }

    /**
     * @param boolean $IsBOMSingleLot
     * @return ManufacturingOrderPickListItem
     */
    public function setIsBOMSingleLot($IsBOMSingleLot)
    {
      $this->IsBOMSingleLot = $IsBOMSingleLot;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsBackFlushed()
    {
      return $this->IsBackFlushed;
    }

    /**
     * @param boolean $IsBackFlushed
     * @return ManufacturingOrderPickListItem
     */
    public function setIsBackFlushed($IsBackFlushed)
    {
      $this->IsBackFlushed = $IsBackFlushed;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsBackOrdered()
    {
      return $this->IsBackOrdered;
    }

    /**
     * @param boolean $IsBackOrdered
     * @return ManufacturingOrderPickListItem
     */
    public function setIsBackOrdered($IsBackOrdered)
    {
      $this->IsBackOrdered = $IsBackOrdered;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsFloorStock()
    {
      return $this->IsFloorStock;
    }

    /**
     * @param boolean $IsFloorStock
     * @return ManufacturingOrderPickListItem
     */
    public function setIsFloorStock($IsFloorStock)
    {
      $this->IsFloorStock = $IsFloorStock;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsIssued()
    {
      return $this->IsIssued;
    }

    /**
     * @param boolean $IsIssued
     * @return ManufacturingOrderPickListItem
     */
    public function setIsIssued($IsIssued)
    {
      $this->IsIssued = $IsIssued;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsOptionedItem()
    {
      return $this->IsOptionedItem;
    }

    /**
     * @param boolean $IsOptionedItem
     * @return ManufacturingOrderPickListItem
     */
    public function setIsOptionedItem($IsOptionedItem)
    {
      $this->IsOptionedItem = $IsOptionedItem;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsPhantomItem()
    {
      return $this->IsPhantomItem;
    }

    /**
     * @param boolean $IsPhantomItem
     * @return ManufacturingOrderPickListItem
     */
    public function setIsPhantomItem($IsPhantomItem)
    {
      $this->IsPhantomItem = $IsPhantomItem;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsResourcePlanCalculated()
    {
      return $this->IsResourcePlanCalculated;
    }

    /**
     * @param boolean $IsResourcePlanCalculated
     * @return ManufacturingOrderPickListItem
     */
    public function setIsResourcePlanCalculated($IsResourcePlanCalculated)
    {
      $this->IsResourcePlanCalculated = $IsResourcePlanCalculated;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsSubAssemblyItem()
    {
      return $this->IsSubAssemblyItem;
    }

    /**
     * @param boolean $IsSubAssemblyItem
     * @return ManufacturingOrderPickListItem
     */
    public function setIsSubAssemblyItem($IsSubAssemblyItem)
    {
      $this->IsSubAssemblyItem = $IsSubAssemblyItem;
      return $this;
    }

    /**
     * @return string
     */
    public function getIssuedBy()
    {
      return $this->IssuedBy;
    }

    /**
     * @param string $IssuedBy
     * @return ManufacturingOrderPickListItem
     */
    public function setIssuedBy($IssuedBy)
    {
      $this->IssuedBy = $IssuedBy;
      return $this;
    }

    /**
     * @return Quantity
     */
    public function getIssuedQty()
    {
      return $this->IssuedQty;
    }

    /**
     * @param Quantity $IssuedQty
     * @return ManufacturingOrderPickListItem
     */
    public function setIssuedQty($IssuedQty)
    {
      $this->IssuedQty = $IssuedQty;
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
     * @return ManufacturingOrderPickListItem
     */
    public function setItemKey($ItemKey)
    {
      $this->ItemKey = $ItemKey;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getLastModifiedDate()
    {
      if ($this->LastModifiedDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->LastModifiedDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $LastModifiedDate
     * @return ManufacturingOrderPickListItem
     */
    public function setLastModifiedDate(\DateTime $LastModifiedDate = null)
    {
      if ($LastModifiedDate == null) {
       $this->LastModifiedDate = null;
      } else {
        $this->LastModifiedDate = $LastModifiedDate->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return float
     */
    public function getLeadTimeOffset()
    {
      return $this->LeadTimeOffset;
    }

    /**
     * @param float $LeadTimeOffset
     * @return ManufacturingOrderPickListItem
     */
    public function setLeadTimeOffset($LeadTimeOffset)
    {
      $this->LeadTimeOffset = $LeadTimeOffset;
      return $this;
    }

    /**
     * @return int
     */
    public function getLinkToSequence()
    {
      return $this->LinkToSequence;
    }

    /**
     * @param int $LinkToSequence
     * @return ManufacturingOrderPickListItem
     */
    public function setLinkToSequence($LinkToSequence)
    {
      $this->LinkToSequence = $LinkToSequence;
      return $this;
    }

    /**
     * @return string
     */
    public function getLocation()
    {
      return $this->Location;
    }

    /**
     * @param string $Location
     * @return ManufacturingOrderPickListItem
     */
    public function setLocation($Location)
    {
      $this->Location = $Location;
      return $this;
    }

    /**
     * @return MoneyAmount
     */
    public function getMRPAmount()
    {
      return $this->MRPAmount;
    }

    /**
     * @param MoneyAmount $MRPAmount
     * @return ManufacturingOrderPickListItem
     */
    public function setMRPAmount($MRPAmount)
    {
      $this->MRPAmount = $MRPAmount;
      return $this;
    }

    /**
     * @return MoneyAmount
     */
    public function getMRPAmount2()
    {
      return $this->MRPAmount2;
    }

    /**
     * @param MoneyAmount $MRPAmount2
     * @return ManufacturingOrderPickListItem
     */
    public function setMRPAmount2($MRPAmount2)
    {
      $this->MRPAmount2 = $MRPAmount2;
      return $this;
    }

    /**
     * @return string
     */
    public function getManufacturingNote()
    {
      return $this->ManufacturingNote;
    }

    /**
     * @param string $ManufacturingNote
     * @return ManufacturingOrderPickListItem
     */
    public function setManufacturingNote($ManufacturingNote)
    {
      $this->ManufacturingNote = $ManufacturingNote;
      return $this;
    }

    /**
     * @return ManufacturingOrderDocumentKey
     */
    public function getManufacturingOrderDocumentKey()
    {
      return $this->ManufacturingOrderDocumentKey;
    }

    /**
     * @param ManufacturingOrderDocumentKey $ManufacturingOrderDocumentKey
     * @return ManufacturingOrderPickListItem
     */
    public function setManufacturingOrderDocumentKey($ManufacturingOrderDocumentKey)
    {
      $this->ManufacturingOrderDocumentKey = $ManufacturingOrderDocumentKey;
      return $this;
    }

    /**
     * @return MoneyAmount
     */
    public function getMarkdownAmt()
    {
      return $this->MarkdownAmt;
    }

    /**
     * @param MoneyAmount $MarkdownAmt
     * @return ManufacturingOrderPickListItem
     */
    public function setMarkdownAmt($MarkdownAmt)
    {
      $this->MarkdownAmt = $MarkdownAmt;
      return $this;
    }

    /**
     * @return int
     */
    public function getNonInventoryCreditIndex()
    {
      return $this->NonInventoryCreditIndex;
    }

    /**
     * @param int $NonInventoryCreditIndex
     * @return ManufacturingOrderPickListItem
     */
    public function setNonInventoryCreditIndex($NonInventoryCreditIndex)
    {
      $this->NonInventoryCreditIndex = $NonInventoryCreditIndex;
      return $this;
    }

    /**
     * @return string
     */
    public function getNonInventoryItemDescription()
    {
      return $this->NonInventoryItemDescription;
    }

    /**
     * @param string $NonInventoryItemDescription
     * @return ManufacturingOrderPickListItem
     */
    public function setNonInventoryItemDescription($NonInventoryItemDescription)
    {
      $this->NonInventoryItemDescription = $NonInventoryItemDescription;
      return $this;
    }

    /**
     * @return float
     */
    public function getOffsetFrom()
    {
      return $this->OffsetFrom;
    }

    /**
     * @param float $OffsetFrom
     * @return ManufacturingOrderPickListItem
     */
    public function setOffsetFrom($OffsetFrom)
    {
      $this->OffsetFrom = $OffsetFrom;
      return $this;
    }

    /**
     * @return ManufacturingOrderStatus
     */
    public function getOrderStatus()
    {
      return $this->OrderStatus;
    }

    /**
     * @param ManufacturingOrderStatus $OrderStatus
     * @return ManufacturingOrderPickListItem
     */
    public function setOrderStatus($OrderStatus)
    {
      $this->OrderStatus = $OrderStatus;
      return $this;
    }

    /**
     * @return PurchaseTransactionLineKey
     */
    public function getPOLine()
    {
      return $this->POLine;
    }

    /**
     * @param PurchaseTransactionLineKey $POLine
     * @return ManufacturingOrderPickListItem
     */
    public function setPOLine($POLine)
    {
      $this->POLine = $POLine;
      return $this;
    }

    /**
     * @return ItemKey
     */
    public function getParentPartNumber()
    {
      return $this->ParentPartNumber;
    }

    /**
     * @param ItemKey $ParentPartNumber
     * @return ManufacturingOrderPickListItem
     */
    public function setParentPartNumber($ParentPartNumber)
    {
      $this->ParentPartNumber = $ParentPartNumber;
      return $this;
    }

    /**
     * @return int
     */
    public function getPositionNumber()
    {
      return $this->PositionNumber;
    }

    /**
     * @param int $PositionNumber
     * @return ManufacturingOrderPickListItem
     */
    public function setPositionNumber($PositionNumber)
    {
      $this->PositionNumber = $PositionNumber;
      return $this;
    }

    /**
     * @return int
     */
    public function getPositionNumber2()
    {
      return $this->PositionNumber2;
    }

    /**
     * @param int $PositionNumber2
     * @return ManufacturingOrderPickListItem
     */
    public function setPositionNumber2($PositionNumber2)
    {
      $this->PositionNumber2 = $PositionNumber2;
      return $this;
    }

    /**
     * @return string
     */
    public function getPromotion()
    {
      return $this->Promotion;
    }

    /**
     * @param string $Promotion
     * @return ManufacturingOrderPickListItem
     */
    public function setPromotion($Promotion)
    {
      $this->Promotion = $Promotion;
      return $this;
    }

    /**
     * @return MoneyAmount
     */
    public function getRefillCost()
    {
      return $this->RefillCost;
    }

    /**
     * @param MoneyAmount $RefillCost
     * @return ManufacturingOrderPickListItem
     */
    public function setRefillCost($RefillCost)
    {
      $this->RefillCost = $RefillCost;
      return $this;
    }

    /**
     * @return Quantity
     */
    public function getReturnToStockQty()
    {
      return $this->ReturnToStockQty;
    }

    /**
     * @param Quantity $ReturnToStockQty
     * @return ManufacturingOrderPickListItem
     */
    public function setReturnToStockQty($ReturnToStockQty)
    {
      $this->ReturnToStockQty = $ReturnToStockQty;
      return $this;
    }

    /**
     * @return string
     */
    public function getRoutingName()
    {
      return $this->RoutingName;
    }

    /**
     * @param string $RoutingName
     * @return ManufacturingOrderPickListItem
     */
    public function setRoutingName($RoutingName)
    {
      $this->RoutingName = $RoutingName;
      return $this;
    }

    /**
     * @return string
     */
    public function getRoutingSequence()
    {
      return $this->RoutingSequence;
    }

    /**
     * @param string $RoutingSequence
     * @return ManufacturingOrderPickListItem
     */
    public function setRoutingSequence($RoutingSequence)
    {
      $this->RoutingSequence = $RoutingSequence;
      return $this;
    }

    /**
     * @return Quantity
     */
    public function getScrappedQty()
    {
      return $this->ScrappedQty;
    }

    /**
     * @param Quantity $ScrappedQty
     * @return ManufacturingOrderPickListItem
     */
    public function setScrappedQty($ScrappedQty)
    {
      $this->ScrappedQty = $ScrappedQty;
      return $this;
    }

    /**
     * @return int
     */
    public function getSequence()
    {
      return $this->Sequence;
    }

    /**
     * @param int $Sequence
     * @return ManufacturingOrderPickListItem
     */
    public function setSequence($Sequence)
    {
      $this->Sequence = $Sequence;
      return $this;
    }

    /**
     * @return ItemKey
     */
    public function getSubAssemblyItemFor()
    {
      return $this->SubAssemblyItemFor;
    }

    /**
     * @param ItemKey $SubAssemblyItemFor
     * @return ManufacturingOrderPickListItem
     */
    public function setSubAssemblyItemFor($SubAssemblyItemFor)
    {
      $this->SubAssemblyItemFor = $SubAssemblyItemFor;
      return $this;
    }

    /**
     * @return int
     */
    public function getSubAssemblyItemSequence()
    {
      return $this->SubAssemblyItemSequence;
    }

    /**
     * @param int $SubAssemblyItemSequence
     * @return ManufacturingOrderPickListItem
     */
    public function setSubAssemblyItemSequence($SubAssemblyItemSequence)
    {
      $this->SubAssemblyItemSequence = $SubAssemblyItemSequence;
      return $this;
    }

    /**
     * @return Quantity
     */
    public function getSuggestedQty()
    {
      return $this->SuggestedQty;
    }

    /**
     * @param Quantity $SuggestedQty
     * @return ManufacturingOrderPickListItem
     */
    public function setSuggestedQty($SuggestedQty)
    {
      $this->SuggestedQty = $SuggestedQty;
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
     * @return ManufacturingOrderPickListItem
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
     * @return ManufacturingOrderPickListItem
     */
    public function setUofM($UofM)
    {
      $this->UofM = $UofM;
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
     * @return ManufacturingOrderPickListItem
     */
    public function setVendorKey($VendorKey)
    {
      $this->VendorKey = $VendorKey;
      return $this;
    }

    /**
     * @return string
     */
    public function getVendorName()
    {
      return $this->VendorName;
    }

    /**
     * @param string $VendorName
     * @return ManufacturingOrderPickListItem
     */
    public function setVendorName($VendorName)
    {
      $this->VendorName = $VendorName;
      return $this;
    }

    /**
     * @return string
     */
    public function getWorkCenter()
    {
      return $this->WorkCenter;
    }

    /**
     * @param string $WorkCenter
     * @return ManufacturingOrderPickListItem
     */
    public function setWorkCenter($WorkCenter)
    {
      $this->WorkCenter = $WorkCenter;
      return $this;
    }

}
