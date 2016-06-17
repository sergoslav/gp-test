<?php

class GLUnitAccountSummary extends GLAccountSummaryBase
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
     * @return GLUnitAccountSummary
     */
    public function setDecimalPlaces($DecimalPlaces)
    {
      $this->DecimalPlaces = $DecimalPlaces;
      return $this;
    }

}
