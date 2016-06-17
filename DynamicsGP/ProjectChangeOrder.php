<?php

class ProjectChangeOrder extends BusinessObject
{

    /**
     * @var \DateTime $ApprovalDate
     */
    protected $ApprovalDate = null;

    /**
     * @var string $ApprovedBy
     */
    protected $ApprovedBy = null;

    /**
     * @var string $ApproverPosition
     */
    protected $ApproverPosition = null;

    /**
     * @var ArrayOfProjectChangeOrderBudget $Budgets
     */
    protected $Budgets = null;

    /**
     * @var \DateTime $ContractBeginDate
     */
    protected $ContractBeginDate = null;

    /**
     * @var \DateTime $ContractEndDate
     */
    protected $ContractEndDate = null;

    /**
     * @var string $CustomerChangeOrderNumber
     */
    protected $CustomerChangeOrderNumber = null;

    /**
     * @var CustomerKey $CustomerKey
     */
    protected $CustomerKey = null;

    /**
     * @var \DateTime $Date
     */
    protected $Date = null;

    /**
     * @var string $Description
     */
    protected $Description = null;

    /**
     * @var ProjectChangeOrderDocumentStatus $DocumentStatus
     */
    protected $DocumentStatus = null;

    /**
     * @var string $EstimatedBy
     */
    protected $EstimatedBy = null;

    /**
     * @var ArrayOfProjectChangeOrderFee $Fees
     */
    protected $Fees = null;

    /**
     * @var ProjectChangeOrderKey $Key
     */
    protected $Key = null;

    /**
     * @var \DateTime $LastProcessedDate
     */
    protected $LastProcessedDate = null;

    /**
     * @var string $ModifiedBy
     */
    protected $ModifiedBy = null;

    /**
     * @var \DateTime $PreviousContractBeginDate
     */
    protected $PreviousContractBeginDate = null;

    /**
     * @var \DateTime $PreviousContractEndDate
     */
    protected $PreviousContractEndDate = null;

    /**
     * @var MoneyAmount $PreviousProjectAmount
     */
    protected $PreviousProjectAmount = null;

    /**
     * @var MoneyAmount $ProjectAmount
     */
    protected $ProjectAmount = null;

    /**
     * @var string $ReasonForRevision
     */
    protected $ReasonForRevision = null;

    /**
     * @var string $RequestedBy
     */
    protected $RequestedBy = null;

    /**
     * @var MoneyAmount $RevisedBudgetTotalAmount
     */
    protected $RevisedBudgetTotalAmount = null;

    /**
     * @var string $RevisedBy
     */
    protected $RevisedBy = null;

    /**
     * @var MoneyAmount $RevisedFeeTotalAmount
     */
    protected $RevisedFeeTotalAmount = null;

    /**
     * @var MoneyAmount $RevisedProjectAmount
     */
    protected $RevisedProjectAmount = null;

    /**
     * @var string $RevisersPosition
     */
    protected $RevisersPosition = null;

    /**
     * @var int $SequenceNumber
     */
    protected $SequenceNumber = null;

    /**
     * @var ProjectChangeOrderStatus $Status
     */
    protected $Status = null;

    /**
     * @var MoneyAmount $TotalBilling
     */
    protected $TotalBilling = null;

    /**
     * @var MoneyAmount $TotalChangeOrderAmount
     */
    protected $TotalChangeOrderAmount = null;

    /**
     * @var MoneyAmount $TotalCost
     */
    protected $TotalCost = null;

    /**
     * @var Quantity $TotalQuantity
     */
    protected $TotalQuantity = null;

    /**
     * @var ProjectChangeOrderTrackChangesToType $TrackChangesToType
     */
    protected $TrackChangesToType = null;

    /**
     * @var ProjectChangeOrderType $Type
     */
    protected $Type = null;

    /**
     * @var MoneyAmount $VarianceProjectAmount
     */
    protected $VarianceProjectAmount = null;

    /**
     * @var MoneyAmount $VarianceTotalBilling
     */
    protected $VarianceTotalBilling = null;

    /**
     * @var MoneyAmount $VarianceTotalCost
     */
    protected $VarianceTotalCost = null;

