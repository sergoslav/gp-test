<?php

class ProjectContractActual extends ProjectAmount
{

    /**
     * @var \DateTime $BeginDate
     */
    protected $BeginDate = null;

    /**
     * @var MoneyAmount $BilledRetentionAmount
     */
    protected $BilledRetentionAmount = null;

    /**
     * @var MoneyAmount $CommittedPOCost
     */
    protected $CommittedPOCost = null;

    /**
     * @var Quantity $CommittedPOQuantity
     */
    protected $CommittedPOQuantity = null;

    /**
     * @var MoneyAmount $CommittedPOTaxAmount
     */
    protected $CommittedPOTaxAmount = null;

    /**
     * @var MoneyAmount $CostOfEarningsAmount
     */
    protected $CostOfEarningsAmount = null;

    /**
     * @var MoneyAmount $EarningsAmount
     */
    protected $EarningsAmount = null;

    /**
     * @var \DateTime $EndDate
     */
    protected $EndDate = null;

    /**
     * @var MoneyAmount $LossAmount
     */
    protected $LossAmount = null;

    /**
     * @var MoneyAmount $POCosts
     */
    protected $POCosts = null;

    /**
     * @var Quantity $POQuantity
     */
    protected $POQuantity = null;

    /**
     * @var MoneyAmount $ProjectFeeAmount
     */
    protected $ProjectFeeAmount = null;

    /**
     * @var MoneyAmount $ReceiptsAmount
     */
    protected $ReceiptsAmount = null;

    /**
     * @var MoneyAmount $RetainerFeeAmount
     */
    protected $RetainerFeeAmount = null;

    /**
     * @var MoneyAmount $RetentionAmount
     */
    protected $RetentionAmount = null;

    /**
     * @var MoneyAmount $ServiceFeeAmount
     */
    protected $ServiceFeeAmount = null;

    
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
     * @return ProjectContractActual
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
    public function getBilledRetentionAmount()
    {
      return $this->BilledRetentionAmount;
    }

    /**
     * @param MoneyAmount $BilledRetentionAmount
     * @return ProjectContractActual
     */
    public function setBilledRetentionAmount($BilledRetentionAmount)
    {
      $this->BilledRetentionAmount = $BilledRetentionAmount;
      return $this;
    }

    /**
     * @return MoneyAmount
     */
    public function getCommittedPOCost()
    {
      return $this->CommittedPOCost;
    }

    /**
     * @param MoneyAmount $CommittedPOCost
     * @return ProjectContractActual
     */
    public function setCommittedPOCost($CommittedPOCost)
    {
      $this->CommittedPOCost = $CommittedPOCost;
      return $this;
    }

    /**
     * @return Quantity
     */
    public function getCommittedPOQuantity()
    {
      return $this->CommittedPOQuantity;
    }

    /**
     * @param Quantity $CommittedPOQuantity
     * @return ProjectContractActual
     */
    public function setCommittedPOQuantity($CommittedPOQuantity)
    {
      $this->CommittedPOQuantity = $CommittedPOQuantity;
      return $this;
    }

    /**
     * @return MoneyAmount
     */
    public function getCommittedPOTaxAmount()
    {
      return $this->CommittedPOTaxAmount;
    }

    /**
     * @param MoneyAmount $CommittedPOTaxAmount
     * @return ProjectContractActual
     */
    public function setCommittedPOTaxAmount($CommittedPOTaxAmount)
    {
      $this->CommittedPOTaxAmount = $CommittedPOTaxAmount;
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
     * @return ProjectContractActual
     */
    public function setCostOfEarningsAmount($CostOfEarningsAmount)
    {
      $this->CostOfEarningsAmount = $CostOfEarningsAmount;
      return $this;
    }

    /**
     * @return MoneyAmount
     */
    public function getEarningsAmount()
    {
      return $this->EarningsAmount;
    }

    /**
     * @param MoneyAmount $EarningsAmount
     * @return ProjectContractActual
     */
    public function setEarningsAmount($EarningsAmount)
    {
      $this->EarningsAmount = $EarningsAmount;
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
     * @return ProjectContractActual
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
     * @return ProjectContractActual
     */
    public function setLossAmount($LossAmount)
    {
      $this->LossAmount = $LossAmount;
      return $this;
    }

    /**
     * @return MoneyAmount
     */
    public function getPOCosts()
    {
      return $this->POCosts;
    }

    /**
     * @param MoneyAmount $POCosts
     * @return ProjectContractActual
     */
    public function setPOCosts($POCosts)
    {
      $this->POCosts = $POCosts;
      return $this;
    }

    /**
     * @return Quantity
     */
    public function getPOQuantity()
    {
      return $this->POQuantity;
    }

    /**
     * @param Quantity $POQuantity
     * @return ProjectContractActual
     */
    public function setPOQuantity($POQuantity)
    {
      $this->POQuantity = $POQuantity;
      return $this;
    }

    /**
     * @return MoneyAmount
     */
    public function getProjectFeeAmount()
    {
      return $this->ProjectFeeAmount;
    }

    /**
     * @param MoneyAmount $ProjectFeeAmount
     * @return ProjectContractActual
     */
    public function setProjectFeeAmount($ProjectFeeAmount)
    {
      $this->ProjectFeeAmount = $ProjectFeeAmount;
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
     * @return ProjectContractActual
     */
    public function setReceiptsAmount($ReceiptsAmount)
    {
      $this->ReceiptsAmount = $ReceiptsAmount;
      return $this;
    }

    /**
     * @return MoneyAmount
     */
    public function getRetainerFeeAmount()
    {
      return $this->RetainerFeeAmount;
    }

    /**
     * @param MoneyAmount $RetainerFeeAmount
     * @return ProjectContractActual
     */
    public function setRetainerFeeAmount($RetainerFeeAmount)
    {
      $this->RetainerFeeAmount = $RetainerFeeAmount;
      return $this;
    }

    /**
     * @return MoneyAmount
     */
    public function getRetentionAmount()
    {
      return $this->RetentionAmount;
    }

    /**
     * @param MoneyAmount $RetentionAmount
     * @return ProjectContractActual
     */
    public function setRetentionAmount($RetentionAmount)
    {
      $this->RetentionAmount = $RetentionAmount;
      return $this;
    }

    /**
     * @return MoneyAmount
     */
    public function getServiceFeeAmount()
    {
      return $this->ServiceFeeAmount;
    }

    /**
     * @param MoneyAmount $ServiceFeeAmount
     * @return ProjectContractActual
     */
    public function setServiceFeeAmount($ServiceFeeAmount)
    {
      $this->ServiceFeeAmount = $ServiceFeeAmount;
      return $this;
    }

}
