<?php

class MoneyProfitCalculation extends ProfitCalculation
{

    /**
     * @var MoneyAmount $ProfitAmount
     */
    protected $ProfitAmount = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return MoneyAmount
     */
    public function getProfitAmount()
    {
      return $this->ProfitAmount;
    }

    /**
     * @param MoneyAmount $ProfitAmount
     * @return MoneyProfitCalculation
     */
    public function setProfitAmount($ProfitAmount)
    {
      $this->ProfitAmount = $ProfitAmount;
      return $this;
    }

}
