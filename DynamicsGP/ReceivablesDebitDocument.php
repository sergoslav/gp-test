<?php

class ReceivablesDebitDocument extends ReceivablesDocument
{

    /**
     * @var MoneyAmount $GSTDiscountAmount
     */
    protected $GSTDiscountAmount = null;

    /**
     * @var ReceivablesPayment $Payment
     */
    protected $Payment = null;

    /**
     * @var PaymentTermsKey $PaymentTermsKey
     */
    protected $PaymentTermsKey = null;

    /**
     * @var ReceivablesTerms $Terms
     */
    protected $Terms = null;

    /**
     * @var MoneyAmount $WriteoffAmount
     */
    protected $WriteoffAmount = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return MoneyAmount
     */
    public function getGSTDiscountAmount()
    {
      return $this->GSTDiscountAmount;
    }

    /**
     * @param MoneyAmount $GSTDiscountAmount
     * @return ReceivablesDebitDocument
     */
    public function setGSTDiscountAmount($GSTDiscountAmount)
    {
      $this->GSTDiscountAmount = $GSTDiscountAmount;
      return $this;
    }

    /**
     * @return ReceivablesPayment
     */
    public function getPayment()
    {
      return $this->Payment;
    }

    /**
     * @param ReceivablesPayment $Payment
     * @return ReceivablesDebitDocument
     */
    public function setPayment($Payment)
    {
      $this->Payment = $Payment;
      return $this;
    }

    /**
     * @return PaymentTermsKey
     */
    public function getPaymentTermsKey()
    {
      return $this->PaymentTermsKey;
    }

    /**
     * @param PaymentTermsKey $PaymentTermsKey
     * @return ReceivablesDebitDocument
     */
    public function setPaymentTermsKey($PaymentTermsKey)
    {
      $this->PaymentTermsKey = $PaymentTermsKey;
      return $this;
    }

    /**
     * @return ReceivablesTerms
     */
    public function getTerms()
    {
      return $this->Terms;
    }

    /**
     * @param ReceivablesTerms $Terms
     * @return ReceivablesDebitDocument
     */
    public function setTerms($Terms)
    {
      $this->Terms = $Terms;
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
     * @return ReceivablesDebitDocument
     */
    public function setWriteoffAmount($WriteoffAmount)
    {
      $this->WriteoffAmount = $WriteoffAmount;
      return $this;
    }

}
