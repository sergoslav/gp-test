<?php

class SalesComponentSerial extends SalesSerial
{

    /**
     * @var SalesComponentSerialKey $Key
     */
    protected $Key = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return SalesComponentSerialKey
     */
    public function getKey()
    {
      return $this->Key;
    }

    /**
     * @param SalesComponentSerialKey $Key
     * @return SalesComponentSerial
     */
    public function setKey($Key)
    {
      $this->Key = $Key;
      return $this;
    }

}
