<?php

class MulticurrencySetupKey extends ReferenceKey
{

    /**
     * @var CurrencyKey $CurrencyKey
     */
    protected $CurrencyKey = null;

    
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
     * @return MulticurrencySetupKey
     */
    public function setCurrencyKey($CurrencyKey)
    {
      $this->CurrencyKey = $CurrencyKey;
      return $this;
    }

}
