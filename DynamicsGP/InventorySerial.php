<?php

class InventorySerial extends InventorySerialBase
{

    /**
     * @var string $Bin
     */
    protected $Bin = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return string
     */
    public function getBin()
    {
      return $this->Bin;
    }

    /**
     * @param string $Bin
     * @return InventorySerial
     */
    public function setBin($Bin)
    {
      $this->Bin = $Bin;
      return $this;
    }

}
