<?php

class Distribution extends BusinessObject
{

    /**
     * @var Amount $CreditAmount
     */
    protected $CreditAmount = null;

    /**
     * @var Amount $DebitAmount
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
     * @var string $Reference
     */
    protected $Reference = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return Amount
     */
    public function getCreditAmount()
    {
      return $this->CreditAmount;
    }

    /**
     * @param Amount $CreditAmount
     * @return Distribution
     */
    public function setCreditAmount($CreditAmount)
    {
      $this->CreditAmount = $CreditAmount;
      return $this;
    }

    /**
     * @return Amount
     */
    public function getDebitAmount()
    {
      return $this->DebitAmount;
    }

    /**
     * @param Amount $DebitAmount
     * @return Distribution
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
     * @return Distribution
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
     * @return Distribution
     */
    public function setGLAccountKey($GLAccountKey)
    {
      $this->GLAccountKey = $GLAccountKey;
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
     * @return Distribution
     */
    public function setReference($Reference)
    {
      $this->Reference = $Reference;
      return $this;
    }

}
