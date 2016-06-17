<?php

class ProjectBudgetSummary
{

    /**
     * @var MoneyAmount $ForecastBillableAmount
     */
    protected $ForecastBillableAmount = null;

    /**
     * @var Quantity $ForecastQuantity
     */
    protected $ForecastQuantity = null;

    /**
     * @var MoneyAmount $ForecastTotalCost
     */
    protected $ForecastTotalCost = null;

    /**
     * @var ProjectBudgetKey $Key
     */
    protected $Key = null;

    /**
     * @var MoneyAmount $PostedBillableAmount
     */
    protected $PostedBillableAmount = null;

    /**
     * @var Quantity $PostedQuantity
     */
    protected $PostedQuantity = null;

    /**
     * @var MoneyAmount $PostedTotalCost
     */
    protected $PostedTotalCost = null;

    /**
     * @var ProfitType $ProfitType
     */
    protected $ProfitType = null;

    /**
     * @var MoneyAmount $ProjectAmount
     */
    protected $ProjectAmount = null;

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
    public function getForecastBillableAmount()
    {
      return $this->ForecastBillableAmount;
    }

    /**
     * @param MoneyAmount $ForecastBillableAmount
     * @return ProjectBudgetSummary
     */
    public function setForecastBillableAmount($ForecastBillableAmount)
    {
      $this->ForecastBillableAmount = $ForecastBillableAmount;
      return $this;
    }

    /**
     * @return Quantity
     */
    public function getForecastQuantity()
    {
      return $this->ForecastQuantity;
    }

    /**
     * @param Quantity $ForecastQuantity
     * @return ProjectBudgetSummary
     */
    public function setForecastQuantity($ForecastQuantity)
    {
      $this->ForecastQuantity = $ForecastQuantity;
      return $this;
    }

    /**
     * @return MoneyAmount
     */
    public function getForecastTotalCost()
    {
      return $this->ForecastTotalCost;
    }

    /**
     * @param MoneyAmount $ForecastTotalCost
     * @return ProjectBudgetSummary
     */
    public function setForecastTotalCost($ForecastTotalCost)
    {
      $this->ForecastTotalCost = $ForecastTotalCost;
      return $this;
    }

    /**
     * @return ProjectBudgetKey
     */
    public function getKey()
    {
      return $this->Key;
    }

    /**
     * @param ProjectBudgetKey $Key
     * @return ProjectBudgetSummary
     */
    public function setKey($Key)
    {
      $this->Key = $Key;
      return $this;
    }

    /**
     * @return MoneyAmount
     */
    public function getPostedBillableAmount()
    {
      return $this->PostedBillableAmount;
    }

    /**
     * @param MoneyAmount $PostedBillableAmount
     * @return ProjectBudgetSummary
     */
    public function setPostedBillableAmount($PostedBillableAmount)
    {
      $this->PostedBillableAmount = $PostedBillableAmount;
      return $this;
    }

    /**
     * @return Quantity
     */
    public function getPostedQuantity()
    {
      return $this->PostedQuantity;
    }

    /**
     * @param Quantity $PostedQuantity
     * @return ProjectBudgetSummary
     */
    public function setPostedQuantity($PostedQuantity)
    {
      $this->PostedQuantity = $PostedQuantity;
      return $this;
    }

    /**
     * @return MoneyAmount
     */
    public function getPostedTotalCost()
    {
      return $this->PostedTotalCost;
    }

    /**
     * @param MoneyAmount $PostedTotalCost
     * @return ProjectBudgetSummary
     */
    public function setPostedTotalCost($PostedTotalCost)
    {
      $this->PostedTotalCost = $PostedTotalCost;
      return $this;
    }

    /**
     * @return ProfitType
     */
    public function getProfitType()
    {
      return $this->ProfitType;
    }

    /**
     * @param ProfitType $ProfitType
     * @return ProjectBudgetSummary
     */
    public function setProfitType($ProfitType)
    {
      $this->ProfitType = $ProfitType;
      return $this;
    }

    /**
     * @return MoneyAmount
     */
    public function getProjectAmount()
    {
      return $this->ProjectAmount;
    }

    /**
     * @param MoneyAmount $ProjectAmount
     * @return ProjectBudgetSummary
     */
    public function setProjectAmount($ProjectAmount)
    {
      $this->ProjectAmount = $ProjectAmount;
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
     * @return ProjectBudgetSummary
     */
    public function setStatus($Status)
    {
      $this->Status = $Status;
      return $this;
    }

}
