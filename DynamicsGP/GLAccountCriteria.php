<?php

class GLAccountCriteria extends GLAccountCriteriaBase
{

    /**
     * @var ListRestrictionOfNullableOfGLAccountSummaryType $AccountType
     */
    protected $AccountType = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return ListRestrictionOfNullableOfGLAccountSummaryType
     */
    public function getAccountType()
    {
      return $this->AccountType;
    }

    /**
     * @param ListRestrictionOfNullableOfGLAccountSummaryType $AccountType
     * @return GLAccountCriteria
     */
    public function setAccountType($AccountType)
    {
      $this->AccountType = $AccountType;
      return $this;
    }

}
