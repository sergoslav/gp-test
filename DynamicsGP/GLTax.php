<?php

class GLTax
{

    /**
     * @var MoneyAmount $Amount
     */
    protected $Amount = null;

    /**
     * @var TaxDetailKey $DetailKey
     */
    protected $DetailKey = null;

    /**
     * @var GLAccountNumberKey $GLAccountKey
     */
    protected $GLAccountKey = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return MoneyAmount
     */
    public function getAmount()
    {
      return $this->Amount;
    }

    /**
     * @param MoneyAmount $Amount
     * @return GLTax
     */
    public function setAmount($Amount)
    {
      $this->Amount = $Amount;
      return $this;
    }

    /**
     * @return TaxDetailKey
     */
    public function getDetailKey()
    {
      return $this->DetailKey;
    }

    /**
     * @param TaxDetailKey $DetailKey
     * @return GLTax
     */
    public function setDetailKey($DetailKey)
    {
      $this->DetailKey = $DetailKey;
      return $this;
    }

    /**
     * @return GLAccountNumberKey
     */
    public function getGLAccountKey()
    {
      return $this->GLAccountKey;
    }

    /**
     * @param GLAccountNumberKey $GLAccountKey
     * @return GLTax
     */
    public function setGLAccountKey($GLAccountKey)
    {
      $this->GLAccountKey = $GLAccountKey;
      return $this;
    }

}
