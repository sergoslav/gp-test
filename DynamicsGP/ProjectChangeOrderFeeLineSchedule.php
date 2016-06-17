<?php

class ProjectChangeOrderFeeLineSchedule extends BusinessObject
{

    /**
     * @var MoneyAmount $Amount
     */
    protected $Amount = null;

    /**
     * @var MoneyAmount $AmountBilled
     */
    protected $AmountBilled = null;

    /**
     * @var ProjectChangeOrderFeeLineScheduleKey $Key
     */
    protected $Key = null;

    /**
     * @var \DateTime $PreviousDate
     */
    protected $PreviousDate = null;

    /**
     * @var MoneyAmount $PreviousFeeAmount
     */
    protected $PreviousFeeAmount = null;

    /**
     * @var int $SequenceNumber
     */
    protected $SequenceNumber = null;

    
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
     * @return ProjectChangeOrderFeeLineSchedule
     */
    public function setAmount($Amount)
    {
      $this->Amount = $Amount;
      return $this;
    }

    /**
     * @return MoneyAmount
     */
    public function getAmountBilled()
    {
      return $this->AmountBilled;
    }

    /**
     * @param MoneyAmount $AmountBilled
     * @return ProjectChangeOrderFeeLineSchedule
     */
    public function setAmountBilled($AmountBilled)
    {
      $this->AmountBilled = $AmountBilled;
      return $this;
    }

    /**
     * @return ProjectChangeOrderFeeLineScheduleKey
     */
    public function getKey()
    {
      return $this->Key;
    }

    /**
     * @param ProjectChangeOrderFeeLineScheduleKey $Key
     * @return ProjectChangeOrderFeeLineSchedule
     */
    public function setKey($Key)
    {
      $this->Key = $Key;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getPreviousDate()
    {
      if ($this->PreviousDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->PreviousDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $PreviousDate
     * @return ProjectChangeOrderFeeLineSchedule
     */
    public function setPreviousDate(\DateTime $PreviousDate = null)
    {
      if ($PreviousDate == null) {
       $this->PreviousDate = null;
      } else {
        $this->PreviousDate = $PreviousDate->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return MoneyAmount
     */
    public function getPreviousFeeAmount()
    {
      return $this->PreviousFeeAmount;
    }

    /**
     * @param MoneyAmount $PreviousFeeAmount
     * @return ProjectChangeOrderFeeLineSchedule
     */
    public function setPreviousFeeAmount($PreviousFeeAmount)
    {
      $this->PreviousFeeAmount = $PreviousFeeAmount;
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
     * @return ProjectChangeOrderFeeLineSchedule
     */
    public function setSequenceNumber($SequenceNumber)
    {
      $this->SequenceNumber = $SequenceNumber;
      return $this;
    }

}
