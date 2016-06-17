<?php

class ManufacturingOrderDocument extends BusinessObject
{

    /**
     * @var Quantity $ActualDemand
     */
    protected $ActualDemand = null;

    /**
     * @var BOMCategory $BOMCategory
     */
    protected $BOMCategory = null;

    /**
     * @var string $BOMRevisionLevel
     */
    protected $BOMRevisionLevel = null;

    /**
     * @var ManufacturingOrderComponentCalculation $ComponentCalculation
     */
    protected $ComponentCalculation = null;

    /**
     * @var \DateTime $DateCompleted
     */
    protected $DateCompleted = null;

    /**
     * @var string $Description
     */
    protected $Description = null;

    /**
     * @var string $DrawFromSite
     */
    protected $DrawFromSite = null;

    /**
     * @var \DateTime $EndDate
     */
    protected $EndDate = null;

    /**
     * @var Quantity $EndingQty
     */
    protected $EndingQty = null;

    /**
     * @var boolean $IsArchivedMO
     */
    protected $IsArchivedMO = null;

    /**
     * @var boolean $IsQuickMO
     */
    protected $IsQuickMO = null;

    /**
     * @var ItemKey $ItemKey
     */
    protected $ItemKey = null;

    /**
     * @var \DateTime $LastModifiedDate
     */
    protected $LastModifiedDate = null;

    /**
     * @var string $LotNumber
     */
    protected $LotNumber = null;

    /**
     * @var ManufacturingOrderDocumentKey $ManufacturingOrderDocumentKey
     */
    protected $ManufacturingOrderDocumentKey = null;

    /**
     * @var string $Notes
     */
    protected $Notes = null;

    /**
     * @var ManufacturingOrderStatus $OrderStatus
     */
    protected $OrderStatus = null;

    /**
     * @var ManufacturingOrderOutSourced $OutSourced
     */
    protected $OutSourced = null;

    /**
     * @var string $PickNumber
     */
    protected $PickNumber = null;

    /**
     * @var string $PlanName
     */
    protected $PlanName = null;

    /**
     * @var string $PostToSite
     */
    protected $PostToSite = null;

    /**
     * @var ManufacturingOrderPriority $Priority
     */
    protected $Priority = null;

    /**
     * @var string $RoutingName
     */
    protected $RoutingName = null;

    /**
     * @var string $RoutingRevisionLevel
     */
    protected $RoutingRevisionLevel = null;

    /**
     * @var SchedulingMethod $ScheduleMethod
     */
    protected $ScheduleMethod = null;

    /**
     * @var string $SchedulingPreference
     */
    protected $SchedulingPreference = null;

    /**
     * @var \DateTime $StartDate
     */
    protected $StartDate = null;

    /**
     * @var Quantity $StartingQty
     */
    protected $StartingQty = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return Quantity
     */
    public function getActualDemand()
    {
      return $this->ActualDemand;
    }

