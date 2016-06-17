<?php

class ProjectBilledBase
{

    /**
     * @var MoneyAmount $AccruedRevenue
     */
    protected $AccruedRevenue = null;

    /**
     * @var MoneyAmount $Cost
     */
    protected $Cost = null;

    /**
     * @var Quantity $Quantity
     */
    protected $Quantity = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return MoneyAmount
     */
    public function getAccruedRevenue()
    {
      return $this->AccruedRevenue;
    }

    /**
     * @param MoneyAmount $AccruedRevenue
     * @return ProjectBilledBase
     */
    public function setAccruedRevenue($AccruedRevenue)
    {
      $this->AccruedRevenue = $AccruedRevenue;
      return $this;
    }

    /**
     * @return MoneyAmount
     */
    public function getCost()
    {
      return $this->Cost;
    }

    /**
     * @param MoneyAmount $Cost
     * @return ProjectBilledBase
     */
    public function setCost($Cost)
    {
      $this->Cost = $Cost;
      return $this;
    }

    /**
     * @return Quantity
     */
    public function getQuantity()
    {
      return $this->Quantity;
    }

    /**
     * @param Quantity $Quantity
     * @return ProjectBilledBase
     */
    public function setQuantity($Quantity)
    {
      $this->Quantity = $Quantity;
      return $this;
    }

}
