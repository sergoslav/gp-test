<?php

class ProjectEmployeeExpenseLineTaxKey extends Key
{

    /**
     * @var int $LineSequenceNumber
     */
    protected $LineSequenceNumber = null;

    /**
     * @var ProjectEmployeeExpenseKey $ProjectEmployeeExpenseKey
     */
    protected $ProjectEmployeeExpenseKey = null;

    /**
     * @var TaxDetailKey $TaxDetailKey
     */
    protected $TaxDetailKey = null;

    /**
     * @var ProjectTransactionType $TransactionType
     */
    protected $TransactionType = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return int
     */
    public function getLineSequenceNumber()
    {
      return $this->LineSequenceNumber;
    }

    /**
     * @param int $LineSequenceNumber
     * @return ProjectEmployeeExpenseLineTaxKey
     */
    public function setLineSequenceNumber($LineSequenceNumber)
    {
      $this->LineSequenceNumber = $LineSequenceNumber;
      return $this;
    }

    /**
     * @return ProjectEmployeeExpenseKey
     */
    public function getProjectEmployeeExpenseKey()
    {
      return $this->ProjectEmployeeExpenseKey;
    }

    /**
     * @param ProjectEmployeeExpenseKey $ProjectEmployeeExpenseKey
     * @return ProjectEmployeeExpenseLineTaxKey
     */
    public function setProjectEmployeeExpenseKey($ProjectEmployeeExpenseKey)
    {
      $this->ProjectEmployeeExpenseKey = $ProjectEmployeeExpenseKey;
      return $this;
    }

    /**
     * @return TaxDetailKey
     */
    public function getTaxDetailKey()
    {
      return $this->TaxDetailKey;
    }

    /**
     * @param TaxDetailKey $TaxDetailKey
     * @return ProjectEmployeeExpenseLineTaxKey
     */
    public function setTaxDetailKey($TaxDetailKey)
    {
      $this->TaxDetailKey = $TaxDetailKey;
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
     * @return ProjectEmployeeExpenseLineTaxKey
     */
    public function setTransactionType($TransactionType)
    {
      $this->TransactionType = $TransactionType;
      return $this;
    }

}
