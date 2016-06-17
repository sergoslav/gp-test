<?php

class PayablesTerms extends Terms
{

    /**
     * @var MoneyAmount $DiscountAmountAppliedTaken
     */
    protected $DiscountAmountAppliedTaken = null;

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
    public function getDiscountAmountAppliedTaken()
    {
      return $this->DiscountAmountAppliedTaken;
    }

    /**
     * @param MoneyAmount $DiscountAmountAppliedTaken
     * @return PayablesTerms
     */
    public function setDiscountAmountAppliedTaken($DiscountAmountAppliedTaken)
    {
      $this->DiscountAmountAppliedTaken = $DiscountAmountAppliedTaken;
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
     * @return PayablesTerms
     */
    public function setDiscountTakenAmount($DiscountTakenAmount)
    {
      $this->DiscountTakenAmount = $DiscountTakenAmount;
      return $this;
    }

}
