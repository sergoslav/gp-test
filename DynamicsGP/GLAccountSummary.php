<?php

class GLAccountSummary extends GLAccountSummaryBase
{

    /**
     * @var GLAccountSummaryType $AccountType
     */
    protected $AccountType = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return GLAccountSummaryType
     */
    public function getAccountType()
    {
      return $this->AccountType;
    }

    /**
     * @param GLAccountSummaryType $AccountType
     * @return GLAccountSummary
     */
    public function setAccountType($AccountType)
    {
      $this->AccountType = $AccountType;
      return $this;
    }

}
