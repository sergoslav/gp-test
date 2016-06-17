<?php

class PricingKey extends ReferenceKey
{

    /**
     * @var CurrencyKey $CurrencyKey
     */
    protected $CurrencyKey = null;

    /**
     * @var ItemKey $ItemKey
     */
    protected $ItemKey = null;

    /**
     * @var PriceLevelKey $PriceLevelKey
     */
    protected $PriceLevelKey = null;

    /**
     * @var string $UofM
     */
    protected $UofM = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return CurrencyKey
     */
    public function getCurrencyKey()
    {
      return $this->CurrencyKey;
    }

    /**
     * @param CurrencyKey $CurrencyKey
     * @return PricingKey
     */
    public function setCurrencyKey($CurrencyKey)
    {
      $this->CurrencyKey = $CurrencyKey;
      return $this;
    }

    /**
     * @return ItemKey
     */
    public function getItemKey()
    {
      return $this->ItemKey;
    }

    /**
     * @param ItemKey $ItemKey
     * @return PricingKey
     */
    public function setItemKey($ItemKey)
    {
      $this->ItemKey = $ItemKey;
      return $this;
    }

    /**
     * @return PriceLevelKey
     */
    public function getPriceLevelKey()
    {
      return $this->PriceLevelKey;
    }

    /**
     * @param PriceLevelKey $PriceLevelKey
     * @return PricingKey
     */
    public function setPriceLevelKey($PriceLevelKey)
    {
      $this->PriceLevelKey = $PriceLevelKey;
      return $this;
    }

    /**
     * @return string
     */
    public function getUofM()
    {
      return $this->UofM;
    }

    /**
     * @param string $UofM
     * @return PricingKey
     */
    public function setUofM($UofM)
    {
      $this->UofM = $UofM;
      return $this;
    }

}
