<?php

class SalesReturn extends SalesDocument
{

    /**
     * @var ArrayOfSalesDistribution $Distributions
     */
    protected $Distributions = null;

    /**
     * @var \DateTime $GeneralLedgerPostingDate
     */
    protected $GeneralLedgerPostingDate = null;

    /**
     * @var ArrayOfSalesReturnLine $Lines
     */
    protected $Lines = null;

    /**
     * @var MoneyAmount $PaymentAmount
     */
    protected $PaymentAmount = null;

    /**
     * @var ArrayOfSalesPayment $Payments
     */
    protected $Payments = null;

    /**
     * @var string $PostedBy
     */
    protected $PostedBy = null;

    /**
     * @var \DateTime $PostedDate
     */
    protected $PostedDate = null;

    /**
     * @var MoneyAmount $TermsDiscountReturnedAmount
     */
    protected $TermsDiscountReturnedAmount = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return ArrayOfSalesDistribution
     */
    public function getDistributions()
    {
      return $this->Distributions;
    }

    /**
     * @param ArrayOfSalesDistribution $Distributions
     * @return SalesReturn
     */
    public function setDistributions($Distributions)
    {
      $this->Distributions = $Distributions;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getGeneralLedgerPostingDate()
    {
      if ($this->GeneralLedgerPostingDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->GeneralLedgerPostingDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $GeneralLedgerPostingDate
     * @return SalesReturn
     */
    public function setGeneralLedgerPostingDate(\DateTime $GeneralLedgerPostingDate = null)
    {
      if ($GeneralLedgerPostingDate == null) {
       $this->GeneralLedgerPostingDate = null;
      } else {
        $this->GeneralLedgerPostingDate = $GeneralLedgerPostingDate->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return ArrayOfSalesReturnLine
     */
    public function getLines()
    {
      return $this->Lines;
    }

    /**
     * @param ArrayOfSalesReturnLine $Lines
     * @return SalesReturn
     */
    public function setLines($Lines)
    {
      $this->Lines = $Lines;
      return $this;
    }

    /**
     * @return MoneyAmount
     */
    public function getPaymentAmount()
    {
      return $this->PaymentAmount;
    }

    /**
     * @param MoneyAmount $PaymentAmount
     * @return SalesReturn
     */
    public function setPaymentAmount($PaymentAmount)
    {
      $this->PaymentAmount = $PaymentAmount;
      return $this;
    }

    /**
     * @return ArrayOfSalesPayment
     */
    public function getPayments()
    {
      return $this->Payments;
    }

    /**
     * @param ArrayOfSalesPayment $Payments
     * @return SalesReturn
     */
    public function setPayments($Payments)
    {
      $this->Payments = $Payments;
      return $this;
    }

    /**
     * @return string
     */
    public function getPostedBy()
    {
      return $this->PostedBy;
    }

    /**
     * @param string $PostedBy
     * @return SalesReturn
     */
    public function setPostedBy($PostedBy)
    {
      $this->PostedBy = $PostedBy;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getPostedDate()
    {
      if ($this->PostedDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->PostedDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $PostedDate
     * @return SalesReturn
     */
    public function setPostedDate(\DateTime $PostedDate = null)
    {
      if ($PostedDate == null) {
       $this->PostedDate = null;
      } else {
        $this->PostedDate = $PostedDate->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return MoneyAmount
     */
    public function getTermsDiscountReturnedAmount()
    {
      return $this->TermsDiscountReturnedAmount;
    }

    /**
     * @param MoneyAmount $TermsDiscountReturnedAmount
     * @return SalesReturn
     */
    public function setTermsDiscountReturnedAmount($TermsDiscountReturnedAmount)
    {
      $this->TermsDiscountReturnedAmount = $TermsDiscountReturnedAmount;
      return $this;
    }

}
