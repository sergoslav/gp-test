<?php

class CustomerCreditLimit extends CreditLimit
{

    /**
     * @var int $Period
     */
    protected $Period = null;

    /**
     * @var MoneyAmount $PeriodAmount
     */
    protected $PeriodAmount = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return int
     */
    public function getPeriod()
    {
      return $this->Period;
    }

    /**
     * @param int $Period
     * @return CustomerCreditLimit
     */
    public function setPeriod($Period)
    {
      $this->Period = $Period;
      return $this;
    }

    /**
     * @return MoneyAmount
     */
    public function getPeriodAmount()
    {
      return $this->PeriodAmount;
    }

    /**
     * @param MoneyAmount $PeriodAmount
     * @return CustomerCreditLimit
     */
    public function setPeriodAmount($PeriodAmount)
    {
      $this->PeriodAmount = $PeriodAmount;
      return $this;
    }

}
