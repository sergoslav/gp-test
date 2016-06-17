<?php

class PricingDetailKey extends ReferenceKey
{

    /**
     * @var PricingKey $PricingKey
     */
    protected $PricingKey = null;

    /**
     * @var Quantity $ToQuantity
     */
    protected $ToQuantity = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return PricingKey
     */
    public function getPricingKey()
    {
      return $this->PricingKey;
    }

    /**
     * @param PricingKey $PricingKey
     * @return PricingDetailKey
     */
    public function setPricingKey($PricingKey)
    {
      $this->PricingKey = $PricingKey;
      return $this;
    }

    /**
     * @return Quantity
     */
    public function getToQuantity()
    {
      return $this->ToQuantity;
    }

    /**
     * @param Quantity $ToQuantity
     * @return PricingDetailKey
     */
    public function setToQuantity($ToQuantity)
    {
      $this->ToQuantity = $ToQuantity;
      return $this;
    }

}
