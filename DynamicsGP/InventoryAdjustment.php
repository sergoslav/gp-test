<?php

class InventoryAdjustment extends InventoryBase
{

    /**
     * @var ArrayOfInventoryAdjustmentLine $Lines
     */
    protected $Lines = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return ArrayOfInventoryAdjustmentLine
     */
    public function getLines()
    {
      return $this->Lines;
    }

    /**
     * @param ArrayOfInventoryAdjustmentLine $Lines
     * @return InventoryAdjustment
     */
    public function setLines($Lines)
    {
      $this->Lines = $Lines;
      return $this;
    }

}
