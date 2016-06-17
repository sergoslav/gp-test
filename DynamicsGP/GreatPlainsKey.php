<?php

class GreatPlainsKey extends Key
{

    /**
     * @var CompanyKey $CompanyKey
     */
    protected $CompanyKey = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return CompanyKey
     */
    public function getCompanyKey()
    {
      return $this->CompanyKey;
    }

    /**
     * @param CompanyKey $CompanyKey
     * @return GreatPlainsKey
     */
    public function setCompanyKey($CompanyKey)
    {
      $this->CompanyKey = $CompanyKey;
      return $this;
    }

}
