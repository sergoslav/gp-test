<?php

class VendorAddressSummary extends BusinessAddress
{

    /**
     * @var VendorAddressKey $Key
     */
    protected $Key = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return VendorAddressKey
     */
    public function getKey()
    {
      return $this->Key;
    }

    /**
     * @param VendorAddressKey $Key
     * @return VendorAddressSummary
     */
    public function setKey($Key)
    {
      $this->Key = $Key;
      return $this;
    }

}
