<?php

class ProjectChangeOrderFee extends BusinessObject
{

    /**
     * @var \DateTime $ContractBeginDate
     */
    protected $ContractBeginDate = null;

    /**
     * @var \DateTime $ContractEndDate
     */
    protected $ContractEndDate = null;

    /**
     * @var ProjectChangeOrderFeeKey $Key
     */
    protected $Key = null;

    /**
     * @var ArrayOfProjectChangeOrderFeeLine $Lines
     */
    protected $Lines = null;

    /**
     * @var MoneyAmount $PostedProjectFeeAmount
     */
    protected $PostedProjectFeeAmount = null;

    /**
     * @var MoneyAmount $PostedRetainerFeeAmount
     */
    protected $PostedRetainerFeeAmount = null;

    /**
     * @var MoneyAmount $PostedRetentionFeeAmount
     */
    protected $PostedRetentionFeeAmount = null;

    /**
     * @var MoneyAmount $PostedServiceFeeAmount
     */
    protected $PostedServiceFeeAmount = null;

    /**
     * @var int $SequenceNumber
     */
    protected $SequenceNumber = null;

    /**
     * @var MoneyAmount $TotalProjectFeeAmount
     */
    protected $TotalProjectFeeAmount = null;

    /**
     * @var MoneyAmount $TotalRetainerFeeAmount
     */
    protected $TotalRetainerFeeAmount = null;

    /**
     * @var MoneyAmount $TotalRetentionFeeAmount
     */
    protected $TotalRetentionFeeAmount = null;

    /**
     * @var MoneyAmount $TotalServiceFeeAmount
     */
    protected $TotalServiceFeeAmount = null;

    /**
     * @var MoneyAmount $VarianceFeeAmount
     */
    protected $VarianceFeeAmount = null;

    /**
     * @var MoneyAmount $VarianceProjectFeeAmount
     */
    protected $VarianceProjectFeeAmount = null;

    /**
     * @var MoneyAmount $VarianceRetainerFeeAmount
     */
    protected $VarianceRetainerFeeAmount = null;

    /**
     * @var MoneyAmount $VarianceRetentionFeeAmount
     */
    protected $VarianceRetentionFeeAmount = null;

