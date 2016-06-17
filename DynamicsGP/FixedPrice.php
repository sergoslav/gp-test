<?php

class FixedPrice extends Profit
{

    /**
     * @var ProfitCalculation $Item
     */
    protected $Item = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ProfitCalculation
     */
    public function getItem()
    {
      return $this->Item;
    }

    /**
     * @param ProfitCalculation $Item
     * @return FixedPrice
     */
    public function setItem($Item)
    {
      $this->Item = $Item;
      return $this;
    }

}