    /**
     * @var Quantity $VarianceTotalQuantity
     */
    protected $VarianceTotalQuantity = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return \DateTime
     */
    public function getApprovalDate()
    {
      if ($this->ApprovalDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->ApprovalDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $ApprovalDate
     * @return ProjectChangeOrder
     */
    public function setApprovalDate(\DateTime $ApprovalDate = null)
    {
      if ($ApprovalDate == null) {
       $this->ApprovalDate = null;
      } else {
        $this->ApprovalDate = $ApprovalDate->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return string
     */
    public function getApprovedBy()
    {
      return $this->ApprovedBy;
    }

    /**
     * @param string $ApprovedBy
     * @return ProjectChangeOrder
     */
    public function setApprovedBy($ApprovedBy)
    {
      $this->ApprovedBy = $ApprovedBy;
      return $this;
    }

    /**
     * @return string
     */
    public function getApproverPosition()
    {
      return $this->ApproverPosition;
    }

    /**
     * @param string $ApproverPosition
     * @return ProjectChangeOrder
     */
    public function setApproverPosition($ApproverPosition)
    {
      $this->ApproverPosition = $ApproverPosition;
      return $this;
    }

    /**
     * @return ArrayOfProjectChangeOrderBudget
     */
    public function getBudgets()
    {
      return $this->Budgets;
    }

    /**
     * @param ArrayOfProjectChangeOrderBudget $Budgets
     * @return ProjectChangeOrder
     */
    public function setBudgets($Budgets)
    {
      $this->Budgets = $Budgets;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getContractBeginDate()
    {
      if ($this->ContractBeginDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->ContractBeginDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $ContractBeginDate
     * @return ProjectChangeOrder
     */
    public function setContractBeginDate(\DateTime $ContractBeginDate = null)
    {
      if ($ContractBeginDate == null) {
       $this->ContractBeginDate = null;
      } else {
        $this->ContractBeginDate = $ContractBeginDate->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getContractEndDate()
    {
      if ($this->ContractEndDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->ContractEndDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $ContractEndDate
     * @return ProjectChangeOrder
     */
    public function setContractEndDate(\DateTime $ContractEndDate = null)
    {
      if ($ContractEndDate == null) {
       $this->ContractEndDate = null;
      } else {
        $this->ContractEndDate = $ContractEndDate->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return string
     */
    public function getCustomerChangeOrderNumber()
    {
      return $this->CustomerChangeOrderNumber;
    }

    /**
     * @param string $CustomerChangeOrderNumber
     * @return ProjectChangeOrder
     */
    public function setCustomerChangeOrderNumber($CustomerChangeOrderNumber)
    {
      $this->CustomerChangeOrderNumber = $CustomerChangeOrderNumber;
      return $this;
    }

    /**
     * @return CustomerKey
     */
    public function getCustomerKey()
    {
      return $this->CustomerKey;
    }

    /**
     * @param CustomerKey $CustomerKey
     * @return ProjectChangeOrder
     */
    public function setCustomerKey($CustomerKey)
    {
      $this->CustomerKey = $CustomerKey;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDate()
    {
      if ($this->Date == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->Date);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $Date
     * @return ProjectChangeOrder
     */
    public function setDate(\DateTime $Date = null)
    {
      if ($Date == null) {
       $this->Date = null;
      } else {
        $this->Date = $Date->format(\DateTime::ATOM);
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
     * @return ProjectChangeOrder
     */
    public function setDescription($Description)
    {
      $this->Description = $Description;
      return $this;
    }

    /**
     * @return ProjectChangeOrderDocumentStatus
     */
    public function getDocumentStatus()
    {
      return $this->DocumentStatus;
    }

    /**
     * @param ProjectChangeOrderDocumentStatus $DocumentStatus
     * @return ProjectChangeOrder
     */
    public function setDocumentStatus($DocumentStatus)
    {
      $this->DocumentStatus = $DocumentStatus;
      return $this;
    }

    /**
     * @return string
     */
    public function getEstimatedBy()
    {
      return $this->EstimatedBy;
    }

    /**
     * @param string $EstimatedBy
     * @return ProjectChangeOrder
     */
    public function setEstimatedBy($EstimatedBy)
    {
      $this->EstimatedBy = $EstimatedBy;
      return $this;
    }

    /**
     * @return ArrayOfProjectChangeOrderFee
     */
    public function getFees()
    {
      return $this->Fees;
    }

    /**
     * @param ArrayOfProjectChangeOrderFee $Fees
     * @return ProjectChangeOrder
     */
    public function setFees($Fees)
    {
      $this->Fees = $Fees;
      return $this;
    }

    /**
     * @return ProjectChangeOrderKey
     */
    public function getKey()
    {
      return $this->Key;
    }

    /**
     * @param ProjectChangeOrderKey $Key
     * @return ProjectChangeOrder
     */
    public function setKey($Key)
    {
      $this->Key = $Key;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getLastProcessedDate()
    {
      if ($this->LastProcessedDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->LastProcessedDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $LastProcessedDate
     * @return ProjectChangeOrder
     */
    public function setLastProcessedDate(\DateTime $LastProcessedDate = null)
    {
      if ($LastProcessedDate == null) {
       $this->LastProcessedDate = null;
      } else {
        $this->LastProcessedDate = $LastProcessedDate->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return string
     */
    public function getModifiedBy()
    {
      return $this->ModifiedBy;
    }

    /**
     * @param string $ModifiedBy
     * @return ProjectChangeOrder
     */
    public function setModifiedBy($ModifiedBy)
    {
      $this->ModifiedBy = $ModifiedBy;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getPreviousContractBeginDate()
    {
      if ($this->PreviousContractBeginDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->PreviousContractBeginDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $PreviousContractBeginDate
     * @return ProjectChangeOrder
     */
    public function setPreviousContractBeginDate(\DateTime $PreviousContractBeginDate = null)
    {
      if ($PreviousContractBeginDate == null) {
       $this->PreviousContractBeginDate = null;
      } else {
        $this->PreviousContractBeginDate = $PreviousContractBeginDate->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getPreviousContractEndDate()
    {
      if ($this->PreviousContractEndDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->PreviousContractEndDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $PreviousContractEndDate
     * @return ProjectChangeOrder
     */
    public function setPreviousContractEndDate(\DateTime $PreviousContractEndDate = null)
    {
      if ($PreviousContractEndDate == null) {
       $this->PreviousContractEndDate = null;
      } else {
        $this->PreviousContractEndDate = $PreviousContractEndDate->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return MoneyAmount
     */
    public function getPreviousProjectAmount()
    {
      return $this->PreviousProjectAmount;
    }

    /**
     * @param MoneyAmount $PreviousProjectAmount
     * @return ProjectChangeOrder
     */
    public function setPreviousProjectAmount($PreviousProjectAmount)
    {
      $this->PreviousProjectAmount = $PreviousProjectAmount;
      return $this;
    }

    /**
     * @return MoneyAmount
     */
    public function getProjectAmount()
    {
      return $this->ProjectAmount;
    }

    /**
     * @param MoneyAmount $ProjectAmount
     * @return ProjectChangeOrder
     */
    public function setProjectAmount($ProjectAmount)
    {
      $this->ProjectAmount = $ProjectAmount;
      return $this;
    }

    /**
     * @return string
     */
    public function getReasonForRevision()
    {
      return $this->ReasonForRevision;
    }

    /**
     * @param string $ReasonForRevision
     * @return ProjectChangeOrder
     */
    public function setReasonForRevision($ReasonForRevision)
    {
      $this->ReasonForRevision = $ReasonForRevision;
      return $this;
    }

    /**
     * @return string
     */
    public function getRequestedBy()
    {
      return $this->RequestedBy;
    }

    /**
     * @param string $RequestedBy
     * @return ProjectChangeOrder
     */
    public function setRequestedBy($RequestedBy)
    {
      $this->RequestedBy = $RequestedBy;
      return $this;
    }

    /**
     * @return MoneyAmount
     */
    public function getRevisedBudgetTotalAmount()
    {
      return $this->RevisedBudgetTotalAmount;
    }

    /**
     * @param MoneyAmount $RevisedBudgetTotalAmount
     * @return ProjectChangeOrder
     */
    public function setRevisedBudgetTotalAmount($RevisedBudgetTotalAmount)
    {
      $this->RevisedBudgetTotalAmount = $RevisedBudgetTotalAmount;
      return $this;
    }

    /**
     * @return string
     */
    public function getRevisedBy()
    {
      return $this->RevisedBy;
    }

    /**
     * @param string $RevisedBy
     * @return ProjectChangeOrder
     */
    public function setRevisedBy($RevisedBy)
    {
      $this->RevisedBy = $RevisedBy;
      return $this;
    }

    /**
     * @return MoneyAmount
     */
    public function getRevisedFeeTotalAmount()
    {
      return $this->RevisedFeeTotalAmount;
    }

    /**
     * @param MoneyAmount $RevisedFeeTotalAmount
     * @return ProjectChangeOrder
     */
    public function setRevisedFeeTotalAmount($RevisedFeeTotalAmount)
    {
      $this->RevisedFeeTotalAmount = $RevisedFeeTotalAmount;
      return $this;
    }

    /**
     * @return MoneyAmount
     */
    public function getRevisedProjectAmount()
    {
      return $this->RevisedProjectAmount;
    }

    /**
     * @param MoneyAmount $RevisedProjectAmount
     * @return ProjectChangeOrder
     */
    public function setRevisedProjectAmount($RevisedProjectAmount)
    {
      $this->RevisedProjectAmount = $RevisedProjectAmount;
      return $this;
    }

    /**
     * @return string
     */
    public function getRevisersPosition()
    {
      return $this->RevisersPosition;
    }

    /**
     * @param string $RevisersPosition
     * @return ProjectChangeOrder
     */
    public function setRevisersPosition($RevisersPosition)
    {
      $this->RevisersPosition = $RevisersPosition;
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
     * @return ProjectChangeOrder
     */
    public function setSequenceNumber($SequenceNumber)
    {
      $this->SequenceNumber = $SequenceNumber;
      return $this;
    }

    /**
     * @return ProjectChangeOrderStatus
     */
    public function getStatus()
    {
      return $this->Status;
    }

    /**
     * @param ProjectChangeOrderStatus $Status
     * @return ProjectChangeOrder
     */
    public function setStatus($Status)
    {
      $this->Status = $Status;
      return $this;
    }

    /**
     * @return MoneyAmount
     */
    public function getTotalBilling()
    {
      return $this->TotalBilling;
    }

    /**
     * @param MoneyAmount $TotalBilling
     * @return ProjectChangeOrder
     */
    public function setTotalBilling($TotalBilling)
    {
      $this->TotalBilling = $TotalBilling;
      return $this;
    }

    /**
     * @return MoneyAmount
     */
    public function getTotalChangeOrderAmount()
    {
      return $this->TotalChangeOrderAmount;
    }

    /**
     * @param MoneyAmount $TotalChangeOrderAmount
     * @return ProjectChangeOrder
     */
    public function setTotalChangeOrderAmount($TotalChangeOrderAmount)
    {
      $this->TotalChangeOrderAmount = $TotalChangeOrderAmount;
      return $this;
    }

    /**
     * @return MoneyAmount
     */
    public function getTotalCost()
    {
      return $this->TotalCost;
    }

    /**
     * @param MoneyAmount $TotalCost
     * @return ProjectChangeOrder
     */
    public function setTotalCost($TotalCost)
    {
      $this->TotalCost = $TotalCost;
      return $this;
    }

    /**
     * @return Quantity
     */
    public function getTotalQuantity()
    {
      return $this->TotalQuantity;
    }

    /**
     * @param Quantity $TotalQuantity
     * @return ProjectChangeOrder
     */
    public function setTotalQuantity($TotalQuantity)
    {
      $this->TotalQuantity = $TotalQuantity;
      return $this;
    }

    /**
     * @return ProjectChangeOrderTrackChangesToType
     */
    public function getTrackChangesToType()
    {
      return $this->TrackChangesToType;
    }

    /**
     * @param ProjectChangeOrderTrackChangesToType $TrackChangesToType
     * @return ProjectChangeOrder
     */
    public function setTrackChangesToType($TrackChangesToType)
    {
      $this->TrackChangesToType = $TrackChangesToType;
      return $this;
    }

    /**
     * @return ProjectChangeOrderType
     */
    public function getType()
    {
      return $this->Type;
    }

    /**
     * @param ProjectChangeOrderType $Type
     * @return ProjectChangeOrder
     */
    public function setType($Type)
    {
      $this->Type = $Type;
      return $this;
    }

    /**
     * @return MoneyAmount
     */
    public function getVarianceProjectAmount()
    {
      return $this->VarianceProjectAmount;
    }

    /**
     * @param MoneyAmount $VarianceProjectAmount
     * @return ProjectChangeOrder
     */
    public function setVarianceProjectAmount($VarianceProjectAmount)
    {
      $this->VarianceProjectAmount = $VarianceProjectAmount;
      return $this;
    }

    /**
     * @return MoneyAmount
     */
    public function getVarianceTotalBilling()
    {
      return $this->VarianceTotalBilling;
    }

    /**
     * @param MoneyAmount $VarianceTotalBilling
     * @return ProjectChangeOrder
     */
    public function setVarianceTotalBilling($VarianceTotalBilling)
    {
      $this->VarianceTotalBilling = $VarianceTotalBilling;
      return $this;
    }

    /**
     * @return MoneyAmount
     */
    public function getVarianceTotalCost()
    {
      return $this->VarianceTotalCost;
    }

    /**
     * @param MoneyAmount $VarianceTotalCost
     * @return ProjectChangeOrder
     */
    public function setVarianceTotalCost($VarianceTotalCost)
    {
      $this->VarianceTotalCost = $VarianceTotalCost;
      return $this;
    }

    /**
     * @return Quantity
     */
    public function getVarianceTotalQuantity()
    {
      return $this->VarianceTotalQuantity;
    }

    /**
     * @param Quantity $VarianceTotalQuantity
     * @return ProjectChangeOrder
     */
    public function setVarianceTotalQuantity($VarianceTotalQuantity)
    {
      $this->VarianceTotalQuantity = $VarianceTotalQuantity;
      return $this;
    }

}
