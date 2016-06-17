<?php

class ProjectEmployeeExpenseSummary
{

    /**
     * @var BatchKey $BatchKey
     */
    protected $BatchKey = null;

    /**
     * @var \DateTime $Date
     */
    protected $Date = null;

    /**
     * @var EmployeeKey $EmployeeKey
     */
    protected $EmployeeKey = null;

    /**
     * @var ProjectEmployeeExpenseKey $Key
     */
    protected $Key = null;

    /**
     * @var string $ReferenceDocumentNumber
     */
    protected $ReferenceDocumentNumber = null;

    /**
     * @var MoneyAmount $TotalCost
     */
    protected $TotalCost = null;

    /**
     * @var ProjectTransactionState $TransactionState
     */
    protected $TransactionState = null;

    /**
     * @var ProjectTransactionType $TransactionType
     */
    protected $TransactionType = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return BatchKey
     */
    public function getBatchKey()
    {
      return $this->BatchKey;
    }

    /**
     * @param BatchKey $BatchKey
     * @return ProjectEmployeeExpenseSummary
     */
    public function setBatchKey($BatchKey)
    {
      $this->BatchKey = $BatchKey;
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
     * @return ProjectEmployeeExpenseSummary
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
     * @return EmployeeKey
     */
    public function getEmployeeKey()
    {
      return $this->EmployeeKey;
    }

    /**
     * @param EmployeeKey $EmployeeKey
     * @return ProjectEmployeeExpenseSummary
     */
    public function setEmployeeKey($EmployeeKey)
    {
      $this->EmployeeKey = $EmployeeKey;
      return $this;
    }

    /**
     * @return ProjectEmployeeExpenseKey
     */
    public function getKey()
    {
      return $this->Key;
    }

    /**
     * @param ProjectEmployeeExpenseKey $Key
     * @return ProjectEmployeeExpenseSummary
     */
    public function setKey($Key)
    {
      $this->Key = $Key;
      return $this;
    }

    /**
     * @return string
     */
    public function getReferenceDocumentNumber()
    {
      return $this->ReferenceDocumentNumber;
    }

    /**
     * @param string $ReferenceDocumentNumber
     * @return ProjectEmployeeExpenseSummary
     */
    public function setReferenceDocumentNumber($ReferenceDocumentNumber)
    {
      $this->ReferenceDocumentNumber = $ReferenceDocumentNumber;
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
     * @return ProjectEmployeeExpenseSummary
     */
    public function setTotalCost($TotalCost)
    {
      $this->TotalCost = $TotalCost;
      return $this;
    }

    /**
     * @return ProjectTransactionState
     */
    public function getTransactionState()
    {
      return $this->TransactionState;
    }

    /**
     * @param ProjectTransactionState $TransactionState
     * @return ProjectEmployeeExpenseSummary
     */
    public function setTransactionState($TransactionState)
    {
      $this->TransactionState = $TransactionState;
      return $this;
    }

    /**
     * @return ProjectTransactionType
     */
    public function getTransactionType()
    {
      return $this->TransactionType;
    }

    /**
     * @param ProjectTransactionType $TransactionType
     * @return ProjectEmployeeExpenseSummary
     */
    public function setTransactionType($TransactionType)
    {
      $this->TransactionType = $TransactionType;
      return $this;
    }

}
