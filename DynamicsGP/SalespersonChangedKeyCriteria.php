<?php

class SalespersonChangedKeyCriteria extends BaseChangedKeyCriteria
{

    /**
     * @var BetweenRestrictionOfstring $SalespersonKey
     */
    protected $SalespersonKey = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return BetweenRestrictionOfstring
     */
    public function getSalespersonKey()
    {
      return $this->SalespersonKey;
    }

    /**
     * @param BetweenRestrictionOfstring $SalespersonKey
     * @return SalespersonChangedKeyCriteria
     */
    public function setSalespersonKey($SalespersonKey)
    {
      $this->SalespersonKey = $SalespersonKey;
      return $this;
    }

}
