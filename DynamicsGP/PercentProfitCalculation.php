<?php

class PercentProfitCalculation extends ProfitCalculation
{

    /**
     * @var Percent $ProfitPercent
     */
    protected $ProfitPercent = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return Percent
     */
    public function getProfitPercent()
    {
      return $this->ProfitPercent;
    }

    /**
     * @param Percent $ProfitPercent
     * @return PercentProfitCalculation
     */
    public function setProfitPercent($ProfitPercent)
    {
      $this->ProfitPercent = $ProfitPercent;
      return $this;
    }

}
