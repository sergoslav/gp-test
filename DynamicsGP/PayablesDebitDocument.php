<?php

class PayablesDebitDocument extends PayablesDocument
{

    /**
     * @var PayablesPayment $Payment
     */
    protected $Payment = null;

    /**
     * @var PayablesTerms $Terms
     */
    protected $Terms = null;

    /**
     * @var MoneyAmount $TotalPayments
     */
    protected $TotalPayments = null;

    /**
     * @var MoneyAmount $WriteoffAmount
     */
    protected $WriteoffAmount = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return PayablesPayment
     */
    public function getPayment()
    {
      return $this->Payment;
    }

    /**
     * @param PayablesPayment $Payment
     * @return PayablesDebitDocument
     */
    public function setPayment($Payment)
    {
      $this->Payment = $Payment;
      return $this;
    }

    /**
     * @return PayablesTerms
     */
    public function getTerms()
    {
      return $this->Terms;
    }

    /**
     * @param PayablesTerms $Terms
     * @return PayablesDebitDocument
     */
    public function setTerms($Terms)
    {
      $this->Terms = $Terms;
      return $this;
    }

    /**
     * @return MoneyAmount
     */
    public function getTotalPayments()
    {
      return $this->TotalPayments;
    }

    /**
     * @param MoneyAmount $TotalPayments
     * @return PayablesDebitDocument
     */
    public function setTotalPayments($TotalPayments)
    {
      $this->TotalPayments = $TotalPayments;
      return $this;
    }

    /**
     * @return MoneyAmount
     */
    public function getWriteoffAmount()
    {
      return $this->WriteoffAmount;
    }

    /**
     * @param MoneyAmount $WriteoffAmount
     * @return PayablesDebitDocument
     */
    public function setWriteoffAmount($WriteoffAmount)
    {
      $this->WriteoffAmount = $WriteoffAmount;
      return $this;
    }

}
