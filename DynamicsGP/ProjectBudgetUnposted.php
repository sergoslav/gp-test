<?php

class ProjectBudgetUnposted extends ProjectUnpostedBase
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
     * @var \DateTime $EndDate
     */
    protected $EndDate = null;

    
    public function __construct()
    {
      parent::__construct();
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
     * @return ProjectBudgetUnposted
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
     * @return ProjectBudgetUnposted
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
     * @return ProjectBudgetUnposted
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
     * @return ProjectBudgetUnposted
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
     * @return ProjectBudgetUnposted
     */
    public function setCommittedTaxAmount($CommittedTaxAmount)
    {
      $this->CommittedTaxAmount = $CommittedTaxAmount;
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
     * @return ProjectBudgetUnposted
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

}
