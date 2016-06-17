<?php

class InventoryTransferSerial extends InventorySerialBase
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
     * @return InventoryTransferSerial
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
     * @return InventoryTransferSerial
     */
    public function setBinTo($BinTo)
    {
      $this->BinTo = $BinTo;
      return $this;
    }

}
