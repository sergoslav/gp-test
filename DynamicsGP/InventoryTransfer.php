<?php

class InventoryTransfer extends InventoryBase
{

    /**
     * @var ArrayOfInventoryTransferLine $Lines
     */
    protected $Lines = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return ArrayOfInventoryTransferLine
     */
    public function getLines()
    {
      return $this->Lines;
    }

    /**
     * @param ArrayOfInventoryTransferLine $Lines
     * @return InventoryTransfer
     */
    public function setLines($Lines)
    {
      $this->Lines = $Lines;
      return $this;
    }

}
