<?php

class ProjectAmount
{

    /**
     * @var MoneyAmount $AccruedRevenueAmount
     */
    protected $AccruedRevenueAmount = null;

    /**
     * @var MoneyAmount $BillingAmount
     */
    protected $BillingAmount = null;

    /**
     * @var MoneyAmount $BillingsInExcessOfEarningsAmount
     */
    protected $BillingsInExcessOfEarningsAmount = null;

    /**
     * @var MoneyAmount $DiscountAmount
     */
    protected $DiscountAmount = null;

    /**
     * @var MoneyAmount $EarningsInExcessOfBillingsAmount
     */
    protected $EarningsInExcessOfBillingsAmount = null;

    /**
     * @var MoneyAmount $OverheadAmount
     */
    protected $OverheadAmount = null;

    /**
     * @var MoneyAmount $ProfitAmount
     */
    protected $ProfitAmount = null;

    /**
     * @var Quantity $Quantity
     */
    protected $Quantity = null;

    /**
     * @var MoneyAmount $RecognizedRevenueAmount
     */
    protected $RecognizedRevenueAmount = null;

    /**
     * @var MoneyAmount $RetainageAmount
     */
    protected $RetainageAmount = null;

    /**
     * @var MoneyAmount $SalesTaxAmount
     */
    protected $SalesTaxAmount = null;

    /**
     * @var MoneyAmount $TaxAmount
     */
    protected $TaxAmount = null;

    /**
     * @var MoneyAmount $TotalCost
     */
    protected $TotalCost = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return MoneyAmount
     */
    public function getAccruedRevenueAmount()
    {
      return $this->AccruedRevenueAmount;
    }

    /**
     * @param MoneyAmount $AccruedRevenueAmount
     * @return ProjectAmount
     */
    public function setAccruedRevenueAmount($AccruedRevenueAmount)
    {
      $this->AccruedRevenueAmount = $AccruedRevenueAmount;
      return $this;
    }

    /**
     * @return MoneyAmount
     */
    public function getBillingAmount()
    {
      return $this->BillingAmount;
    }

    /**
     * @param MoneyAmount $BillingAmount
     * @return ProjectAmount
     */
    public function setBillingAmount($BillingAmount)
    {
      $this->BillingAmount = $BillingAmount;
      return $this;
    }

    /**
     * @return MoneyAmount
     */
    public function getBillingsInExcessOfEarningsAmount()
    {
      return $this->BillingsInExcessOfEarningsAmount;
    }

    /**
     * @param MoneyAmount $BillingsInExcessOfEarningsAmount
     * @return ProjectAmount
     */
    public function setBillingsInExcessOfEarningsAmount($BillingsInExcessOfEarningsAmount)
    {
      $this->BillingsInExcessOfEarningsAmount = $BillingsInExcessOfEarningsAmount;
      return $this;
    }

    /**
     * @return MoneyAmount
     */
    public function getDiscountAmount()
    {
      return $this->DiscountAmount;
    }

    /**
     * @param MoneyAmount $DiscountAmount
     * @return ProjectAmount
     */
    public function setDiscountAmount($DiscountAmount)
    {
      $this->DiscountAmount = $DiscountAmount;
      return $this;
    }

    /**
     * @return MoneyAmount
     */
    public function getEarningsInExcessOfBillingsAmount()
    {
      return $this->EarningsInExcessOfBillingsAmount;
    }

    /**
     * @param MoneyAmount $EarningsInExcessOfBillingsAmount
     * @return ProjectAmount
     */
    public function setEarningsInExcessOfBillingsAmount($EarningsInExcessOfBillingsAmount)
    {
      $this->EarningsInExcessOfBillingsAmount = $EarningsInExcessOfBillingsAmount;
      return $this;
    }

    /**
     * @return MoneyAmount
     */
    public function getOverheadAmount()
    {
      return $this->OverheadAmount;
    }

    /**
     * @param MoneyAmount $OverheadAmount
     * @return ProjectAmount
     */
    public function setOverheadAmount($OverheadAmount)
    {
      $this->OverheadAmount = $OverheadAmount;
      return $this;
    }

    /**
     * @return MoneyAmount
     */
    public function getProfitAmount()
    {
      return $this->ProfitAmount;
    }

    /**
     * @param MoneyAmount $ProfitAmount
     * @return ProjectAmount
     */
    public function setProfitAmount($ProfitAmount)
    {
      $this->ProfitAmount = $ProfitAmount;
      return $this;
    }

    /**
     * @return Quantity
     */
    public function getQuantity()
    {
      return $this->Quantity;
    }

    /**
     * @param Quantity $Quantity
     * @return ProjectAmount
     */
    public function setQuantity($Quantity)
    {
      $this->Quantity = $Quantity;
      return $this;
    }

    /**
     * @return MoneyAmount
     */
    public function getRecognizedRevenueAmount()
    {
      return $this->RecognizedRevenueAmount;
    }

    /**
     * @param MoneyAmount $RecognizedRevenueAmount
     * @return ProjectAmount
     */
    public function setRecognizedRevenueAmount($RecognizedRevenueAmount)
    {
      $this->RecognizedRevenueAmount = $RecognizedRevenueAmount;
      return $this;
    }

    /**
     * @return MoneyAmount
     */
    public function getRetainageAmount()
    {
      return $this->RetainageAmount;
    }

    /**
     * @param MoneyAmount $RetainageAmount
     * @return ProjectAmount
     */
    public function setRetainageAmount($RetainageAmount)
    {
      $this->RetainageAmount = $RetainageAmount;
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
     * @return ProjectAmount
     */
    public function setSalesTaxAmount($SalesTaxAmount)
    {
      $this->SalesTaxAmount = $SalesTaxAmount;
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
     * @return ProjectAmount
     */
    public function setTaxAmount($TaxAmount)
    {
      $this->TaxAmount = $TaxAmount;
      return $this;
    }

    /**
     * @return MoneyAmount
     */
    public function getTotalCost()
    {
      return $this->TotalCost;
    }

    /**
     * @param MoneyAmount $TotalCost
     * @return ProjectAmount
     */
    public function setTotalCost($TotalCost)
    {
      $this->TotalCost = $TotalCost;
      return $this;
    }

}
