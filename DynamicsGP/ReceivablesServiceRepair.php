<?php

class ReceivablesServiceRepair extends ReceivablesDebitDocument
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
     * @return ReceivablesServiceRepair
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
     * @return ReceivablesServiceRepair
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
     * @return ReceivablesServiceRepair
     */
    public function setCommissions($Commissions)
    {
      $this->Commissions = $Commissions;
      return $this;
    }

}
