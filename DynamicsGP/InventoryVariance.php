<?php

class InventoryVariance extends InventoryBase
{

    /**
     * @var ArrayOfInventoryVarianceLine $Lines
     */
    protected $Lines = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return ArrayOfInventoryVarianceLine
     */
    public function getLines()
    {
      return $this->Lines;
    }

    /**
     * @param ArrayOfInventoryVarianceLine $Lines
     * @return InventoryVariance
     */
    public function setLines($Lines)
    {
      $this->Lines = $Lines;
      return $this;
    }

}
