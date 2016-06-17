<?php

class ServiceCharge extends BusinessObject
{

    /**
     * @var Percent $BillablePercent
     */
    protected $BillablePercent = null;

    /**
     * @var MoneyAmount $TotalAmount
     */
    protected $TotalAmount = null;

    /**
     * @var MoneyAmount $TotalCost
     */
    protected $TotalCost = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return Percent
     */
    public function getBillablePercent()
    {
      return $this->BillablePercent;
    }

    /**
     * @param Percent $BillablePercent
     * @return ServiceCharge
     */
    public function setBillablePercent($BillablePercent)
    {
      $this->BillablePercent = $BillablePercent;
      return $this;
    }

    /**
     * @return MoneyAmount
     */
    public function getTotalAmount()
    {
      return $this->TotalAmount;
    }

    /**
     * @param MoneyAmount $TotalAmount
     * @return ServiceCharge
     */
    public function setTotalAmount($TotalAmount)
    {
      $this->TotalAmount = $TotalAmount;
      return $this;
    }

    /**
     * @return MoneyAmount
     */
    public function getTotalCost()
    {
      return $this->TotalCost;
    }

    /**
     * @param MoneyAmount $TotalCost
     * @return ServiceCharge
     */
    public function setTotalCost($TotalCost)
    {
      $this->TotalCost = $TotalCost;
      return $this;
    }

}
