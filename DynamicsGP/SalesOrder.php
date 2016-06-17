<?php

class SalesOrder extends SalesDocument
{

    /**
     * @var int $DaysToIncrement
     */
    protected $DaysToIncrement = null;

    /**
     * @var MoneyAmount $DepositAmount
     */
    protected $DepositAmount = null;

    /**
     * @var Frequency $DocumentFrequency
     */
    protected $DocumentFrequency = null;

    /**
     * @var boolean $IsRepeating
     */
    protected $IsRepeating = null;

    /**
     * @var ArrayOfSalesOrderLine $Lines
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
     * @var ShippingProcessStatus $ShippingProcessStatus
     */
    protected $ShippingProcessStatus = null;

    /**
     * @var int $TimesToRepeat
     */
    protected $TimesToRepeat = null;

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
     * @return int
     */
    public function getDaysToIncrement()
    {
      return $this->DaysToIncrement;
    }

    /**
     * @param int $DaysToIncrement
     * @return SalesOrder
     */
    public function setDaysToIncrement($DaysToIncrement)
    {
      $this->DaysToIncrement = $DaysToIncrement;
      return $this;
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
     * @return SalesOrder
     */
    public function setDepositAmount($DepositAmount)
    {
      $this->DepositAmount = $DepositAmount;
      return $this;
    }

    /**
     * @return Frequency
     */
    public function getDocumentFrequency()
    {
      return $this->DocumentFrequency;
    }

    /**
     * @param Frequency $DocumentFrequency
     * @return SalesOrder
     */
    public function setDocumentFrequency($DocumentFrequency)
    {
      $this->DocumentFrequency = $DocumentFrequency;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsRepeating()
    {
      return $this->IsRepeating;
    }

    /**
     * @param boolean $IsRepeating
     * @return SalesOrder
     */
    public function setIsRepeating($IsRepeating)
    {
      $this->IsRepeating = $IsRepeating;
      return $this;
    }

    /**
     * @return ArrayOfSalesOrderLine
     */
    public function getLines()
    {
      return $this->Lines;
    }

    /**
     * @param ArrayOfSalesOrderLine $Lines
     * @return SalesOrder
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
     * @return SalesOrder
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
     * @return SalesOrder
     */
    public function setPayments($Payments)
    {
      $this->Payments = $Payments;
      return $this;
    }

    /**
     * @return ShippingProcessStatus
     */
    public function getShippingProcessStatus()
    {
      return $this->ShippingProcessStatus;
    }

    /**
     * @param ShippingProcessStatus $ShippingProcessStatus
     * @return SalesOrder
     */
    public function setShippingProcessStatus($ShippingProcessStatus)
    {
      $this->ShippingProcessStatus = $ShippingProcessStatus;
      return $this;
    }

    /**
     * @return int
     */
    public function getTimesToRepeat()
    {
      return $this->TimesToRepeat;
    }

    /**
     * @param int $TimesToRepeat
     * @return SalesOrder
     */
    public function setTimesToRepeat($TimesToRepeat)
    {
      $this->TimesToRepeat = $TimesToRepeat;
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
     * @return SalesOrder
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
     * @return SalesOrder
     */
    public function setWorkflows($Workflows)
    {
      $this->Workflows = $Workflows;
      return $this;
    }

}
