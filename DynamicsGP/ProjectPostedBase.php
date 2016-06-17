<?php

class ProjectPostedBase extends ProjectAmount
{

    /**
     * @var MoneyAmount $EarningsAmount
     */
    protected $EarningsAmount = null;

    /**
     * @var MoneyAmount $POCosts
     */
    protected $POCosts = null;

    /**
     * @var Quantity $POQuantity
     */
    protected $POQuantity = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return MoneyAmount
     */
    public function getEarningsAmount()
    {
      return $this->EarningsAmount;
    }

    /**
     * @param MoneyAmount $EarningsAmount
     * @return ProjectPostedBase
     */
    public function setEarningsAmount($EarningsAmount)
    {
      $this->EarningsAmount = $EarningsAmount;
      return $this;
    }

    /**
     * @return MoneyAmount
     */
    public function getPOCosts()
    {
      return $this->POCosts;
    }

    /**
     * @param MoneyAmount $POCosts
     * @return ProjectPostedBase
     */
    public function setPOCosts($POCosts)
    {
      $this->POCosts = $POCosts;
      return $this;
    }

    /**
     * @return Quantity
     */
    public function getPOQuantity()
    {
      return $this->POQuantity;
    }

    /**
     * @param Quantity $POQuantity
     * @return ProjectPostedBase
     */
    public function setPOQuantity($POQuantity)
    {
      $this->POQuantity = $POQuantity;
      return $this;
    }

}
