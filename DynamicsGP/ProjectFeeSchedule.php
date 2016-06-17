<?php

class ProjectFeeSchedule extends BusinessObject
{

    /**
     * @var MoneyAmount $Amount
     */
    protected $Amount = null;

    /**
     * @var MoneyAmount $BilledAmount
     */
    protected $BilledAmount = null;

    /**
     * @var ProjectFeeScheduleKey $Key
     */
    protected $Key = null;

    
    public function __construct()
    {
      parent::__construct();
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
     * @return ProjectFeeSchedule
     */
    public function setAmount($Amount)
    {
      $this->Amount = $Amount;
      return $this;
    }

    /**
     * @return MoneyAmount
     */
    public function getBilledAmount()
    {
      return $this->BilledAmount;
    }

    /**
     * @param MoneyAmount $BilledAmount
     * @return ProjectFeeSchedule
     */
    public function setBilledAmount($BilledAmount)
    {
      $this->BilledAmount = $BilledAmount;
      return $this;
    }

    /**
     * @return ProjectFeeScheduleKey
     */
    public function getKey()
    {
      return $this->Key;
    }

    /**
     * @param ProjectFeeScheduleKey $Key
     * @return ProjectFeeSchedule
     */
    public function setKey($Key)
    {
      $this->Key = $Key;
      return $this;
    }

}
