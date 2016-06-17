<?php

class PayablesReturn extends PayablesCreditDocument
{

    /**
     * @var MoneyAmount $DiscountReturnedAmount
     */
    protected $DiscountReturnedAmount = null;

    /**
     * @var PayablesPayment $Payment
     */
    protected $Payment = null;

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
     * @return MoneyAmount
     */
    public function getDiscountReturnedAmount()
    {
      return $this->DiscountReturnedAmount;
    }

    /**
     * @param MoneyAmount $DiscountReturnedAmount
     * @return PayablesReturn
     */
    public function setDiscountReturnedAmount($DiscountReturnedAmount)
    {
      $this->DiscountReturnedAmount = $DiscountReturnedAmount;
      return $this;
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
     * @return PayablesReturn
     */
    public function setPayment($Payment)
    {
      $this->Payment = $Payment;
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
     * @return PayablesReturn
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
     * @return PayablesReturn
     */
    public function setWriteoffAmount($WriteoffAmount)
    {
      $this->WriteoffAmount = $WriteoffAmount;
      return $this;
    }

}
