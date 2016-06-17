<?php

class EmployeeAddress extends InternationalAddress
{

    /**
     * @var string $County
     */
    protected $County = null;

    /**
     * @var boolean $DeleteOnUpdate
     */
    protected $DeleteOnUpdate = null;

    /**
     * @var InternetAddresses $InternetAddresses
     */
    protected $InternetAddresses = null;

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
     * @return EmployeeAddress
     */
    public function setCounty($County)
    {
      $this->County = $County;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getDeleteOnUpdate()
    {
      return $this->DeleteOnUpdate;
    }

    /**
     * @param boolean $DeleteOnUpdate
     * @return EmployeeAddress
     */
    public function setDeleteOnUpdate($DeleteOnUpdate)
    {
      $this->DeleteOnUpdate = $DeleteOnUpdate;
      return $this;
    }

    /**
     * @return InternetAddresses
     */
    public function getInternetAddresses()
    {
      return $this->InternetAddresses;
    }

    /**
     * @param InternetAddresses $InternetAddresses
     * @return EmployeeAddress
     */
    public function setInternetAddresses($InternetAddresses)
    {
      $this->InternetAddresses = $InternetAddresses;
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
     * @return EmployeeAddress
     */
    public function setKey($Key)
    {
      $this->Key = $Key;
      return $this;
    }

}
