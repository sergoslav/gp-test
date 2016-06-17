<?php

class ReceivablesReturn extends ReceivablesCreditDocument
{

    /**
     * @var MoneyAmount $CommissionAmount
     */
    protected $CommissionAmount = null;

    /**
     * @var CommissionBasedOn $CommissionBasedOn
     */
    protected $CommissionBasedOn = null;

    /**
     * @var ArrayOfReceivablesCommission $Commissions
     */
    protected $Commissions = null;

    /**
     * @var ReceivablesPayment $Payment
     */
    protected $Payment = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return MoneyAmount
     */
    public function getCommissionAmount()
    {
      return $this->CommissionAmount;
    }

    /**
     * @param MoneyAmount $CommissionAmount
     * @return ReceivablesReturn
     */
    public function setCommissionAmount($CommissionAmount)
    {
      $this->CommissionAmount = $CommissionAmount;
      return $this;
    }

    /**
     * @return CommissionBasedOn
     */
    public function getCommissionBasedOn()
    {
      return $this->CommissionBasedOn;
    }

    /**
     * @param CommissionBasedOn $CommissionBasedOn
     * @return ReceivablesReturn
     */
    public function setCommissionBasedOn($CommissionBasedOn)
    {
      $this->CommissionBasedOn = $CommissionBasedOn;
      return $this;
    }

    /**
     * @return ArrayOfReceivablesCommission
     */
    public function getCommissions()
    {
      return $this->Commissions;
    }

    /**
     * @param ArrayOfReceivablesCommission $Commissions
     * @return ReceivablesReturn
     */
    public function setCommissions($Commissions)
    {
      $this->Commissions = $Commissions;
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
     * @return ReceivablesReturn
     */
    public function setPayment($Payment)
    {
      $this->Payment = $Payment;
      return $this;
    }

}
