<?php

class SalespersonHistory extends BusinessObject
{

    /**
     * @var CommissionSummary $CommissionSummary
     */
    protected $CommissionSummary = null;

    /**
     * @var SalespersonHistoryKey $Key
     */
    protected $Key = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return CommissionSummary
     */
    public function getCommissionSummary()
    {
      return $this->CommissionSummary;
    }

    /**
     * @param CommissionSummary $CommissionSummary
     * @return SalespersonHistory
     */
    public function setCommissionSummary($CommissionSummary)
    {
      $this->CommissionSummary = $CommissionSummary;
      return $this;
    }

    /**
     * @return SalespersonHistoryKey
     */
    public function getKey()
    {
      return $this->Key;
    }

    /**
     * @param SalespersonHistoryKey $Key
     * @return SalespersonHistory
     */
    public function setKey($Key)
    {
      $this->Key = $Key;
      return $this;
    }

}
