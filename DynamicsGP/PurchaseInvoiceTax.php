<?php

class PurchaseInvoiceTax extends PurchaseTax
{

    /**
     * @var GLAccountNumberKey $GLAccountKey
     */
    protected $GLAccountKey = null;

    
    public function __construct()
    {
      parent::__construct();
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
     * @return PurchaseInvoiceTax
     */
    public function setGLAccountKey($GLAccountKey)
    {
      $this->GLAccountKey = $GLAccountKey;
      return $this;
    }

}
