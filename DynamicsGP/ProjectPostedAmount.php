<?php

class ProjectPostedAmount extends ProjectAmount
{

    /**
     * @var MoneyAmount $TaxPaidAmount
     */
    protected $TaxPaidAmount = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return MoneyAmount
     */
    public function getTaxPaidAmount()
    {
      return $this->TaxPaidAmount;
    }

    /**
     * @param MoneyAmount $TaxPaidAmount
     * @return ProjectPostedAmount
     */
    public function setTaxPaidAmount($TaxPaidAmount)
    {
      $this->TaxPaidAmount = $TaxPaidAmount;
      return $this;
    }

}