    /**
     * @var MoneyAmount $VarianceServiceFeeAmount
     */
    protected $VarianceServiceFeeAmount = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return \DateTime
     */
    public function getContractBeginDate()
    {
      if ($this->ContractBeginDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->ContractBeginDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $ContractBeginDate
     * @return ProjectChangeOrderFee
     */
    public function setContractBeginDate(\DateTime $ContractBeginDate = null)
    {
      if ($ContractBeginDate == null) {
       $this->ContractBeginDate = null;
      } else {
        $this->ContractBeginDate = $ContractBeginDate->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getContractEndDate()
    {
      if ($this->ContractEndDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->ContractEndDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $ContractEndDate
     * @return ProjectChangeOrderFee
     */
    public function setContractEndDate(\DateTime $ContractEndDate = null)
    {
      if ($ContractEndDate == null) {
       $this->ContractEndDate = null;
      } else {
        $this->ContractEndDate = $ContractEndDate->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return ProjectChangeOrderFeeKey
     */
    public function getKey()
    {
      return $this->Key;
    }

    /**
     * @param ProjectChangeOrderFeeKey $Key
     * @return ProjectChangeOrderFee
     */
    public function setKey($Key)
    {
      $this->Key = $Key;
      return $this;
    }

    /**
     * @return ArrayOfProjectChangeOrderFeeLine
     */
    public function getLines()
    {
      return $this->Lines;
    }

    /**
     * @param ArrayOfProjectChangeOrderFeeLine $Lines
     * @return ProjectChangeOrderFee
     */
    public function setLines($Lines)
    {
      $this->Lines = $Lines;
      return $this;
    }

    /**
     * @return MoneyAmount
     */
    public function getPostedProjectFeeAmount()
    {
      return $this->PostedProjectFeeAmount;
    }

    /**
     * @param MoneyAmount $PostedProjectFeeAmount
     * @return ProjectChangeOrderFee
     */
    public function setPostedProjectFeeAmount($PostedProjectFeeAmount)
    {
      $this->PostedProjectFeeAmount = $PostedProjectFeeAmount;
      return $this;
    }

    /**
     * @return MoneyAmount
     */
    public function getPostedRetainerFeeAmount()
    {
      return $this->PostedRetainerFeeAmount;
    }

    /**
     * @param MoneyAmount $PostedRetainerFeeAmount
     * @return ProjectChangeOrderFee
     */
    public function setPostedRetainerFeeAmount($PostedRetainerFeeAmount)
    {
      $this->PostedRetainerFeeAmount = $PostedRetainerFeeAmount;
      return $this;
    }

    /**
     * @return MoneyAmount
     */
    public function getPostedRetentionFeeAmount()
    {
      return $this->PostedRetentionFeeAmount;
    }

    /**
     * @param MoneyAmount $PostedRetentionFeeAmount
     * @return ProjectChangeOrderFee
     */
    public function setPostedRetentionFeeAmount($PostedRetentionFeeAmount)
    {
      $this->PostedRetentionFeeAmount = $PostedRetentionFeeAmount;
      return $this;
    }

    /**
     * @return MoneyAmount
     */
    public function getPostedServiceFeeAmount()
    {
      return $this->PostedServiceFeeAmount;
    }

    /**
     * @param MoneyAmount $PostedServiceFeeAmount
     * @return ProjectChangeOrderFee
     */
    public function setPostedServiceFeeAmount($PostedServiceFeeAmount)
    {
      $this->PostedServiceFeeAmount = $PostedServiceFeeAmount;
      return $this;
    }

    /**
     * @return int
     */
    public function getSequenceNumber()
    {
      return $this->SequenceNumber;
    }

    /**
     * @param int $SequenceNumber
     * @return ProjectChangeOrderFee
     */
    public function setSequenceNumber($SequenceNumber)
    {
      $this->SequenceNumber = $SequenceNumber;
      return $this;
    }

    /**
     * @return MoneyAmount
     */
    public function getTotalProjectFeeAmount()
    {
      return $this->TotalProjectFeeAmount;
    }

    /**
     * @param MoneyAmount $TotalProjectFeeAmount
     * @return ProjectChangeOrderFee
     */
    public function setTotalProjectFeeAmount($TotalProjectFeeAmount)
    {
      $this->TotalProjectFeeAmount = $TotalProjectFeeAmount;
      return $this;
    }

    /**
     * @return MoneyAmount
     */
    public function getTotalRetainerFeeAmount()
    {
      return $this->TotalRetainerFeeAmount;
    }

    /**
     * @param MoneyAmount $TotalRetainerFeeAmount
     * @return ProjectChangeOrderFee
     */
    public function setTotalRetainerFeeAmount($TotalRetainerFeeAmount)
    {
      $this->TotalRetainerFeeAmount = $TotalRetainerFeeAmount;
      return $this;
    }

    /**
     * @return MoneyAmount
     */
    public function getTotalRetentionFeeAmount()
    {
      return $this->TotalRetentionFeeAmount;
    }

    /**
     * @param MoneyAmount $TotalRetentionFeeAmount
     * @return ProjectChangeOrderFee
     */
    public function setTotalRetentionFeeAmount($TotalRetentionFeeAmount)
    {
      $this->TotalRetentionFeeAmount = $TotalRetentionFeeAmount;
      return $this;
    }

    /**
     * @return MoneyAmount
     */
    public function getTotalServiceFeeAmount()
    {
      return $this->TotalServiceFeeAmount;
    }

    /**
     * @param MoneyAmount $TotalServiceFeeAmount
     * @return ProjectChangeOrderFee
     */
    public function setTotalServiceFeeAmount($TotalServiceFeeAmount)
    {
      $this->TotalServiceFeeAmount = $TotalServiceFeeAmount;
      return $this;
    }

    /**
     * @return MoneyAmount
     */
    public function getVarianceFeeAmount()
    {
      return $this->VarianceFeeAmount;
    }

    /**
     * @param MoneyAmount $VarianceFeeAmount
     * @return ProjectChangeOrderFee
     */
    public function setVarianceFeeAmount($VarianceFeeAmount)
    {
      $this->VarianceFeeAmount = $VarianceFeeAmount;
      return $this;
    }

    /**
     * @return MoneyAmount
     */
    public function getVarianceProjectFeeAmount()
    {
      return $this->VarianceProjectFeeAmount;
    }

    /**
     * @param MoneyAmount $VarianceProjectFeeAmount
     * @return ProjectChangeOrderFee
     */
    public function setVarianceProjectFeeAmount($VarianceProjectFeeAmount)
    {
      $this->VarianceProjectFeeAmount = $VarianceProjectFeeAmount;
      return $this;
    }

    /**
     * @return MoneyAmount
     */
    public function getVarianceRetainerFeeAmount()
    {
      return $this->VarianceRetainerFeeAmount;
    }

    /**
     * @param MoneyAmount $VarianceRetainerFeeAmount
     * @return ProjectChangeOrderFee
     */
    public function setVarianceRetainerFeeAmount($VarianceRetainerFeeAmount)
    {
      $this->VarianceRetainerFeeAmount = $VarianceRetainerFeeAmount;
      return $this;
    }

    /**
     * @return MoneyAmount
     */
    public function getVarianceRetentionFeeAmount()
    {
      return $this->VarianceRetentionFeeAmount;
    }

    /**
     * @param MoneyAmount $VarianceRetentionFeeAmount
     * @return ProjectChangeOrderFee
     */
    public function setVarianceRetentionFeeAmount($VarianceRetentionFeeAmount)
    {
      $this->VarianceRetentionFeeAmount = $VarianceRetentionFeeAmount;
      return $this;
    }

    /**
     * @return MoneyAmount
     */
    public function getVarianceServiceFeeAmount()
    {
      return $this->VarianceServiceFeeAmount;
    }

    /**
     * @param MoneyAmount $VarianceServiceFeeAmount
     * @return ProjectChangeOrderFee
     */
    public function setVarianceServiceFeeAmount($VarianceServiceFeeAmount)
    {
      $this->VarianceServiceFeeAmount = $VarianceServiceFeeAmount;
      return $this;
    }

}
