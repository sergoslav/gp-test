<?php

class ProjectBudgetPosted extends ProjectPostedBase
{

    /**
     * @var MoneyAmount $BillableAmount
     */
    protected $BillableAmount = null;

    /**
     * @var MoneyAmount $CommittedCost
     */
    protected $CommittedCost = null;

    /**
     * @var Quantity $CommittedQuantity
     */
    protected $CommittedQuantity = null;

    /**
     * @var MoneyAmount $CommittedTaxAmount
     */
    protected $CommittedTaxAmount = null;

    /**
     * @var MoneyAmount $TaxPaidAmount
     */
    protected $TaxPaidAmount = null;

    
    public function __construct()
    {
      parent::__construct();
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
     * @return ProjectBudgetPosted
     */
    public function setBillableAmount($BillableAmount)
    {
      $this->BillableAmount = $BillableAmount;
      return $this;
    }

    /**
     * @return MoneyAmount
     */
    public function getCommittedCost()
    {
      return $this->CommittedCost;
    }

    /**
     * @param MoneyAmount $CommittedCost
     * @return ProjectBudgetPosted
     */
    public function setCommittedCost($CommittedCost)
    {
      $this->CommittedCost = $CommittedCost;
      return $this;
    }

    /**
     * @return Quantity
     */
    public function getCommittedQuantity()
    {
      return $this->CommittedQuantity;
    }

    /**
     * @param Quantity $CommittedQuantity
     * @return ProjectBudgetPosted
     */
    public function setCommittedQuantity($CommittedQuantity)
    {
      $this->CommittedQuantity = $CommittedQuantity;
      return $this;
    }

    /**
     * @return MoneyAmount
     */
    public function getCommittedTaxAmount()
    {
      return $this->CommittedTaxAmount;
    }

    /**
     * @param MoneyAmount $CommittedTaxAmount
     * @return ProjectBudgetPosted
     */
    public function setCommittedTaxAmount($CommittedTaxAmount)
    {
      $this->CommittedTaxAmount = $CommittedTaxAmount;
      return $this;
    }

    /**
     * @return MoneyAmount
     */
    public function getTaxPaidAmount()
    {
      return $this->TaxPaidAmount;
    }

    /**
     * @param MoneyAmount $TaxPaidAmount
     * @return ProjectBudgetPosted
     */
    public function setTaxPaidAmount($TaxPaidAmount)
    {
      $this->TaxPaidAmount = $TaxPaidAmount;
      return $this;
    }

}
