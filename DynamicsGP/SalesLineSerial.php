<?php

class SalesLineSerial extends SalesSerial
{

    /**
     * @var SalesLineSerialKey $Key
     */
    protected $Key = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return SalesLineSerialKey
     */
    public function getKey()
    {
      return $this->Key;
    }

    /**
     * @param SalesLineSerialKey $Key
     * @return SalesLineSerial
     */
    public function setKey($Key)
    {
      $this->Key = $Key;
      return $this;
    }

}