    /**
     * @param Quantity $ActualDemand
     * @return ManufacturingOrderDocument
     */
    public function setActualDemand($ActualDemand)
    {
      $this->ActualDemand = $ActualDemand;
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
     * @return ManufacturingOrderDocument
     */
    public function setBOMCategory($BOMCategory)
    {
      $this->BOMCategory = $BOMCategory;
      return $this;
    }

    /**
     * @return string
     */
    public function getBOMRevisionLevel()
    {
      return $this->BOMRevisionLevel;
    }

    /**
     * @param string $BOMRevisionLevel
     * @return ManufacturingOrderDocument
     */
    public function setBOMRevisionLevel($BOMRevisionLevel)
    {
      $this->BOMRevisionLevel = $BOMRevisionLevel;
      return $this;
    }

    /**
     * @return ManufacturingOrderComponentCalculation
     */
    public function getComponentCalculation()
    {
      return $this->ComponentCalculation;
    }

    /**
     * @param ManufacturingOrderComponentCalculation $ComponentCalculation
     * @return ManufacturingOrderDocument
     */
    public function setComponentCalculation($ComponentCalculation)
    {
      $this->ComponentCalculation = $ComponentCalculation;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDateCompleted()
    {
      if ($this->DateCompleted == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->DateCompleted);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $DateCompleted
     * @return ManufacturingOrderDocument
     */
    public function setDateCompleted(\DateTime $DateCompleted = null)
    {
      if ($DateCompleted == null) {
       $this->DateCompleted = null;
      } else {
        $this->DateCompleted = $DateCompleted->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
      return $this->Description;
    }

    /**
     * @param string $Description
     * @return ManufacturingOrderDocument
     */
    public function setDescription($Description)
    {
      $this->Description = $Description;
      return $this;
    }

    /**
     * @return string
     */
    public function getDrawFromSite()
    {
      return $this->DrawFromSite;
    }

    /**
     * @param string $DrawFromSite
     * @return ManufacturingOrderDocument
     */
    public function setDrawFromSite($DrawFromSite)
    {
      $this->DrawFromSite = $DrawFromSite;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getEndDate()
    {
      if ($this->EndDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->EndDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $EndDate
     * @return ManufacturingOrderDocument
     */
    public function setEndDate(\DateTime $EndDate = null)
    {
      if ($EndDate == null) {
       $this->EndDate = null;
      } else {
        $this->EndDate = $EndDate->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return Quantity
     */
    public function getEndingQty()
    {
      return $this->EndingQty;
    }

    /**
     * @param Quantity $EndingQty
     * @return ManufacturingOrderDocument
     */
    public function setEndingQty($EndingQty)
    {
      $this->EndingQty = $EndingQty;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsArchivedMO()
    {
      return $this->IsArchivedMO;
    }

    /**
     * @param boolean $IsArchivedMO
     * @return ManufacturingOrderDocument
     */
    public function setIsArchivedMO($IsArchivedMO)
    {
      $this->IsArchivedMO = $IsArchivedMO;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsQuickMO()
    {
      return $this->IsQuickMO;
    }

    /**
     * @param boolean $IsQuickMO
     * @return ManufacturingOrderDocument
     */
    public function setIsQuickMO($IsQuickMO)
    {
      $this->IsQuickMO = $IsQuickMO;
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
     * @return ManufacturingOrderDocument
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
     * @return ManufacturingOrderDocument
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
     * @return string
     */
    public function getLotNumber()
    {
      return $this->LotNumber;
    }

    /**
     * @param string $LotNumber
     * @return ManufacturingOrderDocument
     */
    public function setLotNumber($LotNumber)
    {
      $this->LotNumber = $LotNumber;
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
     * @return ManufacturingOrderDocument
     */
    public function setManufacturingOrderDocumentKey($ManufacturingOrderDocumentKey)
    {
      $this->ManufacturingOrderDocumentKey = $ManufacturingOrderDocumentKey;
      return $this;
    }

    /**
     * @return string
     */
    public function getNotes()
    {
      return $this->Notes;
    }

    /**
     * @param string $Notes
     * @return ManufacturingOrderDocument
     */
    public function setNotes($Notes)
    {
      $this->Notes = $Notes;
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
     * @return ManufacturingOrderDocument
     */
    public function setOrderStatus($OrderStatus)
    {
      $this->OrderStatus = $OrderStatus;
      return $this;
    }

    /**
     * @return ManufacturingOrderOutSourced
     */
    public function getOutSourced()
    {
      return $this->OutSourced;
    }

    /**
     * @param ManufacturingOrderOutSourced $OutSourced
     * @return ManufacturingOrderDocument
     */
    public function setOutSourced($OutSourced)
    {
      $this->OutSourced = $OutSourced;
      return $this;
    }

    /**
     * @return string
     */
    public function getPickNumber()
    {
      return $this->PickNumber;
    }

    /**
     * @param string $PickNumber
     * @return ManufacturingOrderDocument
     */
    public function setPickNumber($PickNumber)
    {
      $this->PickNumber = $PickNumber;
      return $this;
    }

    /**
     * @return string
     */
    public function getPlanName()
    {
      return $this->PlanName;
    }

    /**
     * @param string $PlanName
     * @return ManufacturingOrderDocument
     */
    public function setPlanName($PlanName)
    {
      $this->PlanName = $PlanName;
      return $this;
    }

    /**
     * @return string
     */
    public function getPostToSite()
    {
      return $this->PostToSite;
    }

    /**
     * @param string $PostToSite
     * @return ManufacturingOrderDocument
     */
    public function setPostToSite($PostToSite)
    {
      $this->PostToSite = $PostToSite;
      return $this;
    }

    /**
     * @return ManufacturingOrderPriority
     */
    public function getPriority()
    {
      return $this->Priority;
    }

    /**
     * @param ManufacturingOrderPriority $Priority
     * @return ManufacturingOrderDocument
     */
    public function setPriority($Priority)
    {
      $this->Priority = $Priority;
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
     * @return ManufacturingOrderDocument
     */
    public function setRoutingName($RoutingName)
    {
      $this->RoutingName = $RoutingName;
      return $this;
    }

    /**
     * @return string
     */
    public function getRoutingRevisionLevel()
    {
      return $this->RoutingRevisionLevel;
    }

    /**
     * @param string $RoutingRevisionLevel
     * @return ManufacturingOrderDocument
     */
    public function setRoutingRevisionLevel($RoutingRevisionLevel)
    {
      $this->RoutingRevisionLevel = $RoutingRevisionLevel;
      return $this;
    }

    /**
     * @return SchedulingMethod
     */
    public function getScheduleMethod()
    {
      return $this->ScheduleMethod;
    }

    /**
     * @param SchedulingMethod $ScheduleMethod
     * @return ManufacturingOrderDocument
     */
    public function setScheduleMethod($ScheduleMethod)
    {
      $this->ScheduleMethod = $ScheduleMethod;
      return $this;
    }

    /**
     * @return string
     */
    public function getSchedulingPreference()
    {
      return $this->SchedulingPreference;
    }

    /**
     * @param string $SchedulingPreference
     * @return ManufacturingOrderDocument
     */
    public function setSchedulingPreference($SchedulingPreference)
    {
      $this->SchedulingPreference = $SchedulingPreference;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getStartDate()
    {
      if ($this->StartDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->StartDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $StartDate
     * @return ManufacturingOrderDocument
     */
    public function setStartDate(\DateTime $StartDate = null)
    {
      if ($StartDate == null) {
       $this->StartDate = null;
      } else {
        $this->StartDate = $StartDate->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return Quantity
     */
    public function getStartingQty()
    {
      return $this->StartingQty;
    }

    /**
     * @param Quantity $StartingQty
     * @return ManufacturingOrderDocument
     */
    public function setStartingQty($StartingQty)
    {
      $this->StartingQty = $StartingQty;
      return $this;
    }

}
