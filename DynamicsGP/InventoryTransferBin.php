<?php

class InventoryTransferBin extends InventoryBinBase
{

    /**
     * @var string $BinFrom
     */
    protected $BinFrom = null;

    /**
     * @var string $BinTo
     */
    protected $BinTo = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return string
     */
    public function getBinFrom()
    {
      return $this->BinFrom;
    }

    /**
     * @param string $BinFrom
     * @return InventoryTransferBin
     */
    public function setBinFrom($BinFrom)
    {
      $this->BinFrom = $BinFrom;
      return $this;
    }

    /**
     * @return string
     */
    public function getBinTo()
    {
      return $this->BinTo;
    }

    /**
     * @param string $BinTo
     * @return InventoryTransferBin
     */
    public function setBinTo($BinTo)
    {
      $this->BinTo = $BinTo;
      return $this;
    }

}
