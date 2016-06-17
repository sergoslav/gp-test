<?php

class ReceivablesPayment
{

    /**
     * @var CashDetail $Cash
     */
    protected $Cash = null;

    /**
     * @var CheckDetail $Check
     */
    protected $Check = null;

    /**
     * @var ReceivablesPaymentCardDetail $PaymentCard
     */
    protected $PaymentCard = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return CashDetail
     */
    public function getCash()
    {
      return $this->Cash;
    }

    /**
     * @param CashDetail $Cash
     * @return ReceivablesPayment
     */
    public function setCash($Cash)
    {
      $this->Cash = $Cash;
      return $this;
    }

    /**
     * @return CheckDetail
     */
    public function getCheck()
    {
      return $this->Check;
    }

    /**
     * @param CheckDetail $Check
     * @return ReceivablesPayment
     */
    public function setCheck($Check)
    {
      $this->Check = $Check;
      return $this;
    }

    /**
     * @return ReceivablesPaymentCardDetail
     */
    public function getPaymentCard()
    {
      return $this->PaymentCard;
    }

    /**
     * @param ReceivablesPaymentCardDetail $PaymentCard
     * @return ReceivablesPayment
     */
    public function setPaymentCard($PaymentCard)
    {
      $this->PaymentCard = $PaymentCard;
      return $this;
    }

}
