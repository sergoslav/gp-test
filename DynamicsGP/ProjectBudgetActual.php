<?php

class ProjectBudgetActual
{

    /**
     * @var \DateTime $BeginDate
     */
    protected $BeginDate = null;

    /**
     * @var MoneyAmount $CostOfEarningsAmount
     */
    protected $CostOfEarningsAmount = null;

    /**
     * @var \DateTime $EndDate
     */
    protected $EndDate = null;

    /**
     * @var MoneyAmount $LossAmount
     */
    protected $LossAmount = null;

    /**
     * @var MoneyAmount $ReceiptsAmount
     */
    protected $ReceiptsAmount = null;

    /**
     * @var MoneyAmount $WriteoffAmount
     */
    protected $WriteoffAmount = null;

    
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
     * @return ProjectBudgetActual
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
    public function getCostOfEarningsAmount()
    {
      return $this->CostOfEarningsAmount;
    }

    /**
     * @param MoneyAmount $CostOfEarningsAmount
     * @return ProjectBudgetActual
     */
    public function setCostOfEarningsAmount($CostOfEarningsAmount)
    {
      $this->CostOfEarningsAmount = $CostOfEarningsAmount;
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
     * @return ProjectBudgetActual
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
    public function getLossAmount()
    {
      return $this->LossAmount;
    }

    /**
     * @param MoneyAmount $LossAmount
     * @return ProjectBudgetActual
     */
    public function setLossAmount($LossAmount)
    {
      $this->LossAmount = $LossAmount;
      return $this;
    }

    /**
     * @return MoneyAmount
     */
    public function getReceiptsAmount()
    {
      return $this->ReceiptsAmount;
    }

    /**
     * @param MoneyAmount $ReceiptsAmount
     * @return ProjectBudgetActual
     */
    public function setReceiptsAmount($ReceiptsAmount)
    {
      $this->ReceiptsAmount = $ReceiptsAmount;
      return $this;
    }

    /**
     * @return MoneyAmount
     */
    public function getWriteoffAmount()
    {
      return $this->WriteoffAmount;
    }

    /**
     * @param MoneyAmount $WriteoffAmount
     * @return ProjectBudgetActual
     */
    public function setWriteoffAmount($WriteoffAmount)
    {
      $this->WriteoffAmount = $WriteoffAmount;
      return $this;
    }

}
