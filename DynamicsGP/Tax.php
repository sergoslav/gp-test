<?php

class Tax extends BusinessObject
{

    /**
     * @var boolean $IsBackoutTax
     */
    protected $IsBackoutTax = null;

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

    
    public function __construct()
    {
      parent::__construct();
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
     * @return Tax
     */
    public function setIsBackoutTax($IsBackoutTax)
    {
      $this->IsBackoutTax = $IsBackoutTax;
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
     * @return Tax
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
     * @return Tax
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
     * @return Tax
     */
    public function setTotalAmount($TotalAmount)
    {
      $this->TotalAmount = $TotalAmount;
      return $this;
    }

}
