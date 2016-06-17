<?php

class PurchaseTax extends BusinessObject
{

    /**
     * @var string $AuditTrailCode
     */
    protected $AuditTrailCode = null;

    /**
     * @var boolean $IsBackoutTax
     */
    protected $IsBackoutTax = null;

    /**
     * @var PurchaseTaxKey $Key
     */
    protected $Key = null;

    /**
     * @var MoneyAmount $TaxAmount
     */
    protected $TaxAmount = null;

    /**
     * @var MoneyAmount $TaxableAmount
     */
    protected $TaxableAmount = null;

    /**
     * @var MoneyAmount $TotalAmount
     */
    protected $TotalAmount = null;

    /**
     * @var MoneyAmount $TotalTaxPotentialAmount
     */
    protected $TotalTaxPotentialAmount = null;

    
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
     * @return PurchaseTax
     */
    public function setAuditTrailCode($AuditTrailCode)
    {
      $this->AuditTrailCode = $AuditTrailCode;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsBackoutTax()
    {
      return $this->IsBackoutTax;
    }

    /**
     * @param boolean $IsBackoutTax
     * @return PurchaseTax
     */
    public function setIsBackoutTax($IsBackoutTax)
    {
      $this->IsBackoutTax = $IsBackoutTax;
      return $this;
    }

    /**
     * @return PurchaseTaxKey
     */
    public function getKey()
    {
      return $this->Key;
    }

    /**
     * @param PurchaseTaxKey $Key
     * @return PurchaseTax
     */
    public function setKey($Key)
    {
      $this->Key = $Key;
      return $this;
    }

    /**
     * @return MoneyAmount
     */
    public function getTaxAmount()
    {
      return $this->TaxAmount;
    }

    /**
     * @param MoneyAmount $TaxAmount
     * @return PurchaseTax
     */
    public function setTaxAmount($TaxAmount)
    {
      $this->TaxAmount = $TaxAmount;
      return $this;
    }

    /**
     * @return MoneyAmount
     */
    public function getTaxableAmount()
    {
      return $this->TaxableAmount;
    }

    /**
     * @param MoneyAmount $TaxableAmount
     * @return PurchaseTax
     */
    public function setTaxableAmount($TaxableAmount)
    {
      $this->TaxableAmount = $TaxableAmount;
      return $this;
    }

    /**
     * @return MoneyAmount
     */
    public function getTotalAmount()
    {
      return $this->TotalAmount;
    }

    /**
     * @param MoneyAmount $TotalAmount
     * @return PurchaseTax
     */
    public function setTotalAmount($TotalAmount)
    {
      $this->TotalAmount = $TotalAmount;
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
     * @return PurchaseTax
     */
    public function setTotalTaxPotentialAmount($TotalTaxPotentialAmount)
    {
      $this->TotalTaxPotentialAmount = $TotalTaxPotentialAmount;
      return $this;
    }

}
