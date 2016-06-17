<?php

class SalesTax extends Tax
{

    /**
     * @var GLAccountNumberKey $GLAccountKey
     */
    protected $GLAccountKey = null;

    /**
     * @var boolean $IsTaxableTax
     */
    protected $IsTaxableTax = null;

    /**
     * @var MoneyAmount $TotalTaxPotentialAmount
     */
    protected $TotalTaxPotentialAmount = null;

    
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
     * @return SalesTax
     */
    public function setGLAccountKey($GLAccountKey)
    {
      $this->GLAccountKey = $GLAccountKey;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsTaxableTax()
    {
      return $this->IsTaxableTax;
    }

    /**
     * @param boolean $IsTaxableTax
     * @return SalesTax
     */
    public function setIsTaxableTax($IsTaxableTax)
    {
      $this->IsTaxableTax = $IsTaxableTax;
      return $this;
    }

    /**
     * @return MoneyAmount
     */
    public function getTotalTaxPotentialAmount()
    {
      return $this->TotalTaxPotentialAmount;
    }

    /**
     * @param MoneyAmount $TotalTaxPotentialAmount
     * @return SalesTax
     */
    public function setTotalTaxPotentialAmount($TotalTaxPotentialAmount)
    {
      $this->TotalTaxPotentialAmount = $TotalTaxPotentialAmount;
      return $this;
    }

}
