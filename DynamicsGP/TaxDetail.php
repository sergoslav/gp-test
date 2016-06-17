<?php

class TaxDetail extends BusinessObject
{

    /**
     * @var GLAccountNumberKey $Account
     */
    protected $Account = null;

    /**
     * @var boolean $IsTaxDetailPrintOnDocuments
     */
    protected $IsTaxDetailPrintOnDocuments = null;

    /**
     * @var boolean $IsTaxDetailTaxable
     */
    protected $IsTaxDetailTaxable = null;

    /**
     * @var MoneyAmount $TaxDetailAmount
     */
    protected $TaxDetailAmount = null;

    /**
     * @var TaxDetailBase $TaxDetailBase
     */
    protected $TaxDetailBase = null;

    /**
     * @var TaxDetailBaseQualifers $TaxDetailBaseQualifiers
     */
    protected $TaxDetailBaseQualifiers = null;

    /**
     * @var TaxDetailKey $TaxDetailBasedOnDetailKey
     */
    protected $TaxDetailBasedOnDetailKey = null;

    /**
     * @var string $TaxDetailDescription
     */
    protected $TaxDetailDescription = null;

    /**
     * @var TaxDetailKey $TaxDetailKey
     */
    protected $TaxDetailKey = null;

    /**
     * @var float $TaxDetailPercent
     */
    protected $TaxDetailPercent = null;

    /**
     * @var string $TaxDetailPrintCharacter
     */
    protected $TaxDetailPrintCharacter = null;

    /**
     * @var TaxDetailRangeType $TaxDetailRangeType
     */
    protected $TaxDetailRangeType = null;

    /**
     * @var TaxDetailRounding $TaxDetailRounding
     */
    protected $TaxDetailRounding = null;

    /**
     * @var MoneyAmount $TaxDetailTaxMaximum
     */
    protected $TaxDetailTaxMaximum = null;

    /**
     * @var MoneyAmount $TaxDetailTaxMinimum
     */
    protected $TaxDetailTaxMinimum = null;

    /**
     * @var MoneyAmount $TaxDetailTaxableMaximum
     */
    protected $TaxDetailTaxableMaximum = null;

    /**
     * @var MoneyAmount $TaxDetailTaxableMinimum
     */
    protected $TaxDetailTaxableMinimum = null;

    /**
     * @var float $TaxDetailTaxablePercent
     */
    protected $TaxDetailTaxablePercent = null;

    /**
     * @var TaxDetailType $TaxDetailType
     */
    protected $TaxDetailType = null;

    /**
     * @var string $TaxIdNumber
     */
    protected $TaxIdNumber = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return GLAccountNumberKey
     */
    public function getAccount()
    {
      return $this->Account;
    }

