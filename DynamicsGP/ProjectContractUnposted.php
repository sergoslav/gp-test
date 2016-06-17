<?php

class ProjectContractUnposted extends ProjectUnpostedBase
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
     * @var MoneyAmount $EarningsAmount
     */
    protected $EarningsAmount = null;

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
     * @return MoneyAmount
     */
    public function getBilledRetentionAmount()
    {
      return $this->BilledRetentionAmount;
    }

    /**
     * @param MoneyAmount $BilledRetentionAmount
     * @return ProjectContractUnposted
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
     * @return ProjectContractUnposted
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
     * @return ProjectContractUnposted
     */
    public function setEarningsAmount($EarningsAmount)
    {
      $this->EarningsAmount = $EarningsAmount;
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
     * @return ProjectContractUnposted
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
     * @return ProjectContractUnposted
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
     * @return ProjectContractUnposted
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
     * @return ProjectContractUnposted
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
     * @return ProjectContractUnposted
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
     * @return ProjectContractUnposted
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
     * @return ProjectContractUnposted
     */
    public function setServiceFeeAmount($ServiceFeeAmount)
    {
      $this->ServiceFeeAmount = $ServiceFeeAmount;
      return $this;
    }

}
