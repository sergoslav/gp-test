<?php

class ProjectBudgetBase
{

    /**
     * @var \DateTime $BeginDate
     */
    protected $BeginDate = null;

    /**
     * @var MoneyAmount $BillableAmount
     */
    protected $BillableAmount = null;

    /**
     * @var \DateTime $EndDate
     */
    protected $EndDate = null;

    /**
     * @var MoneyAmount $OverheadCost
     */
    protected $OverheadCost = null;

    /**
     * @var MoneyAmount $ProfitAmount
     */
    protected $ProfitAmount = null;

    /**
     * @var Quantity $Quantity
     */
    protected $Quantity = null;

    /**
     * @var MoneyAmount $TaxAmount
     */
    protected $TaxAmount = null;

    /**
     * @var MoneyAmount $TotalCost
     */
    protected $TotalCost = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return \DateTime
     */
    public function getBeginDate()
    {
      if ($this->BeginDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->BeginDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $BeginDate
     * @return ProjectBudgetBase
     */
    public function setBeginDate(\DateTime $BeginDate = null)
    {
      if ($BeginDate == null) {
       $this->BeginDate = null;
      } else {
        $this->BeginDate = $BeginDate->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return MoneyAmount
     */
    public function getBillableAmount()
    {
      return $this->BillableAmount;
    }

    /**
     * @param MoneyAmount $BillableAmount
     * @return ProjectBudgetBase
     */
    public function setBillableAmount($BillableAmount)
    {
      $this->BillableAmount = $BillableAmount;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getEndDate()
    {
      if ($this->EndDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->EndDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $EndDate
     * @return ProjectBudgetBase
     */
    public function setEndDate(\DateTime $EndDate = null)
    {
      if ($EndDate == null) {
       $this->EndDate = null;
      } else {
        $this->EndDate = $EndDate->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return MoneyAmount
     */
    public function getOverheadCost()
    {
      return $this->OverheadCost;
    }

    /**
     * @param MoneyAmount $OverheadCost
     * @return ProjectBudgetBase
     */
    public function setOverheadCost($OverheadCost)
    {
      $this->OverheadCost = $OverheadCost;
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
     * @return ProjectBudgetBase
     */
    public function setProfitAmount($ProfitAmount)
    {
      $this->ProfitAmount = $ProfitAmount;
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
     * @return ProjectBudgetBase
     */
    public function setQuantity($Quantity)
    {
      $this->Quantity = $Quantity;
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
     * @return ProjectBudgetBase
     */
    public function setTaxAmount($TaxAmount)
    {
      $this->TaxAmount = $TaxAmount;
      return $this;
    }

    /**
     * @return MoneyAmount
     */
    public function getTotalCost()
    {
      return $this->TotalCost;
    }

    /**
     * @param MoneyAmount $TotalCost
     * @return ProjectBudgetBase
     */
    public function setTotalCost($TotalCost)
    {
      $this->TotalCost = $TotalCost;
      return $this;
    }

}
