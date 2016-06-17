<?php

class ProjectChangeOrderSummary
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
     * @var CustomerKey $CustomerKey
     */
    protected $CustomerKey = null;

    /**
     * @var \DateTime $Date
     */
    protected $Date = null;

    /**
     * @var ProjectChangeOrderKey $Key
     */
    protected $Key = null;

    /**
     * @var MoneyAmount $RevisedBudgetTotalAmount
     */
    protected $RevisedBudgetTotalAmount = null;

    /**
     * @var MoneyAmount $RevisedFeeTotalAmount
     */
    protected $RevisedFeeTotalAmount = null;

    /**
     * @var MoneyAmount $RevisedProjectAmount
     */
    protected $RevisedProjectAmount = null;

    /**
     * @var ProjectChangeOrderStatus $Status
     */
    protected $Status = null;

    /**
     * @var MoneyAmount $TotalChangeOrderAmount
     */
    protected $TotalChangeOrderAmount = null;

    /**
     * @var MoneyAmount $TotalCost
     */
    protected $TotalCost = null;

    
    public function __construct()
    {
    
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
     * @return ProjectChangeOrderSummary
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
     * @return ProjectChangeOrderSummary
     */
    public function setApprovedBy($ApprovedBy)
    {
      $this->ApprovedBy = $ApprovedBy;
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
     * @return ProjectChangeOrderSummary
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
     * @return ProjectChangeOrderSummary
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
     * @return ProjectChangeOrderKey
     */
    public function getKey()
    {
      return $this->Key;
    }

    /**
     * @param ProjectChangeOrderKey $Key
     * @return ProjectChangeOrderSummary
     */
    public function setKey($Key)
    {
      $this->Key = $Key;
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
     * @return ProjectChangeOrderSummary
     */
    public function setRevisedBudgetTotalAmount($RevisedBudgetTotalAmount)
    {
      $this->RevisedBudgetTotalAmount = $RevisedBudgetTotalAmount;
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
     * @return ProjectChangeOrderSummary
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
     * @return ProjectChangeOrderSummary
     */
    public function setRevisedProjectAmount($RevisedProjectAmount)
    {
      $this->RevisedProjectAmount = $RevisedProjectAmount;
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
     * @return ProjectChangeOrderSummary
     */
    public function setStatus($Status)
    {
      $this->Status = $Status;
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
     * @return ProjectChangeOrderSummary
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
     * @return ProjectChangeOrderSummary
     */
    public function setTotalCost($TotalCost)
    {
      $this->TotalCost = $TotalCost;
      return $this;
    }

}
