<?php

class SalesInvoice extends SalesDocument
{

    /**
     * @var MoneyAmount $DepositAmount
     */
    protected $DepositAmount = null;

    /**
     * @var ArrayOfSalesDistribution $Distributions
     */
    protected $Distributions = null;

    /**
     * @var \DateTime $GeneralLedgerPostingDate
     */
    protected $GeneralLedgerPostingDate = null;

    /**
     * @var boolean $IsDirectDebit
     */
    protected $IsDirectDebit = null;

    /**
     * @var ArrayOfSalesInvoiceLine $Lines
     */
    protected $Lines = null;

    /**
     * @var MoneyAmount $PaymentAmount
     */
    protected $PaymentAmount = null;

    /**
     * @var ArrayOfSalesPayment $Payments
     */
    protected $Payments = null;

    /**
     * @var string $PostedBy
     */
    protected $PostedBy = null;

    /**
     * @var \DateTime $PostedDate
     */
    protected $PostedDate = null;

    /**
     * @var SalesTerms $Terms
     */
    protected $Terms = null;

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
     * @return MoneyAmount
     */
    public function getDepositAmount()
    {
      return $this->DepositAmount;
    }

    /**
     * @param MoneyAmount $DepositAmount
     * @return SalesInvoice
     */
    public function setDepositAmount($DepositAmount)
    {
      $this->DepositAmount = $DepositAmount;
      return $this;
    }

    /**
     * @return ArrayOfSalesDistribution
     */
    public function getDistributions()
    {
      return $this->Distributions;
    }

    /**
     * @param ArrayOfSalesDistribution $Distributions
     * @return SalesInvoice
     */
    public function setDistributions($Distributions)
    {
      $this->Distributions = $Distributions;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getGeneralLedgerPostingDate()
    {
      if ($this->GeneralLedgerPostingDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->GeneralLedgerPostingDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $GeneralLedgerPostingDate
     * @return SalesInvoice
     */
    public function setGeneralLedgerPostingDate(\DateTime $GeneralLedgerPostingDate = null)
    {
      if ($GeneralLedgerPostingDate == null) {
       $this->GeneralLedgerPostingDate = null;
      } else {
        $this->GeneralLedgerPostingDate = $GeneralLedgerPostingDate->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsDirectDebit()
    {
      return $this->IsDirectDebit;
    }

    /**
     * @param boolean $IsDirectDebit
     * @return SalesInvoice
     */
    public function setIsDirectDebit($IsDirectDebit)
    {
      $this->IsDirectDebit = $IsDirectDebit;
      return $this;
    }

    /**
     * @return ArrayOfSalesInvoiceLine
     */
    public function getLines()
    {
      return $this->Lines;
    }

    /**
     * @param ArrayOfSalesInvoiceLine $Lines
     * @return SalesInvoice
     */
    public function setLines($Lines)
    {
      $this->Lines = $Lines;
      return $this;
    }

    /**
     * @return MoneyAmount
     */
    public function getPaymentAmount()
    {
      return $this->PaymentAmount;
    }

    /**
     * @param MoneyAmount $PaymentAmount
     * @return SalesInvoice
     */
    public function setPaymentAmount($PaymentAmount)
    {
      $this->PaymentAmount = $PaymentAmount;
      return $this;
    }

    /**
     * @return ArrayOfSalesPayment
     */
    public function getPayments()
    {
      return $this->Payments;
    }

    /**
     * @param ArrayOfSalesPayment $Payments
     * @return SalesInvoice
     */
    public function setPayments($Payments)
    {
      $this->Payments = $Payments;
      return $this;
    }

    /**
     * @return string
     */
    public function getPostedBy()
    {
      return $this->PostedBy;
    }

    /**
     * @param string $PostedBy
     * @return SalesInvoice
     */
    public function setPostedBy($PostedBy)
    {
      $this->PostedBy = $PostedBy;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getPostedDate()
    {
      if ($this->PostedDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->PostedDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $PostedDate
     * @return SalesInvoice
     */
    public function setPostedDate(\DateTime $PostedDate = null)
    {
      if ($PostedDate == null) {
       $this->PostedDate = null;
      } else {
        $this->PostedDate = $PostedDate->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return SalesTerms
     */
    public function getTerms()
    {
      return $this->Terms;
    }

    /**
     * @param SalesTerms $Terms
     * @return SalesInvoice
     */
    public function setTerms($Terms)
    {
      $this->Terms = $Terms;
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
     * @return SalesInvoice
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
     * @return SalesInvoice
     */
    public function setWorkflows($Workflows)
    {
      $this->Workflows = $Workflows;
      return $this;
    }

}
