<?php

class PayablesPayment
{

    /**
     * @var PayablesCashDetail $Cash
     */
    protected $Cash = null;

    /**
     * @var CheckDetail $Check
     */
    protected $Check = null;

    /**
     * @var PaymentCardDetail $PaymentCard
     */
    protected $PaymentCard = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return PayablesCashDetail
     */
    public function getCash()
    {
      return $this->Cash;
    }

    /**
     * @param PayablesCashDetail $Cash
     * @return PayablesPayment
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
     * @return PayablesPayment
     */
    public function setCheck($Check)
    {
      $this->Check = $Check;
      return $this;
    }

    /**
     * @return PaymentCardDetail
     */
    public function getPaymentCard()
    {
      return $this->PaymentCard;
    }

    /**
     * @param PaymentCardDetail $PaymentCard
     * @return PayablesPayment
     */
    public function setPaymentCard($PaymentCard)
    {
      $this->PaymentCard = $PaymentCard;
      return $this;
    }

}
