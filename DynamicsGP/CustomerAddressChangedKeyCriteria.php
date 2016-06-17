<?php

class CustomerAddressChangedKeyCriteria extends BaseChangedKeyCriteria
{

    /**
     * @var BetweenRestrictionOfstring $AddressKeyId
     */
    protected $AddressKeyId = null;

    /**
     * @var BetweenRestrictionOfstring $CustomerKeyId
     */
    protected $CustomerKeyId = null;

    
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
     * @return CustomerAddressChangedKeyCriteria
     */
    public function setAddressKeyId($AddressKeyId)
    {
      $this->AddressKeyId = $AddressKeyId;
      return $this;
    }

    /**
     * @return BetweenRestrictionOfstring
     */
    public function getCustomerKeyId()
    {
      return $this->CustomerKeyId;
    }

    /**
     * @param BetweenRestrictionOfstring $CustomerKeyId
     * @return CustomerAddressChangedKeyCriteria
     */
    public function setCustomerKeyId($CustomerKeyId)
    {
      $this->CustomerKeyId = $CustomerKeyId;
      return $this;
    }

}
