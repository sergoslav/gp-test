<?php

class ManufacturingOrderRouteStep
{

    /**
     * @var \DateTime $ActualFinishDate
     */
    protected $ActualFinishDate = null;

    /**
     * @var \DateTime $ActualStartDate
     */
    protected $ActualStartDate = null;

    /**
     * @var string $ClosedBy
     */
    protected $ClosedBy = null;

    /**
     * @var float $CycleTime
     */
    protected $CycleTime = null;

    /**
     * @var \DateTime $DateClosed
     */
    protected $DateClosed = null;

    /**
     * @var \DateTime $DateCreated
     */
    protected $DateCreated = null;

    /**
     * @var string $DrawingNumber
     */
    protected $DrawingNumber = null;

    /**
     * @var boolean $IsAutoBackFlushLabor
     */
    protected $IsAutoBackFlushLabor = null;

    /**
     * @var boolean $IsAutoBackFlushMachine
     */
    protected $IsAutoBackFlushMachine = null;

    /**
     * @var boolean $IsCapacityRequirementsPlanned
     */
    protected $IsCapacityRequirementsPlanned = null;

    /**
     * @var boolean $IsDone
     */
    protected $IsDone = null;

    /**
     * @var boolean $IsLastSequenceofTheDay
     */
    protected $IsLastSequenceofTheDay = null;

    /**
     * @var boolean $IsMultiEmployeeOperation
     */
    protected $IsMultiEmployeeOperation = null;

    /**
     * @var boolean $IsPhantomItem
     */
    protected $IsPhantomItem = null;

    /**
     * @var boolean $IsQualityAssuranceNeeded
     */
    protected $IsQualityAssuranceNeeded = null;

    /**
     * @var string $LaborCode_1
     */
    protected $LaborCode_1 = null;

    /**
     * @var string $LaborCode_2
     */
    protected $LaborCode_2 = null;

    /**
     * @var float $LaborTime
     */
    protected $LaborTime = null;

    /**
     * @var \DateTime $LastModifiedDate
     */
    protected $LastModifiedDate = null;

    /**
     * @var MoneyAmount $MRPAmount
     */
    protected $MRPAmount = null;

    /**
     * @var string $MachineId
     */
    protected $MachineId = null;

    /**
     * @var float $MachineTime
     */
    protected $MachineTime = null;

    /**
     * @var string $ManufacturingNote
     */
    protected $ManufacturingNote = null;

    /**
     * @var ManufacturingOrderDocumentKey $ManufacturingOrderDocumentKey
     */
    protected $ManufacturingOrderDocumentKey = null;

    /**
     * @var float $MoveTime
     */
    protected $MoveTime = null;

    /**
     * @var string $NextRouteNumber
     */
    protected $NextRouteNumber = null;

    /**
     * @var string $Notes
     */
    protected $Notes = null;

    /**
     * @var int $NumberOfCrews
     */
    protected $NumberOfCrews = null;

    /**
     * @var int $NumberOfEmployees
     */
    protected $NumberOfEmployees = null;

    /**
     * @var int $NumberOfMachines
     */
    protected $NumberOfMachines = null;

    /**
     * @var string $OperationCode
     */
    protected $OperationCode = null;

    /**
     * @var int $POOffsetDays
     */
    protected $POOffsetDays = null;

    /**
     * @var int $PercentageComplete
     */
    protected $PercentageComplete = null;

    /**
     * @var Quantity $Pieces
     */
    protected $Pieces = null;

    /**
     * @var Quantity $Quantity
     */
    protected $Quantity = null;

    /**
     * @var float $QueueTime
     */
    protected $QueueTime = null;

    /**
     * @var Quantity $Rejects
     */
    protected $Rejects = null;

    /**
     * @var string $RouteMachineID
     */
    protected $RouteMachineID = null;

    /**
     * @var string $RoutePartNumber
     */
    protected $RoutePartNumber = null;

