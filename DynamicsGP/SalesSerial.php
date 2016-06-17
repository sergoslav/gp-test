<?php

class SalesSerial extends SalesSerialLot
{

    /**
     * @var string $SerialNumber
     */
    protected $SerialNumber = null;

    
    public function __construct()
    {
      parent::__construct();
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
     * @return SalesSerial
     */
    public function setSerialNumber($SerialNumber)
    {
      $this->SerialNumber = $SerialNumber;
      return $this;
    }

}
