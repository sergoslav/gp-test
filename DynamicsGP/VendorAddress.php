<?php

class VendorAddress extends ConstituentAddress
{

    /**
     * @var boolean $DeleteOnUpdate
     */
    protected $DeleteOnUpdate = null;

    /**
     * @var VendorAddressKey $Key
     */
    protected $Key = null;

    
    public function __construct()
    {
      parent::__construct();
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
     * @return VendorAddress
     */
    public function setDeleteOnUpdate($DeleteOnUpdate)
    {
      $this->DeleteOnUpdate = $DeleteOnUpdate;
      return $this;
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
     * @return VendorAddress
     */
    public function setKey($Key)
    {
      $this->Key = $Key;
      return $this;
    }

}
