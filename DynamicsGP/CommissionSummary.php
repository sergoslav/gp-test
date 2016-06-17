<?php

class CommissionSummary extends BusinessObject
{

    /**
     * @var MoneyAmount $CommissionedSales
     */
    protected $CommissionedSales = null;

    /**
     * @var MoneyAmount $CostOfSales
     */
    protected $CostOfSales = null;

    /**
     * @var MoneyAmount $NoncommissionedSales
     */
    protected $NoncommissionedSales = null;

    /**
     * @var MoneyAmount $TotalCommissionsAmount
     */
    protected $TotalCommissionsAmount = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return MoneyAmount
     */
    public function getCommissionedSales()
    {
      return $this->CommissionedSales;
    }

    /**
     * @param MoneyAmount $CommissionedSales
     * @return CommissionSummary
     */
    public function setCommissionedSales($CommissionedSales)
    {
      $this->CommissionedSales = $CommissionedSales;
      return $this;
    }

    /**
     * @return MoneyAmount
     */
    public function getCostOfSales()
    {
      return $this->CostOfSales;
    }

    /**
     * @param MoneyAmount $CostOfSales
     * @return CommissionSummary
     */
    public function setCostOfSales($CostOfSales)
    {
      $this->CostOfSales = $CostOfSales;
      return $this;
    }

    /**
     * @return MoneyAmount
     */
    public function getNoncommissionedSales()
    {
      return $this->NoncommissionedSales;
    }

    /**
     * @param MoneyAmount $NoncommissionedSales
     * @return CommissionSummary
     */
    public function setNoncommissionedSales($NoncommissionedSales)
    {
      $this->NoncommissionedSales = $NoncommissionedSales;
      return $this;
    }

    /**
     * @return MoneyAmount
     */
    public function getTotalCommissionsAmount()
    {
      return $this->TotalCommissionsAmount;
    }

    /**
     * @param MoneyAmount $TotalCommissionsAmount
     * @return CommissionSummary
     */
    public function setTotalCommissionsAmount($TotalCommissionsAmount)
    {
      $this->TotalCommissionsAmount = $TotalCommissionsAmount;
      return $this;
    }

}
