<?php

class SalesComponentLot extends SalesLot
{

    /**
     * @var SalesComponentLotKey $Key
     */
    protected $Key = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return SalesComponentLotKey
     */
    public function getKey()
    {
      return $this->Key;
    }

    /**
     * @param SalesComponentLotKey $Key
     * @return SalesComponentLot
     */
    public function setKey($Key)
    {
      $this->Key = $Key;
      return $this;
    }

}
