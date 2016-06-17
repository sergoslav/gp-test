<?php

class SalesBackorder extends SalesDocument
{

    /**
     * @var MoneyAmount $DepositAmount
     */
    protected $DepositAmount = null;

    /**
     * @var ArrayOfSalesBackorderLine $Lines
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

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return MoneyAmount
     */
    public function getDepositAmount()
    {
      return $this->DepositAmount;
    }

    /**
     * @param MoneyAmount $DepositAmount
     * @return SalesBackorder
     */
    public function setDepositAmount($DepositAmount)
    {
      $this->DepositAmount = $DepositAmount;
      return $this;
    }

    /**
     * @return ArrayOfSalesBackorderLine
     */
    public function getLines()
    {
      return $this->Lines;
    }

    /**
     * @param ArrayOfSalesBackorderLine $Lines
     * @return SalesBackorder
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
     * @return SalesBackorder
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
     * @return SalesBackorder
     */
    public function setPayments($Payments)
    {
      $this->Payments = $Payments;
      return $this;
    }

}
