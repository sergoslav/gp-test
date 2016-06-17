<?php

class ProjectBilling
{

    /**
     * @var MoneyAmount $Amount
     */
    protected $Amount = null;

    /**
     * @var MoneyAmount $ProfitAmount
     */
    protected $ProfitAmount = null;

    /**
     * @var Percent $ProfitPercent
     */
    protected $ProfitPercent = null;

    /**
     * @var Quantity $Quantity
     */
    protected $Quantity = null;

    /**
     * @var MoneyAmount $Rate
     */
    protected $Rate = null;

    /**
     * @var BillingStatus $Status
     */
    protected $Status = null;

    /**
     * @var MoneyAmount $TaxAmount
     */
    protected $TaxAmount = null;

    /**
     * @var BillingType $Type
     */
    protected $Type = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return MoneyAmount
     */
    public function getAmount()
    {
      return $this->Amount;
    }

    /**
     * @param MoneyAmount $Amount
     * @return ProjectBilling
     */
    public function setAmount($Amount)
    {
      $this->Amount = $Amount;
      return $this;
    }

    /**
     * @return MoneyAmount
     */
    public function getProfitAmount()
    {
      return $this->ProfitAmount;
    }

    /**
     * @param MoneyAmount $ProfitAmount
     * @return ProjectBilling
     */
    public function setProfitAmount($ProfitAmount)
    {
      $this->ProfitAmount = $ProfitAmount;
      return $this;
    }

    /**
     * @return Percent
     */
    public function getProfitPercent()
    {
      return $this->ProfitPercent;
    }

    /**
     * @param Percent $ProfitPercent
     * @return ProjectBilling
     */
    public function setProfitPercent($ProfitPercent)
    {
      $this->ProfitPercent = $ProfitPercent;
      return $this;
    }

    /**
     * @return Quantity
     */
    public function getQuantity()
    {
      return $this->Quantity;
    }

    /**
     * @param Quantity $Quantity
     * @return ProjectBilling
     */
    public function setQuantity($Quantity)
    {
      $this->Quantity = $Quantity;
      return $this;
    }

    /**
     * @return MoneyAmount
     */
    public function getRate()
    {
      return $this->Rate;
    }

    /**
     * @param MoneyAmount $Rate
     * @return ProjectBilling
     */
    public function setRate($Rate)
    {
      $this->Rate = $Rate;
      return $this;
    }

    /**
     * @return BillingStatus
     */
    public function getStatus()
    {
      return $this->Status;
    }

    /**
     * @param BillingStatus $Status
     * @return ProjectBilling
     */
    public function setStatus($Status)
    {
      $this->Status = $Status;
      return $this;
    }

    /**
     * @return MoneyAmount
     */
    public function getTaxAmount()
    {
      return $this->TaxAmount;
    }

    /**
     * @param MoneyAmount $TaxAmount
     * @return ProjectBilling
     */
    public function setTaxAmount($TaxAmount)
    {
      $this->TaxAmount = $TaxAmount;
      return $this;
    }

    /**
     * @return BillingType
     */
    public function getType()
    {
      return $this->Type;
    }

    /**
     * @param BillingType $Type
     * @return ProjectBilling
     */
    public function setType($Type)
    {
      $this->Type = $Type;
      return $this;
    }

}
