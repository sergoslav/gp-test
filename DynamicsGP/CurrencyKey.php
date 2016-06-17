<?php

class CurrencyKey extends ReferenceKey
{

    /**
     * @var string $ISOCode
     */
    protected $ISOCode = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return string
     */
    public function getISOCode()
    {
      return $this->ISOCode;
    }

    /**
     * @param string $ISOCode
     * @return CurrencyKey
     */
    public function setISOCode($ISOCode)
    {
      $this->ISOCode = $ISOCode;
      return $this;
    }

}
