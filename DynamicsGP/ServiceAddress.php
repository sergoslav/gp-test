<?php

class ServiceAddress extends AddressBase
{

    /**
     * @var string $CountryRegion
     */
    protected $CountryRegion = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return string
     */
    public function getCountryRegion()
    {
      return $this->CountryRegion;
    }

    /**
     * @param string $CountryRegion
     * @return ServiceAddress
     */
    public function setCountryRegion($CountryRegion)
    {
      $this->CountryRegion = $CountryRegion;
      return $this;
    }

}
