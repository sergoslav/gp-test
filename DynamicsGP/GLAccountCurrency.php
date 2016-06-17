<?php

class GLAccountCurrency extends BusinessObject
{

    /**
     * @var GLAccountCurrencyKey $Key
     */
    protected $Key = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return GLAccountCurrencyKey
     */
    public function getKey()
    {
      return $this->Key;
    }

    /**
     * @param GLAccountCurrencyKey $Key
     * @return GLAccountCurrency
     */
    public function setKey($Key)
    {
      $this->Key = $Key;
      return $this;
    }

}