    /**
     * @var string $RouteSeqDescription
     */
    protected $RouteSeqDescription = null;

    /**
     * @var int $RouteSequenceNum
     */
    protected $RouteSequenceNum = null;

    /**
     * @var ManufacturingOrderRouteSequenceType $RouteSequenceType
     */
    protected $RouteSequenceType = null;

    /**
     * @var string $RouteWorkCenter
     */
    protected $RouteWorkCenter = null;

    /**
     * @var float $RunTime
     */
    protected $RunTime = null;

    /**
     * @var \DateTime $ScheduledFinishDate
     */
    protected $ScheduledFinishDate = null;

    /**
     * @var \DateTime $ScheduledStartDate
     */
    protected $ScheduledStartDate = null;

    /**
     * @var ManufacturingOrderServiceItem $ServiceItem
     */
    protected $ServiceItem = null;

    /**
     * @var float $SetupTime
     */
    protected $SetupTime = null;

    /**
     * @var string $UserDef_1
     */
    protected $UserDef_1 = null;

    /**
     * @var string $UserDef_2
     */
    protected $UserDef_2 = null;

    /**
     * @var VendorKey $VendorKey
     */
    protected $VendorKey = null;

    /**
     * @var string $VendorName
     */
    protected $VendorName = null;

    /**
     * @var Quantity $WIPOutputPerMOStartQty
     */
    protected $WIPOutputPerMOStartQty = null;

    /**
     * @var int $WaitHours
     */
    protected $WaitHours = null;

