<?php

class Kit extends InventoriedItem
{

    /**
     * @var ArrayOfKitComponent $Components
     */
    protected $Components = null;

    /**
     * @var CostOfGoodsSoldAccountSource $CostOfGoodsSoldAccountSource
     */
    protected $CostOfGoodsSoldAccountSource = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return ArrayOfKitComponent
     */
    public function getComponents()
    {
      return $this->Components;
    }

    /**
     * @param ArrayOfKitComponent $Components
     * @return Kit
     */
    public function setComponents($Components)
    {
      $this->Components = $Components;
      return $this;
    }

    /**
     * @return CostOfGoodsSoldAccountSource
     */
    public function getCostOfGoodsSoldAccountSource()
    {
      return $this->CostOfGoodsSoldAccountSource;
    }

    /**
     * @param CostOfGoodsSoldAccountSource $CostOfGoodsSoldAccountSource
     * @return Kit
     */
    public function setCostOfGoodsSoldAccountSource($CostOfGoodsSoldAccountSource)
    {
      $this->CostOfGoodsSoldAccountSource = $CostOfGoodsSoldAccountSource;
      return $this;
    }

}
