<?php

class CurrencyPostingAccount extends BusinessObject
{

    /**
     * @var GLAccountNumberKey $FinancialOffsetGLAccountKey
     */
    protected $FinancialOffsetGLAccountKey = null;

    /**
     * @var CurrencyPostingAccountKey $Key
     */
    protected $Key = null;

    /**
     * @var GLAccountNumberKey $PurchasingOffsetGLAccountKey
     */
    protected $PurchasingOffsetGLAccountKey = null;

    /**
     * @var GLAccountNumberKey $RealizedGainGLAccountKey
     */
    protected $RealizedGainGLAccountKey = null;

    /**
     * @var GLAccountNumberKey $RealizedLossGLAccountKey
     */
    protected $RealizedLossGLAccountKey = null;

    /**
     * @var GLAccountNumberKey $RoundingDifferenceGLAccountKey
     */
    protected $RoundingDifferenceGLAccountKey = null;

    /**
     * @var GLAccountNumberKey $RoundingWriteOffGLAccountKey
     */
    protected $RoundingWriteOffGLAccountKey = null;

    /**
     * @var GLAccountNumberKey $SalesOffsetGLAccountKey
     */
    protected $SalesOffsetGLAccountKey = null;

    /**
     * @var GLAccountNumberKey $UnrealizedGainGLAccountKey
     */
    protected $UnrealizedGainGLAccountKey = null;

    /**
     * @var GLAccountNumberKey $UnrealizedLossGLAccountKey
     */
    protected $UnrealizedLossGLAccountKey = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return GLAccountNumberKey
     */
    public function getFinancialOffsetGLAccountKey()
    {
      return $this->FinancialOffsetGLAccountKey;
    }

    /**
     * @param GLAccountNumberKey $FinancialOffsetGLAccountKey
     * @return CurrencyPostingAccount
     */
    public function setFinancialOffsetGLAccountKey($FinancialOffsetGLAccountKey)
    {
      $this->FinancialOffsetGLAccountKey = $FinancialOffsetGLAccountKey;
      return $this;
    }

    /**
     * @return CurrencyPostingAccountKey
     */
    public function getKey()
    {
      return $this->Key;
    }

    /**
     * @param CurrencyPostingAccountKey $Key
     * @return CurrencyPostingAccount
     */
    public function setKey($Key)
    {
      $this->Key = $Key;
      return $this;
    }

    /**
     * @return GLAccountNumberKey
     */
    public function getPurchasingOffsetGLAccountKey()
    {
      return $this->PurchasingOffsetGLAccountKey;
    }

    /**
     * @param GLAccountNumberKey $PurchasingOffsetGLAccountKey
     * @return CurrencyPostingAccount
     */
    public function setPurchasingOffsetGLAccountKey($PurchasingOffsetGLAccountKey)
    {
      $this->PurchasingOffsetGLAccountKey = $PurchasingOffsetGLAccountKey;
      return $this;
    }

    /**
     * @return GLAccountNumberKey
     */
    public function getRealizedGainGLAccountKey()
    {
      return $this->RealizedGainGLAccountKey;
    }

    /**
     * @param GLAccountNumberKey $RealizedGainGLAccountKey
     * @return CurrencyPostingAccount
     */
    public function setRealizedGainGLAccountKey($RealizedGainGLAccountKey)
    {
      $this->RealizedGainGLAccountKey = $RealizedGainGLAccountKey;
      return $this;
    }

    /**
     * @return GLAccountNumberKey
     */
    public function getRealizedLossGLAccountKey()
    {
      return $this->RealizedLossGLAccountKey;
    }

    /**
     * @param GLAccountNumberKey $RealizedLossGLAccountKey
     * @return CurrencyPostingAccount
     */
    public function setRealizedLossGLAccountKey($RealizedLossGLAccountKey)
    {
      $this->RealizedLossGLAccountKey = $RealizedLossGLAccountKey;
      return $this;
    }

    /**
     * @return GLAccountNumberKey
     */
    public function getRoundingDifferenceGLAccountKey()
    {
      return $this->RoundingDifferenceGLAccountKey;
    }

    /**
     * @param GLAccountNumberKey $RoundingDifferenceGLAccountKey
     * @return CurrencyPostingAccount
     */
    public function setRoundingDifferenceGLAccountKey($RoundingDifferenceGLAccountKey)
    {
      $this->RoundingDifferenceGLAccountKey = $RoundingDifferenceGLAccountKey;
      return $this;
    }

    /**
     * @return GLAccountNumberKey
     */
    public function getRoundingWriteOffGLAccountKey()
    {
      return $this->RoundingWriteOffGLAccountKey;
    }

    /**
     * @param GLAccountNumberKey $RoundingWriteOffGLAccountKey
     * @return CurrencyPostingAccount
     */
    public function setRoundingWriteOffGLAccountKey($RoundingWriteOffGLAccountKey)
    {
      $this->RoundingWriteOffGLAccountKey = $RoundingWriteOffGLAccountKey;
      return $this;
    }

    /**
     * @return GLAccountNumberKey
     */
    public function getSalesOffsetGLAccountKey()
    {
      return $this->SalesOffsetGLAccountKey;
    }

    /**
     * @param GLAccountNumberKey $SalesOffsetGLAccountKey
     * @return CurrencyPostingAccount
     */
    public function setSalesOffsetGLAccountKey($SalesOffsetGLAccountKey)
    {
      $this->SalesOffsetGLAccountKey = $SalesOffsetGLAccountKey;
      return $this;
    }

    /**
     * @return GLAccountNumberKey
     */
    public function getUnrealizedGainGLAccountKey()
    {
      return $this->UnrealizedGainGLAccountKey;
    }

    /**
     * @param GLAccountNumberKey $UnrealizedGainGLAccountKey
     * @return CurrencyPostingAccount
     */
    public function setUnrealizedGainGLAccountKey($UnrealizedGainGLAccountKey)
    {
      $this->UnrealizedGainGLAccountKey = $UnrealizedGainGLAccountKey;
      return $this;
    }

    /**
     * @return GLAccountNumberKey
     */
    public function getUnrealizedLossGLAccountKey()
    {
      return $this->UnrealizedLossGLAccountKey;
    }

    /**
     * @param GLAccountNumberKey $UnrealizedLossGLAccountKey
     * @return CurrencyPostingAccount
     */
    public function setUnrealizedLossGLAccountKey($UnrealizedLossGLAccountKey)
    {
      $this->UnrealizedLossGLAccountKey = $UnrealizedLossGLAccountKey;
      return $this;
    }

}
