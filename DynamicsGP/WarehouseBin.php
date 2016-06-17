<?php

class WarehouseBin extends BusinessObject
{

    /**
     * @var WarehouseBinKey $Key
     */
    protected $Key = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return WarehouseBinKey
     */
    public function getKey()
    {
      return $this->Key;
    }

    /**
     * @param WarehouseBinKey $Key
     * @return WarehouseBin
     */
    public function setKey($Key)
    {
      $this->Key = $Key;
      return $this;
    }

}
