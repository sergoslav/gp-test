<?php

class Batch extends BusinessObject
{

    /**
     * @var BankAccountKey $BankAccountKey
     */
    protected $BankAccountKey = null;

    /**
     * @var string $Comment
     */
    protected $Comment = null;

    /**
     * @var int $ControlNumberOfTransactions
     */
    protected $ControlNumberOfTransactions = null;

    /**
     * @var MoneyAmount $ControlTotal
     */
    protected $ControlTotal = null;

    /**
     * @var CurrencyKey $CurrencyKey
     */
    protected $CurrencyKey = null;

    /**
     * @var PostingFrequency $Frequency
     */
    protected $Frequency = null;

    /**
     * @var \DateTime $GeneralLedgerPostedDate
     */
    protected $GeneralLedgerPostedDate = null;

    /**
     * @var BatchKey $Key
     */
    protected $Key = null;

    /**
     * @var int $NumberOfPostings
     */
    protected $NumberOfPostings = null;

    /**
     * @var int $NumberOfTransactions
     */
    protected $NumberOfTransactions = null;

    /**
     * @var \DateTime $RecurringLastPostedDate
     */
    protected $RecurringLastPostedDate = null;

    /**
     * @var MoneyAmount $Total
     */
    protected $Total = null;

    /**
     * @var WorkflowPriority $WorkflowPriority
     */
    protected $WorkflowPriority = null;

    /**
     * @var ArrayOfWorkflow $Workflows
     */
    protected $Workflows = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return BankAccountKey
     */
    public function getBankAccountKey()
    {
      return $this->BankAccountKey;
    }

    /**
     * @param BankAccountKey $BankAccountKey
     * @return Batch
     */
    public function setBankAccountKey($BankAccountKey)
    {
      $this->BankAccountKey = $BankAccountKey;
      return $this;
    }

    /**
     * @return string
     */
    public function getComment()
    {
      return $this->Comment;
    }

    /**
     * @param string $Comment
     * @return Batch
     */
    public function setComment($Comment)
    {
      $this->Comment = $Comment;
      return $this;
    }

    /**
     * @return int
     */
    public function getControlNumberOfTransactions()
    {
      return $this->ControlNumberOfTransactions;
    }

    /**
     * @param int $ControlNumberOfTransactions
     * @return Batch
     */
    public function setControlNumberOfTransactions($ControlNumberOfTransactions)
    {
      $this->ControlNumberOfTransactions = $ControlNumberOfTransactions;
      return $this;
    }

    /**
     * @return MoneyAmount
     */
    public function getControlTotal()
    {
      return $this->ControlTotal;
    }

    /**
     * @param MoneyAmount $ControlTotal
     * @return Batch
     */
    public function setControlTotal($ControlTotal)
    {
      $this->ControlTotal = $ControlTotal;
      return $this;
    }

    /**
     * @return CurrencyKey
     */
    public function getCurrencyKey()
    {
      return $this->CurrencyKey;
    }

    /**
     * @param CurrencyKey $CurrencyKey
     * @return Batch
     */
    public function setCurrencyKey($CurrencyKey)
    {
      $this->CurrencyKey = $CurrencyKey;
      return $this;
    }

    /**
     * @return PostingFrequency
     */
    public function getFrequency()
    {
      return $this->Frequency;
    }

    /**
     * @param PostingFrequency $Frequency
     * @return Batch
     */
    public function setFrequency($Frequency)
    {
      $this->Frequency = $Frequency;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getGeneralLedgerPostedDate()
    {
      if ($this->GeneralLedgerPostedDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->GeneralLedgerPostedDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $GeneralLedgerPostedDate
     * @return Batch
     */
    public function setGeneralLedgerPostedDate(\DateTime $GeneralLedgerPostedDate = null)
    {
      if ($GeneralLedgerPostedDate == null) {
       $this->GeneralLedgerPostedDate = null;
      } else {
        $this->GeneralLedgerPostedDate = $GeneralLedgerPostedDate->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return BatchKey
     */
    public function getKey()
    {
      return $this->Key;
    }

    /**
     * @param BatchKey $Key
     * @return Batch
     */
    public function setKey($Key)
    {
      $this->Key = $Key;
      return $this;
    }

    /**
     * @return int
     */
    public function getNumberOfPostings()
    {
      return $this->NumberOfPostings;
    }

    /**
     * @param int $NumberOfPostings
     * @return Batch
     */
    public function setNumberOfPostings($NumberOfPostings)
    {
      $this->NumberOfPostings = $NumberOfPostings;
      return $this;
    }

    /**
     * @return int
     */
    public function getNumberOfTransactions()
    {
      return $this->NumberOfTransactions;
    }

    /**
     * @param int $NumberOfTransactions
     * @return Batch
     */
    public function setNumberOfTransactions($NumberOfTransactions)
    {
      $this->NumberOfTransactions = $NumberOfTransactions;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getRecurringLastPostedDate()
    {
      if ($this->RecurringLastPostedDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->RecurringLastPostedDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $RecurringLastPostedDate
     * @return Batch
     */
    public function setRecurringLastPostedDate(\DateTime $RecurringLastPostedDate = null)
    {
      if ($RecurringLastPostedDate == null) {
       $this->RecurringLastPostedDate = null;
      } else {
        $this->RecurringLastPostedDate = $RecurringLastPostedDate->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return MoneyAmount
     */
    public function getTotal()
    {
      return $this->Total;
    }

    /**
     * @param MoneyAmount $Total
     * @return Batch
     */
    public function setTotal($Total)
    {
      $this->Total = $Total;
      return $this;
    }

    /**
     * @return WorkflowPriority
     */
    public function getWorkflowPriority()
    {
      return $this->WorkflowPriority;
    }

    /**
     * @param WorkflowPriority $WorkflowPriority
     * @return Batch
     */
    public function setWorkflowPriority($WorkflowPriority)
    {
      $this->WorkflowPriority = $WorkflowPriority;
      return $this;
    }

    /**
     * @return ArrayOfWorkflow
     */
    public function getWorkflows()
    {
      return $this->Workflows;
    }

    /**
     * @param ArrayOfWorkflow $Workflows
     * @return Batch
     */
    public function setWorkflows($Workflows)
    {
      $this->Workflows = $Workflows;
      return $this;
    }

}
