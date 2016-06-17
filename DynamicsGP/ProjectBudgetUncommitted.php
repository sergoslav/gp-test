<?php

class ProjectBudgetUncommitted
{

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
     * @return ProjectBudgetUncommitted
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
     * @return ProjectBudgetUncommitted
     */
    public function setPOQuantity($POQuantity)
    {
      $this->POQuantity = $POQuantity;
      return $this;
    }

}
