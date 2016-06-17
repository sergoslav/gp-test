<?php

class GLTransactionPostedKey extends GLTransactionKey
{

    /**
     * @var int $FiscalYear
     */
    protected $FiscalYear = null;

    /**
     * @var int $RecurringTransactionSequence
     */
    protected $RecurringTransactionSequence = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return int
     */
    public function getFiscalYear()
    {
      return $this->FiscalYear;
    }

    /**
     * @param int $FiscalYear
     * @return GLTransactionPostedKey
     */
    public function setFiscalYear($FiscalYear)
    {
      $this->FiscalYear = $FiscalYear;
      return $this;
    }

    /**
     * @return int
     */
    public function getRecurringTransactionSequence()
    {
      return $this->RecurringTransactionSequence;
    }

    /**
     * @param int $RecurringTransactionSequence
     * @return GLTransactionPostedKey
     */
    public function setRecurringTransactionSequence($RecurringTransactionSequence)
    {
      $this->RecurringTransactionSequence = $RecurringTransactionSequence;
      return $this;
    }

}
