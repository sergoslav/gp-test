<?php

class ProjectSummary
{

    /**
     * @var ProjectAccountingMethod $AccountingMethod
     */
    protected $AccountingMethod = null;

    /**
     * @var CustomerKey $CustomerKey
     */
    protected $CustomerKey = null;

    /**
     * @var MoneyAmount $ForecastProfitAmount
     */
    protected $ForecastProfitAmount = null;

    /**
     * @var MoneyAmount $ForecastTotalCost
     */
    protected $ForecastTotalCost = null;

    /**
     * @var ProjectKey $Key
     */
    protected $Key = null;

    /**
     * @var string $Name
     */
    protected $Name = null;

    /**
     * @var MoneyAmount $PostedProfitAmount
     */
    protected $PostedProfitAmount = null;

    /**
     * @var MoneyAmount $PostedTotalCost
     */
    protected $PostedTotalCost = null;

    /**
     * @var ProjectClassKey $ProjectClassKey
     */
    protected $ProjectClassKey = null;

    /**
     * @var ProjectContractKey $ProjectContractKey
     */
    protected $ProjectContractKey = null;

    /**
     * @var string $ProjectId
     */
    protected $ProjectId = null;

    /**
     * @var EmployeeKey $ProjectManagerKey
     */
    protected $ProjectManagerKey = null;

    /**
     * @var ProjectStatus $Status
     */
    protected $Status = null;

    /**
     * @var ProjectType $Type
     */
    protected $Type = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ProjectAccountingMethod
     */
    public function getAccountingMethod()
    {
      return $this->AccountingMethod;
    }

    /**
     * @param ProjectAccountingMethod $AccountingMethod
     * @return ProjectSummary
     */
    public function setAccountingMethod($AccountingMethod)
    {
      $this->AccountingMethod = $AccountingMethod;
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
     * @return ProjectSummary
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
     * @return ProjectSummary
     */
    public function setForecastProfitAmount($ForecastProfitAmount)
    {
      $this->ForecastProfitAmount = $ForecastProfitAmount;
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
     * @return ProjectSummary
     */
    public function setForecastTotalCost($ForecastTotalCost)
    {
      $this->ForecastTotalCost = $ForecastTotalCost;
      return $this;
    }

    /**
     * @return ProjectKey
     */
    public function getKey()
    {
      return $this->Key;
    }

    /**
     * @param ProjectKey $Key
     * @return ProjectSummary
     */
    public function setKey($Key)
    {
      $this->Key = $Key;
      return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
      return $this->Name;
    }

    /**
     * @param string $Name
     * @return ProjectSummary
     */
    public function setName($Name)
    {
      $this->Name = $Name;
      return $this;
    }

    /**
     * @return MoneyAmount
     */
    public function getPostedProfitAmount()
    {
      return $this->PostedProfitAmount;
    }

    /**
     * @param MoneyAmount $PostedProfitAmount
     * @return ProjectSummary
     */
    public function setPostedProfitAmount($PostedProfitAmount)
    {
      $this->PostedProfitAmount = $PostedProfitAmount;
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
     * @return ProjectSummary
     */
    public function setPostedTotalCost($PostedTotalCost)
    {
      $this->PostedTotalCost = $PostedTotalCost;
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
     * @return ProjectSummary
     */
    public function setProjectClassKey($ProjectClassKey)
    {
      $this->ProjectClassKey = $ProjectClassKey;
      return $this;
    }

    /**
     * @return ProjectContractKey
     */
    public function getProjectContractKey()
    {
      return $this->ProjectContractKey;
    }

    /**
     * @param ProjectContractKey $ProjectContractKey
     * @return ProjectSummary
     */
    public function setProjectContractKey($ProjectContractKey)
    {
      $this->ProjectContractKey = $ProjectContractKey;
      return $this;
    }

    /**
     * @return string
     */
    public function getProjectId()
    {
      return $this->ProjectId;
    }

    /**
     * @param string $ProjectId
     * @return ProjectSummary
     */
    public function setProjectId($ProjectId)
    {
      $this->ProjectId = $ProjectId;
      return $this;
    }

    /**
     * @return EmployeeKey
     */
    public function getProjectManagerKey()
    {
      return $this->ProjectManagerKey;
    }

    /**
     * @param EmployeeKey $ProjectManagerKey
     * @return ProjectSummary
     */
    public function setProjectManagerKey($ProjectManagerKey)
    {
      $this->ProjectManagerKey = $ProjectManagerKey;
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
     * @return ProjectSummary
     */
    public function setStatus($Status)
    {
      $this->Status = $Status;
      return $this;
    }

    /**
     * @return ProjectType
     */
    public function getType()
    {
      return $this->Type;
    }

    /**
     * @param ProjectType $Type
     * @return ProjectSummary
     */
    public function setType($Type)
    {
      $this->Type = $Type;
      return $this;
    }

}
