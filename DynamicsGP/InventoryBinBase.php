<?php

class InventoryBinBase extends BusinessObject
{

    /**
     * @var InventoryBinKey $Key
     */
    protected $Key = null;

    /**
     * @var Quantity $Quantity
     */
    protected $Quantity = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return InventoryBinKey
     */
    public function getKey()
    {
      return $this->Key;
    }

    /**
     * @param InventoryBinKey $Key
     * @return InventoryBinBase
     */
    public function setKey($Key)
    {
      $this->Key = $Key;
      return $this;
    }

    /**
     * @return Quantity
     */
    public function getQuantity()
    {
      return $this->Quantity;
    }

    /**
     * @param Quantity $Quantity
     * @return InventoryBinBase
     */
    public function setQuantity($Quantity)
    {
      $this->Quantity = $Quantity;
      return $this;
    }

}
