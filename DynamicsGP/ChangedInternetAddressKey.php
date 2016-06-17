<?php

class ChangedInternetAddressKey extends ChangedBusinessObjectGreatPlainsKey
{

    /**
     * @var AddressKey $AddressKey
     */
    protected $AddressKey = null;

    /**
     * @var string $InternetAddressKey
     */
    protected $InternetAddressKey = null;

    /**
     * @var string $InternetAddressType
     */
    protected $InternetAddressType = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return AddressKey
     */
    public function getAddressKey()
    {
      return $this->AddressKey;
    }

    /**
     * @param AddressKey $AddressKey
     * @return ChangedInternetAddressKey
     */
    public function setAddressKey($AddressKey)
    {
      $this->AddressKey = $AddressKey;
      return $this;
    }

    /**
     * @return string
     */
    public function getInternetAddressKey()
    {
      return $this->InternetAddressKey;
    }

    /**
     * @param string $InternetAddressKey
     * @return ChangedInternetAddressKey
     */
    public function setInternetAddressKey($InternetAddressKey)
    {
      $this->InternetAddressKey = $InternetAddressKey;
      return $this;
    }

    /**
     * @return string
     */
    public function getInternetAddressType()
    {
      return $this->InternetAddressType;
    }

    /**
     * @param string $InternetAddressType
     * @return ChangedInternetAddressKey
     */
    public function setInternetAddressType($InternetAddressType)
    {
      $this->InternetAddressType = $InternetAddressType;
      return $this;
    }

}
