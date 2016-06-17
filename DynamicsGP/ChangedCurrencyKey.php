<?php

class ChangedCurrencyKey extends ChangedBusinessObjectGreatPlainsKey
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
     * @return ChangedCurrencyKey
     */
    public function setISOCode($ISOCode)
    {
      $this->ISOCode = $ISOCode;
      return $this;
    }

}
