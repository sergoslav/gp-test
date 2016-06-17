<?php

class ProjectBillingFull extends ProjectBilling
{

    /**
     * @var MoneyAmount $DiscountAmount
     */
    protected $DiscountAmount = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return MoneyAmount
     */
    public function getDiscountAmount()
    {
      return $this->DiscountAmount;
    }

    /**
     * @param MoneyAmount $DiscountAmount
     * @return ProjectBillingFull
     */
    public function setDiscountAmount($DiscountAmount)
    {
      $this->DiscountAmount = $DiscountAmount;
      return $this;
    }

}