    /**
     * @var string $WorkCenter
     */
    protected $WorkCenter = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return \DateTime
     */
    public function getActualFinishDate()
    {
      if ($this->ActualFinishDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->ActualFinishDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $ActualFinishDate
     * @return ManufacturingOrderRouteStep
     */
    public function setActualFinishDate(\DateTime $ActualFinishDate = null)
    {
      if ($ActualFinishDate == null) {
       $this->ActualFinishDate = null;
      } else {
        $this->ActualFinishDate = $ActualFinishDate->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getActualStartDate()
    {
      if ($this->ActualStartDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->ActualStartDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $ActualStartDate
     * @return ManufacturingOrderRouteStep
     */
    public function setActualStartDate(\DateTime $ActualStartDate = null)
    {
      if ($ActualStartDate == null) {
       $this->ActualStartDate = null;
      } else {
        $this->ActualStartDate = $ActualStartDate->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return string
     */
    public function getClosedBy()
    {
      return $this->ClosedBy;
    }

    /**
     * @param string $ClosedBy
     * @return ManufacturingOrderRouteStep
     */
    public function setClosedBy($ClosedBy)
    {
      $this->ClosedBy = $ClosedBy;
      return $this;
    }

    /**
     * @return float
     */
    public function getCycleTime()
    {
      return $this->CycleTime;
    }

    /**
     * @param float $CycleTime
     * @return ManufacturingOrderRouteStep
     */
    public function setCycleTime($CycleTime)
    {
      $this->CycleTime = $CycleTime;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDateClosed()
    {
      if ($this->DateClosed == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->DateClosed);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $DateClosed
     * @return ManufacturingOrderRouteStep
     */
    public function setDateClosed(\DateTime $DateClosed = null)
    {
      if ($DateClosed == null) {
       $this->DateClosed = null;
      } else {
        $this->DateClosed = $DateClosed->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDateCreated()
    {
      if ($this->DateCreated == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->DateCreated);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $DateCreated
     * @return ManufacturingOrderRouteStep
     */
    public function setDateCreated(\DateTime $DateCreated = null)
    {
      if ($DateCreated == null) {
       $this->DateCreated = null;
      } else {
        $this->DateCreated = $DateCreated->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return string
     */
    public function getDrawingNumber()
    {
      return $this->DrawingNumber;
    }

    /**
     * @param string $DrawingNumber
     * @return ManufacturingOrderRouteStep
     */
    public function setDrawingNumber($DrawingNumber)
    {
      $this->DrawingNumber = $DrawingNumber;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsAutoBackFlushLabor()
    {
      return $this->IsAutoBackFlushLabor;
    }

    /**
     * @param boolean $IsAutoBackFlushLabor
     * @return ManufacturingOrderRouteStep
     */
    public function setIsAutoBackFlushLabor($IsAutoBackFlushLabor)
    {
      $this->IsAutoBackFlushLabor = $IsAutoBackFlushLabor;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsAutoBackFlushMachine()
    {
      return $this->IsAutoBackFlushMachine;
    }

    /**
     * @param boolean $IsAutoBackFlushMachine
     * @return ManufacturingOrderRouteStep
     */
    public function setIsAutoBackFlushMachine($IsAutoBackFlushMachine)
    {
      $this->IsAutoBackFlushMachine = $IsAutoBackFlushMachine;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsCapacityRequirementsPlanned()
    {
      return $this->IsCapacityRequirementsPlanned;
    }

    /**
     * @param boolean $IsCapacityRequirementsPlanned
     * @return ManufacturingOrderRouteStep
     */
    public function setIsCapacityRequirementsPlanned($IsCapacityRequirementsPlanned)
    {
      $this->IsCapacityRequirementsPlanned = $IsCapacityRequirementsPlanned;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsDone()
    {
      return $this->IsDone;
    }

    /**
     * @param boolean $IsDone
     * @return ManufacturingOrderRouteStep
     */
    public function setIsDone($IsDone)
    {
      $this->IsDone = $IsDone;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsLastSequenceofTheDay()
    {
      return $this->IsLastSequenceofTheDay;
    }

    /**
     * @param boolean $IsLastSequenceofTheDay
     * @return ManufacturingOrderRouteStep
     */
    public function setIsLastSequenceofTheDay($IsLastSequenceofTheDay)
    {
      $this->IsLastSequenceofTheDay = $IsLastSequenceofTheDay;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsMultiEmployeeOperation()
    {
      return $this->IsMultiEmployeeOperation;
    }

    /**
     * @param boolean $IsMultiEmployeeOperation
     * @return ManufacturingOrderRouteStep
     */
    public function setIsMultiEmployeeOperation($IsMultiEmployeeOperation)
    {
      $this->IsMultiEmployeeOperation = $IsMultiEmployeeOperation;
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
     * @return ManufacturingOrderRouteStep
     */
    public function setIsPhantomItem($IsPhantomItem)
    {
      $this->IsPhantomItem = $IsPhantomItem;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsQualityAssuranceNeeded()
    {
      return $this->IsQualityAssuranceNeeded;
    }

    /**
     * @param boolean $IsQualityAssuranceNeeded
     * @return ManufacturingOrderRouteStep
     */
    public function setIsQualityAssuranceNeeded($IsQualityAssuranceNeeded)
    {
      $this->IsQualityAssuranceNeeded = $IsQualityAssuranceNeeded;
      return $this;
    }

    /**
     * @return string
     */
    public function getLaborCode_1()
    {
      return $this->LaborCode_1;
    }

    /**
     * @param string $LaborCode_1
     * @return ManufacturingOrderRouteStep
     */
    public function setLaborCode_1($LaborCode_1)
    {
      $this->LaborCode_1 = $LaborCode_1;
      return $this;
    }

    /**
     * @return string
     */
    public function getLaborCode_2()
    {
      return $this->LaborCode_2;
    }

    /**
     * @param string $LaborCode_2
     * @return ManufacturingOrderRouteStep
     */
    public function setLaborCode_2($LaborCode_2)
    {
      $this->LaborCode_2 = $LaborCode_2;
      return $this;
    }

    /**
     * @return float
     */
    public function getLaborTime()
    {
      return $this->LaborTime;
    }

    /**
     * @param float $LaborTime
     * @return ManufacturingOrderRouteStep
     */
    public function setLaborTime($LaborTime)
    {
      $this->LaborTime = $LaborTime;
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
     * @return ManufacturingOrderRouteStep
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
     * @return MoneyAmount
     */
    public function getMRPAmount()
    {
      return $this->MRPAmount;
    }

    /**
     * @param MoneyAmount $MRPAmount
     * @return ManufacturingOrderRouteStep
     */
    public function setMRPAmount($MRPAmount)
    {
      $this->MRPAmount = $MRPAmount;
      return $this;
    }

    /**
     * @return string
     */
    public function getMachineId()
    {
      return $this->MachineId;
    }

    /**
     * @param string $MachineId
     * @return ManufacturingOrderRouteStep
     */
    public function setMachineId($MachineId)
    {
      $this->MachineId = $MachineId;
      return $this;
    }

    /**
     * @return float
     */
    public function getMachineTime()
    {
      return $this->MachineTime;
    }

    /**
     * @param float $MachineTime
     * @return ManufacturingOrderRouteStep
     */
    public function setMachineTime($MachineTime)
    {
      $this->MachineTime = $MachineTime;
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
     * @return ManufacturingOrderRouteStep
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
     * @return ManufacturingOrderRouteStep
     */
    public function setManufacturingOrderDocumentKey($ManufacturingOrderDocumentKey)
    {
      $this->ManufacturingOrderDocumentKey = $ManufacturingOrderDocumentKey;
      return $this;
    }

    /**
     * @return float
     */
    public function getMoveTime()
    {
      return $this->MoveTime;
    }

    /**
     * @param float $MoveTime
     * @return ManufacturingOrderRouteStep
     */
    public function setMoveTime($MoveTime)
    {
      $this->MoveTime = $MoveTime;
      return $this;
    }

    /**
     * @return string
     */
    public function getNextRouteNumber()
    {
      return $this->NextRouteNumber;
    }

    /**
     * @param string $NextRouteNumber
     * @return ManufacturingOrderRouteStep
     */
    public function setNextRouteNumber($NextRouteNumber)
    {
      $this->NextRouteNumber = $NextRouteNumber;
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
     * @return ManufacturingOrderRouteStep
     */
    public function setNotes($Notes)
    {
      $this->Notes = $Notes;
      return $this;
    }

    /**
     * @return int
     */
    public function getNumberOfCrews()
    {
      return $this->NumberOfCrews;
    }

    /**
     * @param int $NumberOfCrews
     * @return ManufacturingOrderRouteStep
     */
    public function setNumberOfCrews($NumberOfCrews)
    {
      $this->NumberOfCrews = $NumberOfCrews;
      return $this;
    }

    /**
     * @return int
     */
    public function getNumberOfEmployees()
    {
      return $this->NumberOfEmployees;
    }

    /**
     * @param int $NumberOfEmployees
     * @return ManufacturingOrderRouteStep
     */
    public function setNumberOfEmployees($NumberOfEmployees)
    {
      $this->NumberOfEmployees = $NumberOfEmployees;
      return $this;
    }

    /**
     * @return int
     */
    public function getNumberOfMachines()
    {
      return $this->NumberOfMachines;
    }

    /**
     * @param int $NumberOfMachines
     * @return ManufacturingOrderRouteStep
     */
    public function setNumberOfMachines($NumberOfMachines)
    {
      $this->NumberOfMachines = $NumberOfMachines;
      return $this;
    }

    /**
     * @return string
     */
    public function getOperationCode()
    {
      return $this->OperationCode;
    }

    /**
     * @param string $OperationCode
     * @return ManufacturingOrderRouteStep
     */
    public function setOperationCode($OperationCode)
    {
      $this->OperationCode = $OperationCode;
      return $this;
    }

    /**
     * @return int
     */
    public function getPOOffsetDays()
    {
      return $this->POOffsetDays;
    }

    /**
     * @param int $POOffsetDays
     * @return ManufacturingOrderRouteStep
     */
    public function setPOOffsetDays($POOffsetDays)
    {
      $this->POOffsetDays = $POOffsetDays;
      return $this;
    }

    /**
     * @return int
     */
    public function getPercentageComplete()
    {
      return $this->PercentageComplete;
    }

    /**
     * @param int $PercentageComplete
     * @return ManufacturingOrderRouteStep
     */
    public function setPercentageComplete($PercentageComplete)
    {
      $this->PercentageComplete = $PercentageComplete;
      return $this;
    }

    /**
     * @return Quantity
     */
    public function getPieces()
    {
      return $this->Pieces;
    }

    /**
     * @param Quantity $Pieces
     * @return ManufacturingOrderRouteStep
     */
    public function setPieces($Pieces)
    {
      $this->Pieces = $Pieces;
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
     * @return ManufacturingOrderRouteStep
     */
    public function setQuantity($Quantity)
    {
      $this->Quantity = $Quantity;
      return $this;
    }

    /**
     * @return float
     */
    public function getQueueTime()
    {
      return $this->QueueTime;
    }

    /**
     * @param float $QueueTime
     * @return ManufacturingOrderRouteStep
     */
    public function setQueueTime($QueueTime)
    {
      $this->QueueTime = $QueueTime;
      return $this;
    }

    /**
     * @return Quantity
     */
    public function getRejects()
    {
      return $this->Rejects;
    }

    /**
     * @param Quantity $Rejects
     * @return ManufacturingOrderRouteStep
     */
    public function setRejects($Rejects)
    {
      $this->Rejects = $Rejects;
      return $this;
    }

    /**
     * @return string
     */
    public function getRouteMachineID()
    {
      return $this->RouteMachineID;
    }

    /**
     * @param string $RouteMachineID
     * @return ManufacturingOrderRouteStep
     */
    public function setRouteMachineID($RouteMachineID)
    {
      $this->RouteMachineID = $RouteMachineID;
      return $this;
    }

    /**
     * @return string
     */
    public function getRoutePartNumber()
    {
      return $this->RoutePartNumber;
    }

    /**
     * @param string $RoutePartNumber
     * @return ManufacturingOrderRouteStep
     */
    public function setRoutePartNumber($RoutePartNumber)
    {
      $this->RoutePartNumber = $RoutePartNumber;
      return $this;
    }

    /**
     * @return string
     */
    public function getRouteSeqDescription()
    {
      return $this->RouteSeqDescription;
    }

    /**
     * @param string $RouteSeqDescription
     * @return ManufacturingOrderRouteStep
     */
    public function setRouteSeqDescription($RouteSeqDescription)
    {
      $this->RouteSeqDescription = $RouteSeqDescription;
      return $this;
    }

    /**
     * @return int
     */
    public function getRouteSequenceNum()
    {
      return $this->RouteSequenceNum;
    }

    /**
     * @param int $RouteSequenceNum
     * @return ManufacturingOrderRouteStep
     */
    public function setRouteSequenceNum($RouteSequenceNum)
    {
      $this->RouteSequenceNum = $RouteSequenceNum;
      return $this;
    }

    /**
     * @return ManufacturingOrderRouteSequenceType
     */
    public function getRouteSequenceType()
    {
      return $this->RouteSequenceType;
    }

    /**
     * @param ManufacturingOrderRouteSequenceType $RouteSequenceType
     * @return ManufacturingOrderRouteStep
     */
    public function setRouteSequenceType($RouteSequenceType)
    {
      $this->RouteSequenceType = $RouteSequenceType;
      return $this;
    }

    /**
     * @return string
     */
    public function getRouteWorkCenter()
    {
      return $this->RouteWorkCenter;
    }

    /**
     * @param string $RouteWorkCenter
     * @return ManufacturingOrderRouteStep
     */
    public function setRouteWorkCenter($RouteWorkCenter)
    {
      $this->RouteWorkCenter = $RouteWorkCenter;
      return $this;
    }

    /**
     * @return float
     */
    public function getRunTime()
    {
      return $this->RunTime;
    }

    /**
     * @param float $RunTime
     * @return ManufacturingOrderRouteStep
     */
    public function setRunTime($RunTime)
    {
      $this->RunTime = $RunTime;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getScheduledFinishDate()
    {
      if ($this->ScheduledFinishDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->ScheduledFinishDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $ScheduledFinishDate
     * @return ManufacturingOrderRouteStep
     */
    public function setScheduledFinishDate(\DateTime $ScheduledFinishDate = null)
    {
      if ($ScheduledFinishDate == null) {
       $this->ScheduledFinishDate = null;
      } else {
        $this->ScheduledFinishDate = $ScheduledFinishDate->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getScheduledStartDate()
    {
      if ($this->ScheduledStartDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->ScheduledStartDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $ScheduledStartDate
     * @return ManufacturingOrderRouteStep
     */
    public function setScheduledStartDate(\DateTime $ScheduledStartDate = null)
    {
      if ($ScheduledStartDate == null) {
       $this->ScheduledStartDate = null;
      } else {
        $this->ScheduledStartDate = $ScheduledStartDate->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return ManufacturingOrderServiceItem
     */
    public function getServiceItem()
    {
      return $this->ServiceItem;
    }

    /**
     * @param ManufacturingOrderServiceItem $ServiceItem
     * @return ManufacturingOrderRouteStep
     */
    public function setServiceItem($ServiceItem)
    {
      $this->ServiceItem = $ServiceItem;
      return $this;
    }

    /**
     * @return float
     */
    public function getSetupTime()
    {
      return $this->SetupTime;
    }

    /**
     * @param float $SetupTime
     * @return ManufacturingOrderRouteStep
     */
    public function setSetupTime($SetupTime)
    {
      $this->SetupTime = $SetupTime;
      return $this;
    }

    /**
     * @return string
     */
    public function getUserDef_1()
    {
      return $this->UserDef_1;
    }

    /**
     * @param string $UserDef_1
     * @return ManufacturingOrderRouteStep
     */
    public function setUserDef_1($UserDef_1)
    {
      $this->UserDef_1 = $UserDef_1;
      return $this;
    }

    /**
     * @return string
     */
    public function getUserDef_2()
    {
      return $this->UserDef_2;
    }

    /**
     * @param string $UserDef_2
     * @return ManufacturingOrderRouteStep
     */
    public function setUserDef_2($UserDef_2)
    {
      $this->UserDef_2 = $UserDef_2;
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
     * @return ManufacturingOrderRouteStep
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
     * @return ManufacturingOrderRouteStep
     */
    public function setVendorName($VendorName)
    {
      $this->VendorName = $VendorName;
      return $this;
    }

    /**
     * @return Quantity
     */
    public function getWIPOutputPerMOStartQty()
    {
      return $this->WIPOutputPerMOStartQty;
    }

    /**
     * @param Quantity $WIPOutputPerMOStartQty
     * @return ManufacturingOrderRouteStep
     */
    public function setWIPOutputPerMOStartQty($WIPOutputPerMOStartQty)
    {
      $this->WIPOutputPerMOStartQty = $WIPOutputPerMOStartQty;
      return $this;
    }

    /**
     * @return int
     */
    public function getWaitHours()
    {
      return $this->WaitHours;
    }

    /**
     * @param int $WaitHours
     * @return ManufacturingOrderRouteStep
     */
    public function setWaitHours($WaitHours)
    {
      $this->WaitHours = $WaitHours;
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
     * @return ManufacturingOrderRouteStep
     */
    public function setWorkCenter($WorkCenter)
    {
      $this->WorkCenter = $WorkCenter;
      return $this;
    }

}
