<?php

class ProjectContractSummary
{

    /**
     * @var MoneyAmount $ActualCostOfEarningsAmount
     */
    protected $ActualCostOfEarningsAmount = null;

    /**
     * @var MoneyAmount $ActualEarningsAmount
     */
    protected $ActualEarningsAmount = null;

    /**
     * @var MoneyAmount $ActualProfitAmount
     */
    protected $ActualProfitAmount = null;

    /**
     * @var MoneyAmount $ActualTotalCost
     */
    protected $ActualTotalCost = null;

    /**
     * @var EmployeeKey $BusinessManagerKey
     */
    protected $BusinessManagerKey = null;

    /**
     * @var CustomerKey $CustomerKey
     */
    protected $CustomerKey = null;

    /**
     * @var MoneyAmount $ForecastProfitAmount
     */
    protected $ForecastProfitAmount = null;

    /**
     * @var ProjectContractKey $Key
     */
    protected $Key = null;

    /**
     * @var ProjectClassKey $ProjectClassKey
     */
    protected $ProjectClassKey = null;

    /**
     * @var ProjectStatus $Status
     */
    protected $Status = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return MoneyAmount
     */
    public function getActualCostOfEarningsAmount()
    {
      return $this->ActualCostOfEarningsAmount;
    }

    /**
     * @param MoneyAmount $ActualCostOfEarningsAmount
     * @return ProjectContractSummary
     */
    public function setActualCostOfEarningsAmount($ActualCostOfEarningsAmount)
    {
      $this->ActualCostOfEarningsAmount = $ActualCostOfEarningsAmount;
      return $this;
    }

    /**
     * @return MoneyAmount
     */
    public function getActualEarningsAmount()
    {
      return $this->ActualEarningsAmount;
    }

    /**
     * @param MoneyAmount $ActualEarningsAmount
     * @return ProjectContractSummary
     */
    public function setActualEarningsAmount($ActualEarningsAmount)
    {
      $this->ActualEarningsAmount = $ActualEarningsAmount;
      return $this;
    }

    /**
     * @return MoneyAmount
     */
    public function getActualProfitAmount()
    {
      return $this->ActualProfitAmount;
    }

    /**
     * @param MoneyAmount $ActualProfitAmount
     * @return ProjectContractSummary
     */
    public function setActualProfitAmount($ActualProfitAmount)
    {
      $this->ActualProfitAmount = $ActualProfitAmount;
      return $this;
    }

    /**
     * @return MoneyAmount
     */
    public function getActualTotalCost()
    {
      return $this->ActualTotalCost;
    }

    /**
     * @param MoneyAmount $ActualTotalCost
     * @return ProjectContractSummary
     */
    public function setActualTotalCost($ActualTotalCost)
    {
      $this->ActualTotalCost = $ActualTotalCost;
      return $this;
    }

    /**
     * @return EmployeeKey
     */
    public function getBusinessManagerKey()
    {
      return $this->BusinessManagerKey;
    }

    /**
     * @param EmployeeKey $BusinessManagerKey
     * @return ProjectContractSummary
     */
    public function setBusinessManagerKey($BusinessManagerKey)
    {
      $this->BusinessManagerKey = $BusinessManagerKey;
      return $this;
    }

    /**
     * @return CustomerKey
     */
    public function getCustomerKey()
    {
      return $this->CustomerKey;
    }

    /**
     * @param CustomerKey $CustomerKey
     * @return ProjectContractSummary
     */
    public function setCustomerKey($CustomerKey)
    {
      $this->CustomerKey = $CustomerKey;
      return $this;
    }

    /**
     * @return MoneyAmount
     */
    public function getForecastProfitAmount()
    {
      return $this->ForecastProfitAmount;
    }

    /**
     * @param MoneyAmount $ForecastProfitAmount
     * @return ProjectContractSummary
     */
    public function setForecastProfitAmount($ForecastProfitAmount)
    {
      $this->ForecastProfitAmount = $ForecastProfitAmount;
      return $this;
    }

    /**
     * @return ProjectContractKey
     */
    public function getKey()
    {
      return $this->Key;
    }

    /**
     * @param ProjectContractKey $Key
     * @return ProjectContractSummary
     */
    public function setKey($Key)
    {
      $this->Key = $Key;
      return $this;
    }

    /**
     * @return ProjectClassKey
     */
    public function getProjectClassKey()
    {
      return $this->ProjectClassKey;
    }

    /**
     * @param ProjectClassKey $ProjectClassKey
     * @return ProjectContractSummary
     */
    public function setProjectClassKey($ProjectClassKey)
    {
      $this->ProjectClassKey = $ProjectClassKey;
      return $this;
    }

    /**
     * @return ProjectStatus
     */
    public function getStatus()
    {
      return $this->Status;
    }

    /**
     * @param ProjectStatus $Status
     * @return ProjectContractSummary
     */
    public function setStatus($Status)
    {
      $this->Status = $Status;
      return $this;
    }

}
