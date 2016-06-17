<?php

class ReceivablesTerms extends Terms
{

    /**
     * @var MoneyAmount $DiscountAvailableTakenAmount
     */
    protected $DiscountAvailableTakenAmount = null;

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
    public function getDiscountAvailableTakenAmount()
    {
      return $this->DiscountAvailableTakenAmount;
    }

    /**
     * @param MoneyAmount $DiscountAvailableTakenAmount
     * @return ReceivablesTerms
     */
    public function setDiscountAvailableTakenAmount($DiscountAvailableTakenAmount)
    {
      $this->DiscountAvailableTakenAmount = $DiscountAvailableTakenAmount;
      return $this;
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
     * @return ReceivablesTerms
     */
    public function setDiscountTakenAmount($DiscountTakenAmount)
    {
      $this->DiscountTakenAmount = $DiscountTakenAmount;
      return $this;
    }

}
