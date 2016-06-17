<?php

class PayablesTax extends Tax
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
     * @var boolean $IsPosted
     */
    protected $IsPosted = null;

    /**
     * @var PayablesTaxKey $Key
     */
    protected $Key = null;

    /**
     * @var MoneyAmount $MiscellaneousTaxAmount
     */
    protected $MiscellaneousTaxAmount = null;

    /**
     * @var MoneyAmount $PurchasesTaxAmount
     */
    protected $PurchasesTaxAmount = null;

    
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
     * @return PayablesTax
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
     * @return PayablesTax
     */
    public function setGLAccountKey($GLAccountKey)
    {
      $this->GLAccountKey = $GLAccountKey;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsPosted()
    {
      return $this->IsPosted;
    }

    /**
     * @param boolean $IsPosted
     * @return PayablesTax
     */
    public function setIsPosted($IsPosted)
    {
      $this->IsPosted = $IsPosted;
      return $this;
    }

    /**
     * @return PayablesTaxKey
     */
    public function getKey()
    {
      return $this->Key;
    }

    /**
     * @param PayablesTaxKey $Key
     * @return PayablesTax
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
     * @return PayablesTax
     */
    public function setMiscellaneousTaxAmount($MiscellaneousTaxAmount)
    {
      $this->MiscellaneousTaxAmount = $MiscellaneousTaxAmount;
      return $this;
    }

    /**
     * @return MoneyAmount
     */
    public function getPurchasesTaxAmount()
    {
      return $this->PurchasesTaxAmount;
    }

    /**
     * @param MoneyAmount $PurchasesTaxAmount
     * @return PayablesTax
     */
    public function setPurchasesTaxAmount($PurchasesTaxAmount)
    {
      $this->PurchasesTaxAmount = $PurchasesTaxAmount;
      return $this;
    }

}
