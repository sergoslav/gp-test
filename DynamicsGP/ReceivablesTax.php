<?php

class ReceivablesTax extends Tax
{

    /**
     * @var MoneyAmount $FreightTaxAmount
     */
    protected $FreightTaxAmount = null;

    /**
     * @var GLAccountNumberKey $GLAccountKey
     */
    protected $GLAccountKey = null;

    /**
     * @var ReceivablesTaxKey $Key
     */
    protected $Key = null;

    /**
     * @var MoneyAmount $MiscellaneousTaxAmount
     */
    protected $MiscellaneousTaxAmount = null;

    /**
     * @var MoneyAmount $SalesTaxAmount
     */
    protected $SalesTaxAmount = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return MoneyAmount
     */
    public function getFreightTaxAmount()
    {
      return $this->FreightTaxAmount;
    }

    /**
     * @param MoneyAmount $FreightTaxAmount
     * @return ReceivablesTax
     */
    public function setFreightTaxAmount($FreightTaxAmount)
    {
      $this->FreightTaxAmount = $FreightTaxAmount;
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
     * @return ReceivablesTax
     */
    public function setGLAccountKey($GLAccountKey)
    {
      $this->GLAccountKey = $GLAccountKey;
      return $this;
    }

    /**
     * @return ReceivablesTaxKey
     */
    public function getKey()
    {
      return $this->Key;
    }

    /**
     * @param ReceivablesTaxKey $Key
     * @return ReceivablesTax
     */
    public function setKey($Key)
    {
      $this->Key = $Key;
      return $this;
    }

    /**
     * @return MoneyAmount
     */
    public function getMiscellaneousTaxAmount()
    {
      return $this->MiscellaneousTaxAmount;
    }

    /**
     * @param MoneyAmount $MiscellaneousTaxAmount
     * @return ReceivablesTax
     */
    public function setMiscellaneousTaxAmount($MiscellaneousTaxAmount)
    {
      $this->MiscellaneousTaxAmount = $MiscellaneousTaxAmount;
      return $this;
    }

    /**
     * @return MoneyAmount
     */
    public function getSalesTaxAmount()
    {
      return $this->SalesTaxAmount;
    }

    /**
     * @param MoneyAmount $SalesTaxAmount
     * @return ReceivablesTax
     */
    public function setSalesTaxAmount($SalesTaxAmount)
    {
      $this->SalesTaxAmount = $SalesTaxAmount;
      return $this;
    }

}
