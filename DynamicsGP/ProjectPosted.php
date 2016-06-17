<?php

class ProjectPosted extends ProjectPostedBase
{

    /**
     * @var MoneyAmount $BilledRetentionAmount
     */
    protected $BilledRetentionAmount = null;

    /**
     * @var MoneyAmount $CostOfEarningsAmount
     */
    protected $CostOfEarningsAmount = null;

    /**
     * @var MoneyAmount $LossAmount
     */
    protected $LossAmount = null;

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

    /**
     * @var MoneyAmount $WriteoffAmount
     */
    protected $WriteoffAmount = null;

    
    public function __construct()
    {
      parent::__construct();
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
     * @return ProjectPosted
     */
    public function setBilledRetentionAmount($BilledRetentionAmount)
    {
      $this->BilledRetentionAmount = $BilledRetentionAmount;
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
     * @return ProjectPosted
     */
    public function setCostOfEarningsAmount($CostOfEarningsAmount)
    {
      $this->CostOfEarningsAmount = $CostOfEarningsAmount;
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
     * @return ProjectPosted
     */
    public function setLossAmount($LossAmount)
    {
      $this->LossAmount = $LossAmount;
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
     * @return ProjectPosted
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
     * @return ProjectPosted
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
     * @return ProjectPosted
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
     * @return ProjectPosted
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
     * @return ProjectPosted
     */
    public function setServiceFeeAmount($ServiceFeeAmount)
    {
      $this->ServiceFeeAmount = $ServiceFeeAmount;
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
     * @return ProjectPosted
     */
    public function setWriteoffAmount($WriteoffAmount)
    {
      $this->WriteoffAmount = $WriteoffAmount;
      return $this;
    }

}
