<?php

class EmployeeAddressSummary extends InternationalAddress
{

    /**
     * @var string $County
     */
    protected $County = null;

    /**
     * @var EmployeeAddressKey $Key
     */
    protected $Key = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return string
     */
    public function getCounty()
    {
      return $this->County;
    }

    /**
     * @param string $County
     * @return EmployeeAddressSummary
     */
    public function setCounty($County)
    {
      $this->County = $County;
      return $this;
    }

    /**
     * @return EmployeeAddressKey
     */
    public function getKey()
    {
      return $this->Key;
    }

    /**
     * @param EmployeeAddressKey $Key
     * @return EmployeeAddressSummary
     */
    public function setKey($Key)
    {
      $this->Key = $Key;
      return $this;
    }

}
