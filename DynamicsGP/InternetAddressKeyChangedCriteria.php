<?php

class InternetAddressKeyChangedCriteria extends BaseChangedKeyCriteria
{

    /**
     * @var BetweenRestrictionOfstring $AddressKeyId
     */
    protected $AddressKeyId = null;

    /**
     * @var BetweenRestrictionOfstring $InternetAddressKeyId
     */
    protected $InternetAddressKeyId = null;

    /**
     * @var BetweenRestrictionOfstring $InternetAddressType
     */
    protected $InternetAddressType = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return BetweenRestrictionOfstring
     */
    public function getAddressKeyId()
    {
      return $this->AddressKeyId;
    }

    /**
     * @param BetweenRestrictionOfstring $AddressKeyId
     * @return InternetAddressKeyChangedCriteria
     */
    public function setAddressKeyId($AddressKeyId)
    {
      $this->AddressKeyId = $AddressKeyId;
      return $this;
    }

    /**
     * @return BetweenRestrictionOfstring
     */
    public function getInternetAddressKeyId()
    {
      return $this->InternetAddressKeyId;
    }

    /**
     * @param BetweenRestrictionOfstring $InternetAddressKeyId
     * @return InternetAddressKeyChangedCriteria
     */
    public function setInternetAddressKeyId($InternetAddressKeyId)
    {
      $this->InternetAddressKeyId = $InternetAddressKeyId;
      return $this;
    }

    /**
     * @return BetweenRestrictionOfstring
     */
    public function getInternetAddressType()
    {
      return $this->InternetAddressType;
    }

    /**
     * @param BetweenRestrictionOfstring $InternetAddressType
     * @return InternetAddressKeyChangedCriteria
     */
    public function setInternetAddressType($InternetAddressType)
    {
      $this->InternetAddressType = $InternetAddressType;
      return $this;
    }

}
