<?php

class SalesTerms extends Terms
{

    /**
     * @var MoneyAmount $DiscountTakenAmount
     */
    protected $DiscountTakenAmount = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return MoneyAmount
     */
    public function getDiscountTakenAmount()
    {
      return $this->DiscountTakenAmount;
    }

    /**
     * @param MoneyAmount $DiscountTakenAmount
     * @return SalesTerms
     */
    public function setDiscountTakenAmount($DiscountTakenAmount)
    {
      $this->DiscountTakenAmount = $DiscountTakenAmount;
      return $this;
    }

}
