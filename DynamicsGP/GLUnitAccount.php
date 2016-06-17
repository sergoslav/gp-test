<?php

class GLUnitAccount extends GLAccount
{

    /**
     * @var GLUnitAccountDecimalPlaces $DecimalPlaces
     */
    protected $DecimalPlaces = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return GLUnitAccountDecimalPlaces
     */
    public function getDecimalPlaces()
    {
      return $this->DecimalPlaces;
    }

    /**
     * @param GLUnitAccountDecimalPlaces $DecimalPlaces
     * @return GLUnitAccount
     */
    public function setDecimalPlaces($DecimalPlaces)
    {
      $this->DecimalPlaces = $DecimalPlaces;
      return $this;
    }

}
