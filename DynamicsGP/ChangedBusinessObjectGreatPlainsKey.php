<?php

class ChangedBusinessObjectGreatPlainsKey extends ChangedBusinessObjectKey
{

    /**
     * @var CompanyKey $CompanyKey
     */
    protected $CompanyKey = null;

    
    public function __construct()
    {
      parent::__construct();
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
     * @return ChangedBusinessObjectGreatPlainsKey
     */
    public function setCompanyKey($CompanyKey)
    {
      $this->CompanyKey = $CompanyKey;
      return $this;
    }

}
