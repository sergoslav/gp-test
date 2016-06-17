<?php

class GLAccountCurrencyKey extends ReferenceKey
{

    /**
     * @var GLAccountNumberKey $AccountKey
     */
    protected $AccountKey = null;

    /**
     * @var CurrencyKey $CurrencyKey
     */
    protected $CurrencyKey = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return GLAccountNumberKey
     */
    public function getAccountKey()
    {
      return $this->AccountKey;
    }

    /**
     * @param GLAccountNumberKey $AccountKey
     * @return GLAccountCurrencyKey
     */
    public function setAccountKey($AccountKey)
    {
      $this->AccountKey = $AccountKey;
      return $this;
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
     * @return GLAccountCurrencyKey
     */
    public function setCurrencyKey($CurrencyKey)
    {
      $this->CurrencyKey = $CurrencyKey;
      return $this;
    }

}
