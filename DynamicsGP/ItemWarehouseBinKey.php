<?php

class ItemWarehouseBinKey extends ReferenceKey
{

    /**
     * @var string $Bin
     */
    protected $Bin = null;

    /**
     * @var ItemWarehouseKey $ItemWarehouseKey
     */
    protected $ItemWarehouseKey = null;

    
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
     * @return ItemWarehouseBinKey
     */
    public function setBin($Bin)
    {
      $this->Bin = $Bin;
      return $this;
    }

    /**
     * @return ItemWarehouseKey
     */
    public function getItemWarehouseKey()
    {
      return $this->ItemWarehouseKey;
    }

    /**
     * @param ItemWarehouseKey $ItemWarehouseKey
     * @return ItemWarehouseBinKey
     */
    public function setItemWarehouseKey($ItemWarehouseKey)
    {
      $this->ItemWarehouseKey = $ItemWarehouseKey;
      return $this;
    }

}
