<?php

class ReceivablesCreditDocument extends ReceivablesDocument
{

    /**
     * @var MoneyAmount $DiscountReturned
     */
    protected $DiscountReturned = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return MoneyAmount
     */
    public function getDiscountReturned()
    {
      return $this->DiscountReturned;
    }

    /**
     * @param MoneyAmount $DiscountReturned
     * @return ReceivablesCreditDocument
     */
    public function setDiscountReturned($DiscountReturned)
    {
      $this->DiscountReturned = $DiscountReturned;
      return $this;
    }

}
