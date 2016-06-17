<?php

class ProjectPayment
{

    /**
     * @var ProjectCashDetail $Cash
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
     * @return ProjectCashDetail
     */
    public function getCash()
    {
      return $this->Cash;
    }

    /**
     * @param ProjectCashDetail $Cash
     * @return ProjectPayment
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
     * @return ProjectPayment
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
     * @return ProjectPayment
     */
    public function setPaymentCard($PaymentCard)
    {
      $this->PaymentCard = $PaymentCard;
      return $this;
    }

}
