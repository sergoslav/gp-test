<?php

class ProjectEmployeeExpenseLineTax extends BusinessObject
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
     * @var ProjectEmployeeExpenseLineTaxKey $Key
     */
    protected $Key = null;

    /**
     * @var MoneyAmount $MiscellaneousTaxAmount
     */
    protected $MiscellaneousTaxAmount = null;

    /**
     * @var MoneyAmount $PurchaseTaxAmount
     */
    protected $PurchaseTaxAmount = null;

    /**
     * @var MoneyAmount $ReimbursedTaxAmount
     */
    protected $ReimbursedTaxAmount = null;

    /**
     * @var MoneyAmount $TaxableAmount
     */
    protected $TaxableAmount = null;

    /**
     * @var MoneyAmount $TotalAmount
     */
    protected $TotalAmount = null;

    /**
     * @var MoneyAmount $TotalTaxAmount
     */
    protected $TotalTaxAmount = null;

    
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
     * @return ProjectEmployeeExpenseLineTax
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
     * @return ProjectEmployeeExpenseLineTax
     */
    public function setGLAccountKey($GLAccountKey)
    {
      $this->GLAccountKey = $GLAccountKey;
      return $this;
    }

    /**
     * @return ProjectEmployeeExpenseLineTaxKey
     */
    public function getKey()
    {
      return $this->Key;
    }

    /**
     * @param ProjectEmployeeExpenseLineTaxKey $Key
     * @return ProjectEmployeeExpenseLineTax
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
     * @return ProjectEmployeeExpenseLineTax
     */
    public function setMiscellaneousTaxAmount($MiscellaneousTaxAmount)
    {
      $this->MiscellaneousTaxAmount = $MiscellaneousTaxAmount;
      return $this;
    }

    /**
     * @return MoneyAmount
     */
    public function getPurchaseTaxAmount()
    {
      return $this->PurchaseTaxAmount;
    }

    /**
     * @param MoneyAmount $PurchaseTaxAmount
     * @return ProjectEmployeeExpenseLineTax
     */
    public function setPurchaseTaxAmount($PurchaseTaxAmount)
    {
      $this->PurchaseTaxAmount = $PurchaseTaxAmount;
      return $this;
    }

    /**
     * @return MoneyAmount
     */
    public function getReimbursedTaxAmount()
    {
      return $this->ReimbursedTaxAmount;
    }

    /**
     * @param MoneyAmount $ReimbursedTaxAmount
     * @return ProjectEmployeeExpenseLineTax
     */
    public function setReimbursedTaxAmount($ReimbursedTaxAmount)
    {
      $this->ReimbursedTaxAmount = $ReimbursedTaxAmount;
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
     * @return ProjectEmployeeExpenseLineTax
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
     * @return ProjectEmployeeExpenseLineTax
     */
    public function setTotalAmount($TotalAmount)
    {
      $this->TotalAmount = $TotalAmount;
      return $this;
    }

    /**
     * @return MoneyAmount
     */
    public function getTotalTaxAmount()
    {
      return $this->TotalTaxAmount;
    }

    /**
     * @param MoneyAmount $TotalTaxAmount
     * @return ProjectEmployeeExpenseLineTax
     */
    public function setTotalTaxAmount($TotalTaxAmount)
    {
      $this->TotalTaxAmount = $TotalTaxAmount;
      return $this;
    }

}
