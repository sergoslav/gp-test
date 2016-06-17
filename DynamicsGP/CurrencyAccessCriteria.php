<?php

class CurrencyAccessCriteria extends Criteria
{

    /**
     * @var BetweenRestrictionOfNullableOfint $CompanyId
     */
    protected $CompanyId = null;

    /**
     * @var LikeRestrictionOfstring $CurrencyISOCode
     */
    protected $CurrencyISOCode = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return BetweenRestrictionOfNullableOfint
     */
    public function getCompanyId()
    {
      return $this->CompanyId;
    }

    /**
     * @param BetweenRestrictionOfNullableOfint $CompanyId
     * @return CurrencyAccessCriteria
     */
    public function setCompanyId($CompanyId)
    {
      $this->CompanyId = $CompanyId;
      return $this;
    }

    /**
     * @return LikeRestrictionOfstring
     */
    public function getCurrencyISOCode()
    {
      return $this->CurrencyISOCode;
    }

    /**
     * @param LikeRestrictionOfstring $CurrencyISOCode
     * @return CurrencyAccessCriteria
     */
    public function setCurrencyISOCode($CurrencyISOCode)
    {
      $this->CurrencyISOCode = $CurrencyISOCode;
      return $this;
    }

}
