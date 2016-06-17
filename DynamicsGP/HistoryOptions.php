<?php

class HistoryOptions
{

    /**
     * @var boolean $KeepCalendarHistory
     */
    protected $KeepCalendarHistory = null;

    /**
     * @var boolean $KeepDistributionHistory
     */
    protected $KeepDistributionHistory = null;

    /**
     * @var boolean $KeepFiscalHistory
     */
    protected $KeepFiscalHistory = null;

    /**
     * @var boolean $KeepTransactionHistory
     */
    protected $KeepTransactionHistory = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return boolean
     */
    public function getKeepCalendarHistory()
    {
      return $this->KeepCalendarHistory;
    }

    /**
     * @param boolean $KeepCalendarHistory
     * @return HistoryOptions
     */
    public function setKeepCalendarHistory($KeepCalendarHistory)
    {
      $this->KeepCalendarHistory = $KeepCalendarHistory;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getKeepDistributionHistory()
    {
      return $this->KeepDistributionHistory;
    }

    /**
     * @param boolean $KeepDistributionHistory
     * @return HistoryOptions
     */
    public function setKeepDistributionHistory($KeepDistributionHistory)
    {
      $this->KeepDistributionHistory = $KeepDistributionHistory;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getKeepFiscalHistory()
    {
      return $this->KeepFiscalHistory;
    }

    /**
     * @param boolean $KeepFiscalHistory
     * @return HistoryOptions
     */
    public function setKeepFiscalHistory($KeepFiscalHistory)
    {
      $this->KeepFiscalHistory = $KeepFiscalHistory;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getKeepTransactionHistory()
    {
      return $this->KeepTransactionHistory;
    }

    /**
     * @param boolean $KeepTransactionHistory
     * @return HistoryOptions
     */
    public function setKeepTransactionHistory($KeepTransactionHistory)
    {
      $this->KeepTransactionHistory = $KeepTransactionHistory;
      return $this;
    }

}