    /**
     * @param GLAccountNumberKey $Account
     * @return TaxDetail
     */
    public function setAccount($Account)
    {
      $this->Account = $Account;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsTaxDetailPrintOnDocuments()
    {
      return $this->IsTaxDetailPrintOnDocuments;
    }

    /**
     * @param boolean $IsTaxDetailPrintOnDocuments
     * @return TaxDetail
     */
    public function setIsTaxDetailPrintOnDocuments($IsTaxDetailPrintOnDocuments)
    {
      $this->IsTaxDetailPrintOnDocuments = $IsTaxDetailPrintOnDocuments;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsTaxDetailTaxable()
    {
      return $this->IsTaxDetailTaxable;
    }

    /**
     * @param boolean $IsTaxDetailTaxable
     * @return TaxDetail
     */
    public function setIsTaxDetailTaxable($IsTaxDetailTaxable)
    {
      $this->IsTaxDetailTaxable = $IsTaxDetailTaxable;
      return $this;
    }

    /**
     * @return MoneyAmount
     */
    public function getTaxDetailAmount()
    {
      return $this->TaxDetailAmount;
    }

    /**
     * @param MoneyAmount $TaxDetailAmount
     * @return TaxDetail
     */
    public function setTaxDetailAmount($TaxDetailAmount)
    {
      $this->TaxDetailAmount = $TaxDetailAmount;
      return $this;
    }

    /**
     * @return TaxDetailBase
     */
    public function getTaxDetailBase()
    {
      return $this->TaxDetailBase;
    }

    /**
     * @param TaxDetailBase $TaxDetailBase
     * @return TaxDetail
     */
    public function setTaxDetailBase($TaxDetailBase)
    {
      $this->TaxDetailBase = $TaxDetailBase;
      return $this;
    }

    /**
     * @return TaxDetailBaseQualifers
     */
    public function getTaxDetailBaseQualifiers()
    {
      return $this->TaxDetailBaseQualifiers;
    }

    /**
     * @param TaxDetailBaseQualifers $TaxDetailBaseQualifiers
     * @return TaxDetail
     */
    public function setTaxDetailBaseQualifiers($TaxDetailBaseQualifiers)
    {
      $this->TaxDetailBaseQualifiers = $TaxDetailBaseQualifiers;
      return $this;
    }

    /**
     * @return TaxDetailKey
     */
    public function getTaxDetailBasedOnDetailKey()
    {
      return $this->TaxDetailBasedOnDetailKey;
    }

    /**
     * @param TaxDetailKey $TaxDetailBasedOnDetailKey
     * @return TaxDetail
     */
    public function setTaxDetailBasedOnDetailKey($TaxDetailBasedOnDetailKey)
    {
      $this->TaxDetailBasedOnDetailKey = $TaxDetailBasedOnDetailKey;
      return $this;
    }

    /**
     * @return string
     */
    public function getTaxDetailDescription()
    {
      return $this->TaxDetailDescription;
    }

    /**
     * @param string $TaxDetailDescription
     * @return TaxDetail
     */
    public function setTaxDetailDescription($TaxDetailDescription)
    {
      $this->TaxDetailDescription = $TaxDetailDescription;
      return $this;
    }

    /**
     * @return TaxDetailKey
     */
    public function getTaxDetailKey()
    {
      return $this->TaxDetailKey;
    }

    /**
     * @param TaxDetailKey $TaxDetailKey
     * @return TaxDetail
     */
    public function setTaxDetailKey($TaxDetailKey)
    {
      $this->TaxDetailKey = $TaxDetailKey;
      return $this;
    }

    /**
     * @return float
     */
    public function getTaxDetailPercent()
    {
      return $this->TaxDetailPercent;
    }

    /**
     * @param float $TaxDetailPercent
     * @return TaxDetail
     */
    public function setTaxDetailPercent($TaxDetailPercent)
    {
      $this->TaxDetailPercent = $TaxDetailPercent;
      return $this;
    }

    /**
     * @return string
     */
    public function getTaxDetailPrintCharacter()
    {
      return $this->TaxDetailPrintCharacter;
    }

    /**
     * @param string $TaxDetailPrintCharacter
     * @return TaxDetail
     */
    public function setTaxDetailPrintCharacter($TaxDetailPrintCharacter)
    {
      $this->TaxDetailPrintCharacter = $TaxDetailPrintCharacter;
      return $this;
    }

    /**
     * @return TaxDetailRangeType
     */
    public function getTaxDetailRangeType()
    {
      return $this->TaxDetailRangeType;
    }

    /**
     * @param TaxDetailRangeType $TaxDetailRangeType
     * @return TaxDetail
     */
    public function setTaxDetailRangeType($TaxDetailRangeType)
    {
      $this->TaxDetailRangeType = $TaxDetailRangeType;
      return $this;
    }

    /**
     * @return TaxDetailRounding
     */
    public function getTaxDetailRounding()
    {
      return $this->TaxDetailRounding;
    }

    /**
     * @param TaxDetailRounding $TaxDetailRounding
     * @return TaxDetail
     */
    public function setTaxDetailRounding($TaxDetailRounding)
    {
      $this->TaxDetailRounding = $TaxDetailRounding;
      return $this;
    }

    /**
     * @return MoneyAmount
     */
    public function getTaxDetailTaxMaximum()
    {
      return $this->TaxDetailTaxMaximum;
    }

    /**
     * @param MoneyAmount $TaxDetailTaxMaximum
     * @return TaxDetail
     */
    public function setTaxDetailTaxMaximum($TaxDetailTaxMaximum)
    {
      $this->TaxDetailTaxMaximum = $TaxDetailTaxMaximum;
      return $this;
    }

    /**
     * @return MoneyAmount
     */
    public function getTaxDetailTaxMinimum()
    {
      return $this->TaxDetailTaxMinimum;
    }

    /**
     * @param MoneyAmount $TaxDetailTaxMinimum
     * @return TaxDetail
     */
    public function setTaxDetailTaxMinimum($TaxDetailTaxMinimum)
    {
      $this->TaxDetailTaxMinimum = $TaxDetailTaxMinimum;
      return $this;
    }

    /**
     * @return MoneyAmount
     */
    public function getTaxDetailTaxableMaximum()
    {
      return $this->TaxDetailTaxableMaximum;
    }

    /**
     * @param MoneyAmount $TaxDetailTaxableMaximum
     * @return TaxDetail
     */
    public function setTaxDetailTaxableMaximum($TaxDetailTaxableMaximum)
    {
      $this->TaxDetailTaxableMaximum = $TaxDetailTaxableMaximum;
      return $this;
    }

    /**
     * @return MoneyAmount
     */
    public function getTaxDetailTaxableMinimum()
    {
      return $this->TaxDetailTaxableMinimum;
    }

    /**
     * @param MoneyAmount $TaxDetailTaxableMinimum
     * @return TaxDetail
     */
    public function setTaxDetailTaxableMinimum($TaxDetailTaxableMinimum)
    {
      $this->TaxDetailTaxableMinimum = $TaxDetailTaxableMinimum;
      return $this;
    }

    /**
     * @return float
     */
    public function getTaxDetailTaxablePercent()
    {
      return $this->TaxDetailTaxablePercent;
    }

    /**
     * @param float $TaxDetailTaxablePercent
     * @return TaxDetail
     */
    public function setTaxDetailTaxablePercent($TaxDetailTaxablePercent)
    {
      $this->TaxDetailTaxablePercent = $TaxDetailTaxablePercent;
      return $this;
    }

    /**
     * @return TaxDetailType
     */
    public function getTaxDetailType()
    {
      return $this->TaxDetailType;
    }

    /**
     * @param TaxDetailType $TaxDetailType
     * @return TaxDetail
     */
    public function setTaxDetailType($TaxDetailType)
    {
      $this->TaxDetailType = $TaxDetailType;
      return $this;
    }

    /**
     * @return string
     */
    public function getTaxIdNumber()
    {
      return $this->TaxIdNumber;
    }

    /**
     * @param string $TaxIdNumber
     * @return TaxDetail
     */
    public function setTaxIdNumber($TaxIdNumber)
    {
      $this->TaxIdNumber = $TaxIdNumber;
      return $this;
    }

}
