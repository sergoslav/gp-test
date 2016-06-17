<?php

class PricingDetailPrice
{

    /**
     * @var anyType $Item
     */
    protected $Item = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return anyType
     */
    public function getItem()
    {
      return $this->Item;
    }

    /**
     * @param anyType $Item
     * @return PricingDetailPrice
     */
    public function setItem($Item)
    {
      $this->Item = $Item;
      return $this;
    }

}
