<?php

class PurchaseDistribution extends BusinessObject
{

    /**
     * @var string $AuditTrailCode
     */
    protected $AuditTrailCode = null;

    /**
     * @var MoneyAmount $CreditAmount
     */
    protected $CreditAmount = null;

    /**
     * @var MoneyAmount $DebitAmount
     */
    protected $DebitAmount = null;

    /**
     * @var DistributionTypeKey $DistributionTypeKey
     */
    protected $DistributionTypeKey = null;

    /**
     * @var GLAccountNumberKey $GLAccountKey
     */
    protected $GLAccountKey = null;

    /**
     * @var PurchaseDistributionKey $Key
     */
    protected $Key = null;

    /**
     * @var string $Reference
     */
    protected $Reference = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return string
     */
    public function getAuditTrailCode()
    {
      return $this->AuditTrailCode;
    }

    /**
     * @param string $AuditTrailCode
     * @return PurchaseDistribution
     */
    public function setAuditTrailCode($AuditTrailCode)
    {
      $this->AuditTrailCode = $AuditTrailCode;
      return $this;
    }

    /**
     * @return MoneyAmount
     */
    public function getCreditAmount()
    {
      return $this->CreditAmount;
    }

    /**
     * @param MoneyAmount $CreditAmount
     * @return PurchaseDistribution
     */
    public function setCreditAmount($CreditAmount)
    {
      $this->CreditAmount = $CreditAmount;
      return $this;
    }

    /**
     * @return MoneyAmount
     */
    public function getDebitAmount()
    {
      return $this->DebitAmount;
    }

    /**
     * @param MoneyAmount $DebitAmount
     * @return PurchaseDistribution
     */
    public function setDebitAmount($DebitAmount)
    {
      $this->DebitAmount = $DebitAmount;
      return $this;
    }

    /**
     * @return DistributionTypeKey
     */
    public function getDistributionTypeKey()
    {
      return $this->DistributionTypeKey;
    }

    /**
     * @param DistributionTypeKey $DistributionTypeKey
     * @return PurchaseDistribution
     */
    public function setDistributionTypeKey($DistributionTypeKey)
    {
      $this->DistributionTypeKey = $DistributionTypeKey;
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
     * @return PurchaseDistribution
     */
    public function setGLAccountKey($GLAccountKey)
    {
      $this->GLAccountKey = $GLAccountKey;
      return $this;
    }

    /**
     * @return PurchaseDistributionKey
     */
    public function getKey()
    {
      return $this->Key;
    }

    /**
     * @param PurchaseDistributionKey $Key
     * @return PurchaseDistribution
     */
    public function setKey($Key)
    {
      $this->Key = $Key;
      return $this;
    }

    /**
     * @return string
     */
    public function getReference()
    {
      return $this->Reference;
    }

    /**
     * @param string $Reference
     * @return PurchaseDistribution
     */
    public function setReference($Reference)
    {
      $this->Reference = $Reference;
      return $this;
    }

}
