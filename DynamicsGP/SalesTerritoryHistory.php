<?php

class SalesTerritoryHistory extends BusinessObject
{

    /**
     * @var CommissionSummary $CommissionSummary
     */
    protected $CommissionSummary = null;

    /**
     * @var SalesTerritoryHistoryKey $Key
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
     * @return SalesTerritoryHistory
     */
    public function setCommissionSummary($CommissionSummary)
    {
      $this->CommissionSummary = $CommissionSummary;
      return $this;
    }

    /**
     * @return SalesTerritoryHistoryKey
     */
    public function getKey()
    {
      return $this->Key;
    }

    /**
     * @param SalesTerritoryHistoryKey $Key
     * @return SalesTerritoryHistory
     */
    public function setKey($Key)
    {
      $this->Key = $Key;
      return $this;
    }

}
