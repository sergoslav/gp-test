<?php

class InventorySerialBase extends BusinessObject
{

    /**
     * @var InventorySerialKey $Key
     */
    protected $Key = null;

    /**
     * @var string $SerialNumber
     */
    protected $SerialNumber = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return InventorySerialKey
     */
    public function getKey()
    {
      return $this->Key;
    }

    /**
     * @param InventorySerialKey $Key
     * @return InventorySerialBase
     */
    public function setKey($Key)
    {
      $this->Key = $Key;
      return $this;
    }

    /**
     * @return string
     */
    public function getSerialNumber()
    {
      return $this->SerialNumber;
    }

    /**
     * @param string $SerialNumber
     * @return InventorySerialBase
     */
    public function setSerialNumber($SerialNumber)
    {
      $this->SerialNumber = $SerialNumber;
      return $this;
    }

}
