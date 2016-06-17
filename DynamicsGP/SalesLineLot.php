<?php

class SalesLineLot extends SalesLot
{

    /**
     * @var SalesLineLotKey $Key
     */
    protected $Key = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return SalesLineLotKey
     */
    public function getKey()
    {
      return $this->Key;
    }

    /**
     * @param SalesLineLotKey $Key
     * @return SalesLineLot
     */
    public function setKey($Key)
    {
      $this->Key = $Key;
      return $this;
    }

}
